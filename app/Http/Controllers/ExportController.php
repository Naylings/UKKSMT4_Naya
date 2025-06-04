<?php

namespace App\Http\Controllers;

use App\Exports\HistoryEmployeeExport;
use App\Exports\HistoryStudentExport;
use App\Repository\Transaction\TransactionRepo;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{

    public function __construct(
        protected TransactionRepo $__repo_transaction
    ) {}

    public function exportStudent()
    {
        $orderq = $this->__repo_transaction->index(request()->all());
        $orders  = $orderq->where('student_id', auth()->user()->userReference->reference_id)->get();
        return Excel::download(new HistoryStudentExport($orders), "LaporanPembelian.xlsx");
    }

    public function exportEmployee()
    {
        $orderq = $this->__repo_transaction->index(request()->all());
        $orders  = $orderq->whereHas('product.room.employeeHasRoom', function ($q) {
            $q->where('employee_id', auth()->user()->userReference->reference_id);
        })
            ->get();
        return Excel::download(new HistoryEmployeeExport($orders), "LaporanPembelian.xlsx");
    }
}
