<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

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
        'member_type'
    ];
    // Ensure table name matches your DB
    protected $table = 'members';
}
