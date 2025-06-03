<?php

namespace App\Http\Controllers;

use App\Exports\HistoryExport;
use App\Repository\Transaction\TransactionRepo;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{

    public function __construct(
        protected TransactionRepo $__repo_transaction
    ) {}

    public function export(){
        $orderq = $this->__repo_transaction->index(request()->all());
        $orders  = $orderq->where('student_id', auth()->user()->userReference->reference_id)->get();
        return Excel::download(new HistoryExport($orders), "LaporanPembelian.xlsx");
    }
}
