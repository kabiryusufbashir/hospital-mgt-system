@extends('layouts.template')

@section('title')
Hospital Mgt System
@endsection

@section('content')
    <div class="sm:w-1/3 sm:mx-auto md:my-16 p-5 bg-white rounded shadow-md">
        <div class="border-b pb-3">
            <h2 class="text-center text-3xl mb-4">Create an Account</h2>
            <img class="w-28 mx-auto" src="{{ $system_settings->photo ?? asset('images/doctor.png') }}" alt="Logo">
        </div>
        <div class="mt-5">
            <form action="{{route('register')}}" method="POST">
                @csrf
                <div>
                    <input type="text" name="hospital_name" value="{{old('hospital_name')}}" placeholder="Hospital Name" class="input-box @error('hospital_name') border-red-500 @enderror" autofocus>
                    @error('hospital_name')
                        {{$message}}
                    @enderror
                </div>
                <div>
                    <input type="email" name="email" value="{{old('email')}}" placeholder="Email Address" class="input-box @error('email') border-red-500 @enderror">
                    @error('email')
                        {{$message}}
                    @enderror
                </div>
                <div>
                    <input type="text" name="username" value="{{old('username')}}" placeholder="Username" class="input-box @error('username') border-red-500 @enderror">
                    @error('username')
                        {{$message}}
                    @enderror
                </div>
                <div>
                    <input type="password" name="password" placeholder="Password" class="input-box @error('password') border-red-500 @enderror">
                    @error('password')
                        {{$message}}
                    @enderror
                </div>
                <div>
                    <input type="password" name="password_confirmation" placeholder="Confirm Password" class="input-box @error('password_confirmation') border-red-500 @enderror">
                    @error('password_confirmation')
                        {{$message}}
                    @enderror
                </div>
                <div class="text-center mt-6">
                    <button class="btn tracking-wider">Create Account</button>
                </div>
            </form>
        </div>
    </div>
@endsection