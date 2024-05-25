<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
   public function register (){
    return view(('register'));
   }

   public function store(Request $request){
      $name = $request['name'];
      $Name = $request['Name'];


      return view('welcome' , ['name' => $name, 'Name' => $Name ]);
     }
}