<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    //without token
    public function login(Request $request){
        $email=$request->get('email');
        $pass=$request->get('password');
        //$user=DB::select("SELECT * FROM `users` WHERE email='$email' AND password='$pass'");
        $user=User::whereEmail($email)->wherePassword($pass)->first();

        if ($user){
            session(['id' => $user->id]);
            session(['name' => $user->name]);
            session(['email' => $user->email]);
        }else{
            session()->flash('error', 'Failed, the username or password is incorrect');
        }
        return redirect('/');
    }

//    with token
//    public function login(){
//
//    }


    public function signup(Request $request){
        User::create([
            'name'=>$request->get('name'),
            'email'=>$request->get('email'),
            'password'=>$request->get('password')
        ]);
        return redirect('/login');
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/');

    }
}
