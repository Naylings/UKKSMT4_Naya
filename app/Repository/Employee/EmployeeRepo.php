<?php

namespace App\Repository\Employee;

use App\Contracts\Employee\EmployeeInterface;
use App\Models\Employee;
use App\Repository\People\PeopleRepo;
use App\Repository\Transaction\SaldoRepo;

class EmployeeRepo implements EmployeeInterface
{

    public function __construct(
        protected PeopleRepo $__repo_people,
        protected SaldoRepo $__repo_saldo,
    ) {}

    public function index(array $request)
    {
        $attributes ??= request()->all();
        $people = $this->__repo_people->index($attributes);
        return $people->where('reference_type', Employee::class)->with('reference')->get();
    }

    public function store(array $attributes)
    {
        $attributes ??= request()->all();
        $employee =  Employee::updateOrCreate([
            "id" => $attributes['id'] ?? null,
        ], [


            'no_pegawai'   => $attributes['no_pegawai'],
            'hire_date'    => $attributes['hire_date'],
            'status'       => $attributes['status'],

        ]);
        
        $saldo = $this->__repo_saldo->store([
            "reference_id"      => $employee->getKey(),
            "reference_type"    => Employee::class,
            "saldo"             => $attributes['saldo'] ?? 0
        ]);

        return $employee;
    }
}
