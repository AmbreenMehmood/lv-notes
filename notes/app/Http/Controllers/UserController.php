<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Auth as ModelsAuth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{

// ---------signup-----------
    function signup()
    {
        return view('register');
    }
    function postsignup(Request $req)
    {
        $user = new ModelsAuth();
        $user->username = $req->username;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->save();
        if ($req) {
            return back()->with('success', 'you have registered successfully');
        } else {
            return back()->with('fail', 'something wrong');
        }
    }

    // ------------------login---------------
    function login()
    {
        return view('login');
    }
    function login2(Request $req)
    {
        $user = Auth::where('email', '=', $req->email)->first();
        if ($user) {
            if (Hash::check($req->password, $user->password)) {
                $req->session()->put('loginid', $user->id);
                return redirect('/create');
            } else {
                return back()->with('fail', 'Please enter correct Id or Password');
            }
        } 
    }

// --------------------logout----------------
     function logout()
    {
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }
}
