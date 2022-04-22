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

    function editBook($book_id)
    {
        $book = Books::find($book_id);


        return Inertia::render('Admin/EditBook', ['book' => $book]);
    }

    function updateBook(Request $request, $book_id)
    {
        $book = Books::find($book_id);

        $book->book_no  = $request->formData['book_no'];
        $book->isbn = $request->formData['isbn'];
        $book->subject  = $request->formData['subject'];
        $book->book_name  = $request->formData['book_name'];
        $book->author  = $request->formData['author'];
        $book->publisher  = $request->formData['publisher'];
        $book->edition  = $request->formData['edition'];
        $book->copies = $request->formData['copies'];

        $book->save();


        echo json_encode($book);
        exit;

        // echo json_encode($request->all());
        // exit;
    }
}
