<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Systemsettings;

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

    public function register(Request $request)
    {
        $validated = $request->validate([
            'hospital_name'=>'required',
            'username'=>'required',
            'password'=>'required|confirmed'
        ]);

        try{
            User::create([
                'username'=>$request->username,
                'password'=>Hash::make($request->password),
                'category'=> 1,
                'status'=> 1,
            ]);
            try{
                Systemsettings::create([
                    'hospital_name'=>$request->hospital_name
                ]);
            }catch(Exception $e){
                return redirect('/')->with('error', $e->getMessage());
            }
        }catch(Exception $e){
            return redirect('/')->with('error', $e->getMessage());
        }

    }
}
