<?php

namespace App\Repository\Student;

use App\Contracts\Student\StudentInterface;
use App\Models\Student;
use App\Repository\People\PeopleRepo;

class StudentRepo implements StudentInterface
{
    public function __construct(
        protected PeopleRepo $__repo_people
    ) {}

    public function index(array $request)
    {
        $attributes ??= request()->all();
        $people = $this->__repo_people->index($attributes);
        return $people->where('reference_type', Student::class)->get();
    }

    public function store(array $attributes)
    {
        $attributes ??= request()->all();
        return  Student::updateOrCreate([
            "id" => $attributes['id'] ?? null,
        ], [


            "nisn"   => $attributes["nisn"],
            'nis'    => $attributes['nis'],
            'status' => $attributes['status'],

        ]);
    }
}
