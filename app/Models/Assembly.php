<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Assembly extends Model
{
    protected $fillable = [
        'name',
        'location',
    ];

    public function members()
    {
        return $this->hasMany(Member::class);
    }

    public function events()
    {
        return $this->hasMany(Event::class);
    }
    
    public function offerings()
    {
        return $this->hasMany(Offering::class);
    }
    
    public function pastors()
    {
        return $this->hasMany(Pastor::class);
    }
}