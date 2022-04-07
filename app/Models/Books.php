<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;

    protected $fillable  =  [
        'book_no',
        'isbn',
        'subject',
        'book_name',
        'author',
        'publisher',
        'edition',
        'copies'
    ];
}
