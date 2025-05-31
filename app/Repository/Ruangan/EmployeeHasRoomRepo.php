<?php

namespace App\Repository\Ruangan;

use App\Contracts\Ruangan\EmployeeHasRoomInterface;
use App\Models\EmployeeHasRoom;

class EmployeeHasRoomRepo implements EmployeeHasRoomInterface
{
    public function store (array $attributes){
        $attributes ??= request()->all();
        return EmployeeHasRoom::updateOrCreate([
            'id' => $attributes['id']?? null
        ], [
            'employee_id' => $attributes['employee_id'],
            'ruangan_id'  => $attributes['ruangan_id']
        ]);
    }
}
