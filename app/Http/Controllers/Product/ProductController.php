<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Student;
use App\Models\Transaction;
use App\Repository\People\PeopleRepo;
use App\Repository\Product\ProductRepo;
use App\Repository\Ruangan\RuanganRepo;
use App\Repository\Transaction\TransactionRepo;
use Illuminate\Http\Request;
use League\CommonMark\Reference\Reference;


class ProductController extends Controller
{
    public function __construct(
        protected ProductRepo $__repo_product,
        protected RuanganRepo $__repo_ruangan,
        protected TransactionRepo $__repo_transaction,
        protected PeopleRepo $__repo_people,
    ) {}

    public function index(Request $req)
    {
        $product = $this->__repo_product->index(request()->all());
        return view('backend.pages.product.table', compact('product'));
    }

    public function store(Request $req)
    {
        $product  = $this->__repo_product->store(Request()->all());

        return redirect()->route('product');
    }

    public function form(Request $req)
    {
        $rooms = $this->__repo_ruangan->index(request()->all());
        return view('backend.pages.product.form', compact('rooms'));
    }


    public function queue(Request $req)
    {
        // Get employee reference ID
        $employeeId = auth()->user()->userReference->reference_id;

        // Define the statuses for the 'queue' context
        $statuses = [Transaction::STATUS_PROGRESS, Transaction::STATUS_PENDING];

        // Get the orders using the repository
        $orders = $this->__repo_transaction->getOrdersByStatus($employeeId, $statuses);

        // Return the view with orders
        return view('backend.pages.product.queue', compact('orders'));
    }

    public function history(Request $req)
    {
        // Get employee reference ID
        $employeeId = auth()->user()->userReference->reference_id;

        // Define the status for the 'history' context
        $statuses = [Transaction::STATUS_COMPLETE];

        // Get the orders using the repository
        $orders = $this->__repo_transaction->getOrdersByStatus($employeeId, $statuses);

        // Return the view with orders
        return view('backend.pages.product.history', compact('orders'));
    }
}
