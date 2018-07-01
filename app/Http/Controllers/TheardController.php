<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Theard;
use Illuminate\Support\Facades\Validator;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Access\AuthorizationException;

class TheardController extends Controller
{
     public function create(Request $request)
     {
  $messages = [
  'min:' => 'Необходимо указать :attribute.',
];


    $this->validate = Validator::make($request->all(),[
'name'=>'required|max:50|unique:users' ,
'body'=>'required|min:10|max:555' ,
'tel'=>'required|regex:/(8)[0-9-]{9,}/|unique:theards,tele' ,
'select_file' => 'required|image|max:2048',
 ]);

  if($this->validate ->fails()){
    return redirect( '/home')
    ->withInput()
    ->withErrors($this->validate);
  }

  $task = new \App\Theard;
   
$image = $request->select_file;
       $new_name = rand() . '.' . $image ->getClientOriginalExtension();
       $image->move(public_path("images"),$new_name);
    $task->image = $new_name ;
     $task->user_id =  Auth::user()->name;
   $task->name = $request->name;
  $task->body = $request->body;
  $task->tele = $request->tel;

  $task->save();
  return redirect( 'show');

}


 public function destroy($id)
     {

        $thread=\App\Theard::findOrFail($id);
  
$thread->delete();
        return redirect( 'show');
}


public function update(Request $request,$id)
     {

         $this->validate ($request,[
'name'=>'required|max:50|unique:users' ,
'body'=>'required|min:10|max:555' ,
'tel'=>'required|regex:/(8)[0-9]{9}/|numeric|unique:theards,tele' ,

 ]);
$thread=\App\Theard::findOrFail($id);
if  ($request->select_file==true) {
$image = $request->select_file  ; 
$new_name = rand() . '.' . $image ->getClientOriginalExtension();
       $image->move(public_path("images"),$new_name);
    $thread->image = $new_name ;
} else {
  $image="default";
}

$thread->user_id =  Auth::user()->name;
   $thread->name = $request->name;
  $thread->body = $request->body;
  $thread->tele = $request->tel;

$thread->update();
 
 return redirect( 'show');



}
}
