<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserAuth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    //
    public function register(){
        return view('auth.register');
    }
    public function login(){
        return view('auth.login');
    }
    public function signup(Request $request){
        $request->validate([
            'firstname' =>'required',
            'lastname' =>'required',
            'email' => 'required|email|unique:user_auths',
            'password' => 'required|min:5|max:12'
            
        ]);
        $user = new UserAuth();
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = 0;
        $user->save();
       if($user){
        return redirect()->route('login');
       }
       return redirect()->back();
       
    }
    public function signin(Request $request){
        $request->validate([
            'email' => 'required',
            'password' =>'required',
        ]);
        $user = UserAuth::where('email','=',$request->email)->first();
    if($user){
        if(Hash::check($request->password,$user->password)){
            $request->session()->put('loggedInUser',$user->id);
            return redirect()->route('home');
        }else{
            
            return redirect()->back();
    }}else{
       
        return redirect()->back();
}
      
    }
    
    public function logout(){
       if(Session::has('loggedInUser')){
        Session::pull('loggedInUser');
        return redirect()->route('login');
    }
}}
