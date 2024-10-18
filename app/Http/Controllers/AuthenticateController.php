<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class AuthenticateController extends Controller
{
    public function register(Request $request)
    {
       
        $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string' ,
            'email' => 'required',
            'password' => 'required|confirmed',
        ]);  
        // dd($request);
        $user = User::create($request->only('first_name', 'last_name','email','password'));
        if($user){
            return redirect('/');
        }
        else
        {
            return redirect()->back();
        }
    }
    public function login(Request $request)
    {
        // dd($request);
        $request->validate([
            'email' => 'required',
            'password' =>'required',
        ]);
         
        $user = User::where('email', $request->email)->orWhere('password', $request->password)->first();
       
        if ($user )  {
             
            Auth::login($user);
            
            return redirect('/dashboard')->with('success', 'Login successful!'  );
        } else {
            
            return redirect()->back()->with(['success','Invalid credentials']);
        }
    }
}
