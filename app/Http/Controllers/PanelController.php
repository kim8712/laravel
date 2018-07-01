<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Theard;
use App\User;
use Illuminate\Support\Facades\Validator;
use App\Post;
use App\Message;

class PanelController extends Controller
{
    //
  // public function show()
   //  {
///$messages=\App\Message::all();
//$user=\App\User::all();
//$tasks= \App\Theard::all();
//return view('admin.panel',compact('tasks','user','messages'));

// месадже контролер гате
//}

public function destroy($id)
     {

        $user=\App\User::findOrFail($id);
  
$user->delete();
        return redirect( 'panel');
}

 public function create(Request $request)
     {



    $this->validate = Validator::make($request->all(),[
'name'=>'required|max:60|' ,
'body'=>'required|min:10|max:1555' ,
'avtor'=>'required|' ,

 ]);

  if($this->validate ->fails()){
    return redirect( 'panel')
    ->withInput()
    ->withErrors($this->validate);
  }

  $news = new \App\Post;
   
$image = $request->select_file;
       $new_name = rand() . '.' . $image ->getClientOriginalExtension();
       $image->move(public_path("images/news"),$new_name);
    $news->image = $new_name ;

  
   $news->name = $request->name;
  $news->body = $request->body;
  $news->avtor = $request->avtor;

  $news->save();
  return redirect( '/');

}



}