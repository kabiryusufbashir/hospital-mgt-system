@extends('layouts.template')

@section('title')
Hospital Mgt System
@endsection

@section('content')
    <div class="sm:w-1/3 sm:mx-auto my-24 p-5 bg-white rounded shadow-md">
        <div>
            <h2 class="text-center text-3xl text-blue-600 mb-4">Piccolo Hospital Mgt. System</h2>
            <img class="w-28 mx-auto" src="{{ asset('images/logo.png') }}" alt="Logo">
        </div>
        <div>
            <form action="#">
                <div>
                    <label class="label" for="username">Username</label><br>
                    <input type="text" name="username" placeholder="Username" class="input-box">
                </div>
                <div>
                    <label class="label" for="password">Password</label><br>
                    <input type="password" name="password" placeholder="Password" class="input-box">
                </div>
                <div class="text-right mb-4">
                    <span><a href="#">Forgot your Password?</a></span>
                </div>
                <div class="text-center">
                    <button class="btn">Login</button>
                </div>
            </form>
        </div>
    </div>
@endsection