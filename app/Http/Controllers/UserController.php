<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function index()
   {
       if(Auth::user()->hasRole('user')){
            return view('userdash');
       }elseif(Auth::user()->hasRole('blogwriter')){
            return view('blogwriterdash');
       }elseif(Auth::user()->hasRole('admin')){
        return view('dashboard');
   }
   }

   
}
