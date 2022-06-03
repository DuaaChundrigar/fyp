<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Books;
use App\Models\Categories;
use App\Models\Contact;
use App\Models\Student;
use App\Models\User;
use Database\Seeders\BookingSeeder;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Inertia\Inertia;

class AdminController extends Controller
{
    function index()
    {

        $books = Books::all();

        $user = session('user');

        $bookings = Booking::with('book', 'student')->get();

        $count = DB::table('bookings')->count();
        $checkin = DB::table('bookings')->count('checkin_datetime');
        $checkout = DB::table('bookings')->count('checkout_datetime');

        return Inertia::render('Admin/Dashboard', ['books' => $books, 'user' => $user , 'bookings' => $bookings, 'count' => $count, 'checkin' => $checkin, 'checkout' => $checkout]);
    }

    function books(Request $request)
    {

        $books = Books::all();

        return Inertia::render('Admin/AdminBooks', ['books' => $books]);
    }


    function  deleteBook($book_id)
    {

        $book = Books::find($book_id);

        $book->delete();

        $books = Books::all();

        // return response(json_encode($books), 200);
        return Inertia::render('Admin/AdminBooks', ['books' => $books]);
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
        $book->category  = $request->formData['category'];
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

    function categories(Request $request)
    {

        $categories = Categories::all();

        return Inertia::render('Admin/Categories', ['categories' => $categories]);
    }

    function  deleteCategory($category_id)
    {

        $category = Categories::find($category_id);

        $category->delete();


        $categories = Categories::all();


        return response(json_encode($categories), 200);
    }

    function editCategory($category_id)
    {
        $categories = Categories::find($category_id);

        return Inertia::render('Admin/Categories', ['categories' => $categories]);
    }

    function updateCategory(Request $request, $category_id)
    {
        $categories = Categories::find($category_id);


        $categories->category  = $request->formData['category'];


        $categories->save();

        return redirect('/admin/categories');


        // echo json_encode($request->all());
        // exit;
    }

    function addBookk(Request $request)
    {

        return Inertia::render('Admin/addBook');
    }

    function addBook(Request $request)
    {

        $book = new Books();

        $book->book_no  = $request->formData['book_no'];
        $book->isbn = $request->formData['isbn'];
        $book->subject  = $request->formData['subject'];
        $book->category  = $request->formData['category'];
        $book->book_name  = $request->formData['book_name'];
        $book->author  = $request->formData['author'];
        $book->publisher  = $request->formData['publisher'];
        $book->edition  = $request->formData['edition'];
        $book->copies = $request->formData['copies'];

        $book->save();

        return Inertia::render('Admin/AdminBooks');

        // return redirect('/admin/books');
    }

    function addCategories(Request $request)
    {
        return Inertia::render('Admin/InsertCategory');
    }

    function addCategory(Request $request)
    {
        $categories = new Categories();

        $categories->category  = $request->formData['category'];

        $categories->save();


        return redirect('/admin/categories');
    }

    function borrowDetails(Request $request)
    {

        $bookings = Booking::with('book', 'student')->get();

        return Inertia::render('Admin/BorrowDetails', ['bookings' => $bookings]);
    }

    function updateBookingStatusApproved(Request $request, $booking_id)
    {

        $booking = Booking::find($booking_id);

        $booking->status = "approved";

        $booking->save();

        return redirect('/admin/borrowDetails');
    }

    function updateBookingStatusCheckin(Request $request, $booking_id)
    {

        $booking = Booking::find($booking_id);

        $booking->status = "checkin";
        $booking->checkin_datetime = date('Y-m-d H:i:s');
        $booking->save();

        return redirect('/admin/borrowDetails');
    }

    function updateBookingsStatusCheckout(Request $request, $booking_id)
    {
        $booking = Booking::find($booking_id);

        $booking->status = "checkout";
        $booking->checkout_datetime = date('Y-m-d H:i:s');
        $booking->save();

        return redirect('/admin/borrowDetails');
    }

    function updateBookingStatusRejected(Request $request, $booking_id)
    {

        $booking = Booking::find($booking_id);

        $booking->status = "rejected";

        $booking->save();

        return redirect('/admin/borrowDetails');
    }

    function students(Request $request)
    {

        $students = Student::all();

        return Inertia::render('Admin/Students', ['students' => $students]);
    }

    function  deleteStudent($student_id)
    {

        $bookings = Booking::where('student_id', $student_id)->get();
        foreach ($bookings as $booking) {
            $booking->delete();
        }


        $student = Student::find($student_id);
        $student->delete();
        $students = Student::all();


        return response(json_encode($students), 200);
    }

    function report(Request $request)
    {

        $bookings = Booking::with('book', 'student')->get();

        return Inertia::render('Admin/Report', ['bookings' => $bookings]);
    }

    function settings()
    {

        // $currentUser = session('user');
        // echo json_encode($currentUser);
        // exit;
        // // $users = Student::find($users_id);

        // $users = User::all();

        return Inertia::render('Admin/Settings');
    }

    function updatepassword(Request $request)
    {

        $currentUser = session('user');

        $user = User::find($currentUser->id);

        $user->password = Hash::make($request->formData['password']);

        $user->save();

        return redirect('/');
    }

    function contact(Request $request)
    {
        $contacts = Contact::all();

        return Inertia::render('Admin/Contact', ['contacts' => $contacts]);
    }

    function addContact(Request $request)
    {

        $contact = new Contact();

        $contact->regno  = $request->formData['regno'];
        $contact->name = $request->formData['name'];
        $contact->email  = $request->formData['email'];
        $contact->msg = $request->formData['msg'];

        $contact->save();

        return redirect('/');
    }

    function  deleteMsg($contact_id)
    {
        $contact = Contact::find($contact_id);

        if ($contact) {
            $contact->delete();
        }

        $contacts = Contact::all();

        return response(json_encode($contacts), 200);
    }
}
