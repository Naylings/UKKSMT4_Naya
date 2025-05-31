<?php

namespace App\Repository\Ruangan;

use App\Contracts\Ruangan\RuanganInterface;
use App\Models\Ruangan;

class RuanganRepo implements RuanganInterface
{
    public function index(array $attributes){
        $attributes ??= request()->all();
        return Ruangan::with('employeeHasRoom.employee.people')->get();
    }

    public function store(array $attributes)
    {
        $attributes ??= request()->all();
        return  Ruangan::updateOrCreate([
            "id" => $attributes['id'] ?? null,
        ], [
            "name"                   => $attributes["name"],
            "no"                     => $attributes["no"],

        ]);
    }
}
