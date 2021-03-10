@extends('layouts.template')

@section('title')
    {{$system_settings->hospital_name ?? 'Piccolo Hospital Mgt. System'}}
@endsection

@section('content')
    <div class="sm:w-1/3 sm:mx-auto md:my-24 p-5 bg-white rounded shadow-md">
        <div class="text-2xl">
            @include('layouts.messages')
        </div>
        <div class="border-b pb-3">
            <h2 class="text-center text-3xl mb-4">{{$system_settings->hospital_name ?? 'Piccolo Hospital Mgt. System'}}</h2>
            <img class="w-28 mx-auto" src="{{ $system_settings->photo ?? asset('images/doctor.png') }}" alt="Logo">
        </div>
        <div>
            <form action="{{route('login')}}" method="POST">
                @csrf
                <div class="my-2">
                    <input type="text" name="username" placeholder="Username" class="input-box @error('username') border-red-500 @enderror" autofocus>
                    @error('username')
                        {{$message}}
                    @enderror
                </div>
                <div class="my-2">
                    <input type="password" name="password" placeholder="Password" class="input-box @error('password') border-red-500 @enderror">
                    @error('password')
                        {{$message}}
                    @enderror
                </div>
                <div class="my-2 ml-2">
                    <input class="mr-2" type="checkbox" name="remember">
                    <label for="remember">Remember me</label><br>
                </div>
                <div class="text-right mb-4">
                    <span><a href="#" class="hover:text-blue-600 hover:underline">Forgot your Password?</a></span>
                </div>
                <div class="text-center">
                    <button class="btn tracking-wider">Login</button>
                </div>
            </form>
        </div>
    </div>
@endsection