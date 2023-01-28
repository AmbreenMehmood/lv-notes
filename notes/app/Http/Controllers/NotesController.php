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
            return ['result'=>'data has been saved'];
        }
        else{
            return ['result'=>'data has not been saved :('];
    
        }
}

function delete($id){
    $user=Notes::find($id);
    $result=$user->delete();
    if($result){
        return["result"=>"record has been deleted"];
    }
    else{
        return["result"=>"something went wrong :("];

    }
    
}
function update(Request $req){
    $user=Notes::find($req->id);
    $user->id=$req->id;
    $user->title=$req->title;
    $user->description=$req->description;
   
    $result=$user->save();
    if($result){
        return["result"=>"data is updated"];
    }
    else{
        return["result"=>"data is not updated :("];

    }
}
}