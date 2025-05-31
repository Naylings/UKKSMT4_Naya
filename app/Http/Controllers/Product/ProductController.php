<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Repository\Product\ProductRepo;
use App\Repository\Ruangan\RuanganRepo;
use Illuminate\Http\Request;
use League\CommonMark\Reference\Reference;


class ProductController extends Controller
{
    public function __construct(
        protected ProductRepo $__repo_product,
        protected RuanganRepo $__repo_ruangan,
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
        return view('backend.pages.product.form',compact('rooms'));
    }
}
