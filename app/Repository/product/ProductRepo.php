<?php

namespace App\Repository\Product;

use App\Contracts\Product\ProductInterface;
use App\Models\Product;

class ProductRepo implements ProductInterface
{


    public function store(array $attributes)
    {
        $attributes ??= request()->all();
        return  Product::updateOrCreate([
            "id" => $attributes['id'] ?? null,
        ], [
            'name'       => $attributes['name'],
            'price'      => $attributes['price'],
            'ruangan_id' => $attributes['ruangan_id']
        ]);
    }

    public function index(array $attributes)
    {
        return Product::with('room')->whereHas('room.employeeHasRoom', function ($q){
            $q->where('employee_id',auth()->user()->userReference->reference_id);
        })->get();
    }
}
