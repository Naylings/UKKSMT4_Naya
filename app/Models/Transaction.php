<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $guarded = [];
    const STATUS_PENDING = 0;
    const STATUS_PROGRESS = 1;
    const STATUS_COMPLETE = 2;


    protected static function booted()
    {
        static::creating(function ($query) {
            if (!isset($query->status))  $query->status = self::STATUS_PENDING;
        });
    }

    public function scopePending($builder){ return $builder->where('status', self::STATUS_PENDING); }
    public function scopeProgress($builder){ return $builder-> where('status', self::STATUS_PROGRESS); }
    public function scopeComplete($builder){ return $builder-> where('status', self::STATUS_COMPLETE); }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
