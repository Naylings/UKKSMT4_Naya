<?php

namespace App\Repository\UserReference;

use App\Contracts\UserReference\UserReferenceInterface;
use App\Models\UserReference;

class UserReferenceRepo implements UserReferenceInterface
{
    public function index(array $request)
    {
        $attributes ??= request()->all();
        return UserReference::with('reference');
    }

    public function store(array $attributes)
    {
        $attributes ??= request()->all();
        return UserReference::updateOrCreate([
            "id" => $attributes['id'] ?? null,
        ], [
            'status'                 => $attributes['status'],
            "reference_id"           => $attributes["reference_id"],
            "user_id"                => $attributes["user_id"],
            'reference_type'         => $attributes["reference_type"],

        ]);
    }
}
