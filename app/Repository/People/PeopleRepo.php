<?php

namespace App\Repository\People;

use App\Contracts\People\PeopleInterface;
use App\Models\People;

class PeopleRepo implements PeopleInterface
{
    public function index(array $request)
    {
        $attributes ??= request()->all();
        return People::with('reference');
    }

    public function store(array $attributes)
    {
        $attributes ??= request()->all();
        return  People::updateOrCreate([
            "id" => $attributes['id'] ?? null,
        ], [
            "name"                   => $attributes["name"],
            "sex"                    => $attributes["sex"],
            "dob"                    => $attributes["dob"],
            'pob'                    => $attributes["pob"],
            "reference_id"           => $attributes["reference_id"],
            'reference_type'         => $attributes["reference_type"],

        ]);
    }
}
