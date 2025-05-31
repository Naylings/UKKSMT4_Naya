<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function room()
    {
        return $this->belongsTo(Ruangan::class,'ruangan_id','id');
    }
}
