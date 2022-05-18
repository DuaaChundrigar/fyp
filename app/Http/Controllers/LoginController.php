<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Inertia\Inertia;

class LoginController extends Controller
{
    function index()
    {

        $user = session('user');

        if ($user) {

            if ($user->role == 'Admin') {
                return redirect('/admin/dashboard');
            } else {
                return redirect('/user/dashboard');
            }
        } else {
            return Inertia::render('Home');
        }
    }

    function login(Request $request)
    {
        $user = User::where(['email' => $request->formData['email']])->first();

        if ($user) {
            if (Hash::check($request->formData['password'], $user->password)) {

                session(['user' => $user]);

                if ($user->role == 'Admin') {
                    return redirect('/admin/dashboard');
                } else {
                    return redirect('/user/dashboard');
                    // return Inertia::render('User/Dashboard');


                }
            } else {
                return redirect()->back()->withErrors('Incorrect Password!');
            }
        } else {
            return redirect()->back()->withErrors('No User Found!');
        }
    }
    public function loginbtn()
    {
        return Inertia::render('Login');
    }

    function logout()
    {
        session(['user' => null]);
        return redirect('/');
    }
}
