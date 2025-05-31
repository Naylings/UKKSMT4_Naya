<?php

namespace App\Repository\Users;

use App\Contracts\Users\UsersInterface;
use App\Models\Users;
use Illuminate\Support\Facades\Hash;

class UsersRepo implements UsersInterface
{
    public function index(array $request)
    {
        $attributes ??= request()->all();
        return Users::with('reference');
    }

    public function store(array $attributes)
    {
        $attributes ??= request()->all();
        return Users::updateOrCreate([
            "id" => $attributes['id'] ?? null,
        ], [
            'email'                 => $attributes['email'],
            "username"              => $attributes["username"],
            'password'              => Hash::make($attributes["password"]),
            'role'                  => $attributes["role"],

        ]);
    }
}
