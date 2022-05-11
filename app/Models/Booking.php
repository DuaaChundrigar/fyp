<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;


    protected $fillable  =  [
        'student_id',
        'book_id',
        // 'book_name',
        'duration',
        'status'
    ];


    function book()
    {
        return $this->belongsTo(Books::class, 'book_id');
    }

    function student()
    {
        return $this->belongsTo(Student::class, 'student_id');
    }

    function bookName()
    {
        return $this->belongsTo(Books::class, 'book_name');
    }
}
