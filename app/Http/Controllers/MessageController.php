<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Message;
use App\User;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Gate;


class MessageController extends Controller
{
    //



    public function __construct()
    {
        $this->middleware('auth');
    }


public function index(){



if (Gate::allows('admin', Auth::user())) {
  // Текущий пользователь может редактировать статью...
    
$messages=\App\Message::all();
$user=\App\User::all();
$tasks= \App\Theard::paginate(5);

   return view('admin.panel',compact('tasks','user','messages'));

}else{
 
 $tasks=\App\Message::all();

return view('message.all',compact('tasks') );
}
}


 public function create(Request $request)
     {



    $this->validate = Validator::make($request->all(),[
'name'=>'required|max:50|unique:users' ,
'body'=>'required|min:10|max:555' ,


 ]);

  if($this->validate ->fails()){
    return redirect( 'message')
    ->withInput()
    ->withErrors($this->validate);
  }

  $post = new \App\Message;
   


    $post->user_id =  Auth::user()->name;
   $post->name = $request->name;
  $post->body = $request->body;
 

  $post->save();
  return redirect()->back()->with('message','Спасибо ваше письмо отправленно  и будет обязательно прочитано в порядке очереди!');

}

 public function destroy($id)
     {

        $mes=\App\Message::findOrFail($id);
  
$mes->delete();
        return redirect( 'panel');
}

}
