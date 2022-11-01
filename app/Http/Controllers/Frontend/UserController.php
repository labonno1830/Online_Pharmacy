<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

  public function home()
{
    return view('home');
}
  public function login()
{
    return view('login'); 

}
public function homepage()
{
    return view('frontend.layout.homepage');
}
public function registration()
{
    return view('registration');
}
public function details()
{
    return view('frontend.layout.details');
}
public function cart()
{
    return view('frontend.layout.cart');
}
public function invoice()
{
    return view('frontend.layout.invoice');
}
public function master()
{
    return view('frontend.master');

}

public function register(Request $request)
{
   
  User::create([
    'name'=>$request->name,
    'phone'=>$request->phone,
    'email'=>$request->email,
    'password'=>Hash::make($request->password),
   ]);
return redirect()->route('login');
    
}

public function login_post(Request $request)
{   
    
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
      ]);
  
      if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        if (Auth::user()->role_id == 1) {
          return redirect()->route('dashboard')->with('message', 'Login Successful');
        }
        elseif(Auth::user()->role_id == 2){
                   return redirect()->route('homepage')->with('message','login successfull');
              } 
      }
  
      return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
      ])->onlyInput('email');
        
}
}
