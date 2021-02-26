@extends('layouts.template')

@section('title')
    {{$system_settings->hospital_name ?? 'Piccolo Hospital Mgt. System'}}
@endsection

@section('content')
    <div class="bg-blue-600 h-16">
        <div class="flex justify-between grid grid-cols-4 py-3">
            <div class="ml-3 flex items-center justify-between col-span-1">
                <img class="w-10" src="{{ $system_settings->photo ?? asset('images/logo.png') }}" alt="Logo">
                <h2 class="text-white ml-2">{{$system_settings->hospital_name ?? 'Piccolo Hospital Mgt. System'}}</h2>
                <svg class="w-8 h-8 text-white cursor-pointer" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
            </div>
            <div class="flex items-center justify-end col-span-3 mr-3">
                <div class="flex">
                    <svg class="w-6 h-6 text-white mx-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"></path></svg></span>
                <div class="flex">
                    <svg class="w-6 h-6 text-white mx-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10c0 3.866-3.582 7-8 7a8.841 8.841 0 01-4.083-.98L2 17l1.338-3.123C2.493 12.767 2 11.434 2 10c0-3.866 3.582-7 8-7s8 3.134 8 7zM7 9H5v2h2V9zm8 0h-2v2h2V9zM9 9h2v2H9V9z" clip-rule="evenodd"></path></svg>
                </div>
                <div class="flex text-white items-center relative inline-block">
                    <svg class="w-6 h-6 text-white ml-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd"></path></svg>
                    <span class="flex cursor-pointer" id="user_caret">
                        {{auth()->user()->username}}
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </span>
                    <div  id="user_caret_menu" class="hidden absolute top-5 right-0 mt-2 w-36 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5">
                        <div class="py-1" aria-orientation="vertical">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900">Account settings</a>
                            <form action="{{route('logout')}}" method="POST">
                                @csrf 
                                <button class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900" type="submit" name="logout">Logout</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-5">
        <div class="px-3 bg-white col-span-1">
            <h2 class="text-2xl py-3 border-b font-medium">Menu</h2>
            <ul>
                <li class="py-3 flex border-b">
                    <img class="w-7 mr-4" src="{{ asset('images/dashboard.png') }}" alt="Dashboard">
                    <a href="#">Dashboard</a>
                </li>
                <li class="py-3 flex border-b">
                   <img class="w-7 mr-4" src="{{ asset('images/doctor_icon.png') }}" alt="Doctor">
                    <a href="#">Doctors</a>
                </li>
                <li class="py-3 flex border-b">
                    <img class="w-7 mr-4" src="{{ asset('images/nurse.png') }}" alt="Nurse">
                    <a href="#">Nurses</a>
                </li>
                <li class="py-3 flex border-b"> 
                    <img class="w-7 mr-4" src="{{ asset('images/pharmacist.png') }}" alt="Pharmacists">
                    <a href="#">Pharmacists</a>
                </li>
                <li class="py-3 flex border-b">
                    <img class="w-7 mr-4" src="{{ asset('images/laboratorist.png') }}" alt="Laboratorist">
                    <a href="#">Laboratorists</a>
                </li>
                <li class="py-3 flex border-b">
                    <img class="w-7 mr-4" src="{{ asset('images/accounting.png') }}" alt="Accounting">
                    <a href="#">Accountants</a>
                </li>
                <li class="py-3 flex border-b">
                    <img class="w-7 mr-4" src="{{ asset('images/patient.png') }}" alt="Patient">
                    <a href="#">Patients</a>
                </li>
                <li class="py-3 flex border-b">
                    <img class="w-7 mr-4" src="{{ asset('images/manage.png') }}" alt="Manage">
                    <a href="#">Manage Hospital</a>
                </li>
                <li class="py-3 flex border-b">
                    <img class="w-7 mr-4" src="{{ asset('images/logout.png') }}" alt="Logout">
                    <a href="#">Logout</a>
                </li>
            </ul>
        </div>
        <div class="bg-green-300 col-span-4">
            Info
        </div>
    </div>
@endsection 