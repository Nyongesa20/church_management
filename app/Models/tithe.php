<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tithe extends Model
{
    protected $fillable = [
        'member_id',
        'amount',
        'month',
        'year',
        'status',
    ];

    protected $casts = [
        'amount' => 'decimal:2',
        'year' => 'integer',
    ];

    public function member()
    {
        return $this->belongsTo(Member::class);
    }
}