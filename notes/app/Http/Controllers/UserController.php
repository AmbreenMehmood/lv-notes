<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auth;
// use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
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
     $user->password=Hash::make($req->password);
$user->save();
if($req){
    return back()->with('success','you have registered successfully :)');

}
else{
    return back()->with('fail','something wrong :(');

}
    }
    function login(){
        return view('login');
    }



    function login2(Request $req){
$user=Auth::where('email','=',$req->email)->first();
// $r=(Hash::check($req->password, $user->password));

        if($user){
            if(Hash::check($req->password, $user->password)){
             $req->session()->put('loginid',$user->id);
                return redirect('/create');
        }
            else{
                return back()->with('fail','Please enter correct Id or Password :(');   
            }}
else{
    return back()->with('fail','Please enter correct Id or Password :(');
}
    }

    public function logout()
    {
        if(Session::has('loginid')){
        Session::pull('loginid');
       return redirect('login');
        }
        
        
    }


}

