<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;


    protected $fillable  =  [
        'user_id',
        'book_id',
        // 'book_name',
        'duration',
        'status'
    ];


    function book()
    {
        return $this->belongsTo(Books::class, 'book_id');
    }

    function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    function bookName()
    {
        return $this->belongsTo(Books::class, 'book_name');
    }
}
