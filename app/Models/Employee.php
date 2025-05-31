<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function people()
    {
        return $this->morphOne(People::class, "reference");
    }

    public function saldo (){
        return $this->morphOne(Saldo::class,'reference');
    }
}
