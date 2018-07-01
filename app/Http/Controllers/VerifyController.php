<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class VerifyController extends Controller
{
    //
    public function verify($token) {


$user=User::where('token',$token)->firstorfail();
$user->update(['token'=>null]);

return redirect()
->route('home')
->with ('sucess','Acaunt verifyed');


    }
}
