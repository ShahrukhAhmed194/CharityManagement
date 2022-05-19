<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JoinUs extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'nid', 'occupation', 'institute', 'post', 'qualification' , 'gender',
        'height', 'birth_mark', 'father_name', 'mother_name'
    ];
}
