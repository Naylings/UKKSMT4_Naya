<?php

namespace App\Repository\Product;

use App\Contracts\Product\ProductInterface;
use App\Models\Product;
use App\Models\Student;

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
        if (auth()->user()->userReference->reference_type == Student::class) {
            return Product::get();
        } else {
            
        return Product::with('room')->whereHas('room.employeeHasRoom', function ($q) { 
            $q->where('employee_id', auth()->user()->userReference->reference_id);
        })->get();
        }
    }
}
