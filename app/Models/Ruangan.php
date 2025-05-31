<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function employeeHasRoom(){
        return $this->hasOne(EmployeeHasRoom::class);
    }
}
