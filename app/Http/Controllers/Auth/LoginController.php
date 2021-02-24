<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
        $users = User::get();
        if($users->count() === 0){
            return view('auth.register');    
        }else{
            return view('auth.login');
        }
    }
}
