<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Inertia\Inertia;

class RegisterController extends Controller
{
    public function index()
    {
        return Inertia::render('Register');
        // return json_encode('registered');
    }
    public function register(Request $request)
    {
        return json_encode($request->all());

        $student = new Student();
        $student->regno = $request->formData['regno'];
        $student->name = $request->formData['name'];;
        $student->email = $request->formData['email'];;
        $student->batch = $request->formData['batch'];;
        $student->program = $request->formData['program'];;

        $student->save();

        $user = new User();
        $user->name = $student->name;
        $user->email = $student->email;
        $user->password = Hash::make($request->formData['password']);
        $user->user_id = $student->id;
        $user->role = 'User';

        $user->save();

        session(['user' => $user]);


        // return Inertia::render('User/Dashboard');

        return redirect('/user/dashboard');
    }
}
