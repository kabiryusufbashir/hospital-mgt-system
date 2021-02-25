@extends('layouts.template')

@section('title')
Hospital Mgt System
@endsection

@section('content')
    <div class="sm:w-1/3 sm:mx-auto my-24 p-5 bg-white rounded shadow-md">
        <div>
            <h2 class="text-center text-3xl text-blue-600 mb-4">Create an Account</h2>
        </div>
        <hr>
        <div class="mt-5">
            <form action="{{route('register')}}" method="POST">
                @csrf
                <div>
                    <input type="text" name="hospital_name" value="{{old('hospital_name')}}" @error('hospital_name') border-red-500 @enderror placeholder="Hospital Name" class="input-box">
                    @error('hospital_name')
                        {{$message}}
                    @enderror
                </div>
                <div>
                    <input type="text" name="username" value="{{old('username')}}" @error('username') border-red-500 @enderror placeholder="Username" class="input-box">
                    @error('username')
                        {{$message}}
                    @enderror
                </div>
                <div>
                    <input type="password" name="password" @error('password') border-red-500 @enderror placeholder="Password" class="input-box">
                    @error('password')
                        {{$message}}
                    @enderror
                </div>
                <div>
                    <input type="password" name="password_confirmation" @error('password_confirmation') border-red-500 @enderror placeholder="Confirm Password" class="input-box">
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