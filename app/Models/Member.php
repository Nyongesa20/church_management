<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
        'user_id',
        'assembly_id',
        'gender',
        'date_of_birth',
        'date_of_baptism',
        'phone',
        'address',
        'marital_status',
        'occupation',
        'emergency_contact_name',
        'emergency_contact_phone',
        'member_type',
    ];

    protected $casts = [
        'date_of_birth' => 'date',
        'date_of_baptism' => 'date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function assembly()
    {
        return $this->belongsTo(Assembly::class);
    }
    
    public function tithes()
    {
        return $this->hasMany(Tithe::class);
    }
}