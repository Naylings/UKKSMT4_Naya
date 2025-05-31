<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function reference() {
        return $this->morphTo(__FUNCTION__,'reference_type','reference_id');
    }
}
