<?php

namespace App\Http\Controllers;

use App\Models\Booking;
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

    function bookRequest(Request $request)
    {

        $user = session('user');



        $booking = Booking::where('student_id', $user->user_id)->where('book_id', $request->book_id)->where('status', 'pending')->first();

        $booking2 = Booking::where('student_id', $user->user_id)->where('status', 'pending');

        if ($booking) {
            return response("You have already requested this book", 400);
        } else if ($booking2->count() > 2) {
            return response("You have already requested maximun number of books", 400);
        } else {


            Booking::create([
                'student_id' => $user->user_id,
                'book_id' => $request->book_id,
                'status' => 'pending'
            ]);

            return response("Successfully Requested", 200);
        }
    }

    function bookRequests(Request $request)
    {

        $user = session('user');

        $bookings  = Booking::where('student_id', $user->user_id)->get();

        foreach ($bookings as $key => $booking) {
            $booking->book;
            $booking->student;
        }

        return Inertia::render('User/BookRequests', ['bookings' => $bookings]);
    }
}
