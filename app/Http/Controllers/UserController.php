<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Inertia\Inertia;

class UserController extends Controller
{
    function index()
    {
        $books = Books::all();
        $user = session('user');


        return Inertia::render('User/Dashboard', ['books' => $books, 'user' => $user]);
    }
}
