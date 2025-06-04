<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Repository\Product\ProductRepo;
use App\Repository\Transaction\TransactionRepo;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function __construct(
        protected ProductRepo $__repo_product,
        protected TransactionRepo $__repo_transaction
    ) {}

    public function index(Request $req)
    {
        $products = $this->__repo_product->index(request()->all());
        return view('backend.pages.order.table', compact('products'));
    }

    public function order(Request $req)
    {
        $order = $this->__repo_transaction->order(request()->all());
        return redirect()->route("order");
    }

    public function history(Request $req)
    {
        $order = $this->__repo_transaction->index(request()->all());
        $orders  = $order->where('student_id', auth()->user()->userReference->reference_id)->get();
        return view('backend.pages.order.history', compact('orders'));
    }

    public function order_progress($id, Request $req)
    {
        $status = Transaction::STATUS_PROGRESS;
        $this->__repo_transaction->status($id, $status);
        return redirect()->route('queue');
    }

    public function order_complete($id, Request $req)
    {
        $status = Transaction::STATUS_COMPLETE;
        $this->__repo_transaction->status($id, $status);
        return redirect()->route('queue');
    }

    public function order_decline($id, Request $req)
    {
        $status = Transaction::STATUS_FAILED;
        $this->__repo_transaction->status($id, $status);
        return redirect()->route('queue');
    }
}
