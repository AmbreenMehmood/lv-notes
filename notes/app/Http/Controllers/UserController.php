<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auth;

class UserController extends Controller
{
    //
    function signup(){
        return view('register');
    }
    function postsignup(Request $req){
        $user = new Auth();
     $user->username=$req->username;
     $user->email=$req->email;
     $user->password=$req->password;
$user->save();
    }
    function login(){
        return view('login');
    }
}
