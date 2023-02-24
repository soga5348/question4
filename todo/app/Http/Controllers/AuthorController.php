<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthorController extends Controller
{
public function check(Request $request)
{
return view('auth');
}

public function checkUser(Request $request)
{
  $email = $request->email;
  $password = $request->password;
  if (Auth::attempt(['email' => $email,
    'password' => $password])) {
    $text =   Auth::user()->name . 'さんがログインしました';
    return redirect()->route('index');
  }
}

public function register(Request $request){
    return view('register');
    
}



}