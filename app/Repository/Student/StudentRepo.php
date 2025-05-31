<?php

namespace App\Repository\Student;

use App\Contracts\Student\StudentInterface;
use App\Models\Student;
use App\Repository\People\PeopleRepo;
use App\Repository\Transaction\SaldoRepo;

class StudentRepo implements StudentInterface
{
    public function __construct(
        protected PeopleRepo $__repo_people,
        protected SaldoRepo $__repo_saldo
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
        $student =  Student::updateOrCreate([
            "id" => $attributes['id'] ?? null,
        ], [


            "nisn"   => $attributes["nisn"],
            'nis'    => $attributes['nis'],
            'status' => $attributes['status'],

        ]);

        $saldo = $this->__repo_saldo->store([
            "reference_id"      => $student->getKey(),
            "reference_type"    => Student::class,
            "saldo"             => $attributes['saldo'] ?? 0
        ]);

        return $student;
    }
}
