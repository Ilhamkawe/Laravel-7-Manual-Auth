<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    //

    public function index(){

        return view('home');

    }

    public function getRegister(){

        return view('register');

    }

    public function postRegister(Request $req){

        
        $this->validate($req,[
            'name' => 'required|min:4',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed'
        ]);

        $data = $req->all();
        $data['password'] = bcrypt($req->password);

        $user = User::create($data);

        auth()->loginUsingid($user->id);

        return redirect()->back();
    }

    public function getLogin(){

        return view('login');

    }

    public function postLogin(Request $req){

        if(!auth()->attempt(['email' => $req->username, 'password' => $req->password])){
            return redirect()->route('login');
        }

        return redirect()->route('home');
    }

    public function logout(){

        auth()->logout();

        return redirect()->route('login');

    }

}
