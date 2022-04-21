<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Inertia\Inertia;

class AdminController extends Controller
{
    function index()
    {

        $books = Books::all();
        $user = session('user');

        return Inertia::render('Admin/Dashboard', ['books' => $books, 'user' => $user]);
    }

    function AdminBooks(Request $request)
    {

        $books = Books::all();

        return Inertia::render('Admin/AdminBooks', ['books' => $books]);
    }


    function  deleteBook($book_id)
    {

        $book = Books::find($book_id);

        $book->delete();


        $books = Books::all();


        return response(json_encode($books), 200);
    }
}
