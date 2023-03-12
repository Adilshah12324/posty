<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('auth.register');
    }

    public function store(Request $request){
        $this->validate($request,[
            'name' => 'required|max:20',
            'username' => 'required|max:20',
            'email' => 'required|email|max:20',
            'password' => 'required|confirmed',
        ]);

    }
}
