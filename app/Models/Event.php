<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'assembly_id',
        'name',
        'date',
        'description',
        'created_by',
    ];

    protected $casts = [
        'date' => 'date',
    ];

    public function assembly()
    {
        return $this->belongsTo(Assembly::class);
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}