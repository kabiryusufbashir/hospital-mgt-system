<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use App\Models\Systemsettings;

class LoginController extends Controller
{
    public function index()
    {
        $users = User::get();
        $system_settings = Systemsettings::where('id', 1)->first();

        if($users->count() === 0){
            return view('auth.register');    
        }else{
            return view('auth.login', ['system_settings'=>$system_settings]);
        }
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'hospital_name'=>'required',
            'username'=>'required',
            'email'=>'required|email|max:255',
            'password'=>'required|confirmed'
        ]);

        try{
            User::create([
                'username'=>$request->username,
                'email'=>$request->email,
                'password'=>Hash::make($request->password),
                'category'=> 1,
                'status'=> 1
            ]);
            try{
                Systemsettings::create([
                    'hospital_name'=>$request->hospital_name,
                    'email'=>$request->email,
                ]);
                return redirect('/')->with('success', 'Account Created successfully!');
            }catch(Exception $e){
                return redirect('/')->with('error', $e->getMessage());
            }
        }catch(Exception $e){
            return redirect('/')->with('error', $e->getMessage());
        }
    }

    public function login(Request $request)
    {
        $validated = $request->validate([
            'username'=>'required',
            'password'=>'required'
        ]);

        try{
            if(Auth::attempt($request->only('username', 'password'), $request->remember)){
                $request->session()->regenerate();
                return redirect()->route('dashboard');
            }else{
                return back()->with('error', 'Incorrect username or password');
            }
        }catch(Exception $e){
            return redirect('/')->with('error', $e->getMessage());
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
