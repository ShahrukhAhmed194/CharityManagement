<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NextJoin extends Model
{
    use HasFactory;

    protected $fillable = [
        'nid', 'mobile', 'email', 'blood_group', 'marital_status', 'total_family_members',
        'income', 'present_address', 'permanent_address', 'birth_date'
    ];
}
