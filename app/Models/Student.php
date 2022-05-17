<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

   protected $fillable  =  [
        'regno',
        'name',
        'email',
        'batch',
        'program',
        'profile_image'
    ];

}
