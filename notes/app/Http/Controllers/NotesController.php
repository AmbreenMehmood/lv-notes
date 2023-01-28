<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Notes;
class NotesController extends Controller
{
    //
    // public function add(){
    //     return ['notes'=>'write notes here'];
    // }
    function list(){
        return Notes::all();
            }

    function add(Request $req){
        $user=new Notes;
        $user->title=$req->title;
        $user->description=$req->description;
        
        $result=$user->save();
        if($result){
            return redirect('create');
        }
        else{
            return ['result'=>'data has not been saved :('];
    
        }
}
public function getHome(){

    $user = Notes::get();

    return View('view',compact('user'));
}

function delete($id){
    $user=Notes::find($id);
    $user->delete();
    
    // $result=$user->delete();
return redirect('/get');
    // if($result){
    //     return["result"=>"record has been deleted"];
    // }
    // else{
    //     return["result"=>"something went wrong :("];

    // }
    
}

function edit(Request $req){
    $user=Notes::find($req->id);
    return view('edit',['user'=>$user]);
    
  
}
function update(Request $req){
    $user=Notes::find($req->id);
    $user->id=$req->id;
    $user->title=$req->title;
    $user->description=$req->description;
   $user->save();
   return redirect('/get');

}
function create(){
    return view('add');
}
}