<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Books extends Model
{
    use HasFactory, SoftDeletes;

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


    //enable soft delete


}
