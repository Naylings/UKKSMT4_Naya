<?php

namespace App\Repository\Transaction;

use App\Contracts\Transaction\SaldoInterface;
use App\Models\Saldo;

class SaldoRepo implements SaldoInterface
{
    

    public function store(array $attributes)
    {
        $attributes ??= request()->all();
        $saldo =  Saldo::firstOrCreate([
            "reference_id"       => $attributes['reference_id'] ,
            "reference_type"     => $attributes['reference_type'] 
        ], [
            'saldo'              => $attributes['saldo'] ?? 0,

        ]);
        $saldo->saldo += $attributes['saldo'] ;
        return $saldo;
    }
}
