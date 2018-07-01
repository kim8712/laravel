<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavController extends Controller
{
    //
 public function contact()
    {
              return view('nav.contact');
            }


    public function about()
    {
              return view('nav.about');
            }

          
  public function vakancy()
    {
              return view('nav.vakancy');
            }


   public function article()
    {
              return view('statii.pervay');
            }



}
