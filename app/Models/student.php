<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{   
    use HasFactory;
    protected $fillable = [
        
        'student_number',
        'fullname',
        'birthday',
        'gender',
        'phone_number',
        'address',
    ];
}
