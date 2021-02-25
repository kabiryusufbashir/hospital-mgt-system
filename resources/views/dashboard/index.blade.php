@extends('layouts.template')

@section('title')
    {{$system_settings->hospital_name ?? 'Piccolo Hospital Mgt. System'}}
@endsection

@section('content')
    <div class="bg-blue-600 h-16">
        header section
    </div>
    <div class="grid grid-cols-4">
        <div class="bg-white col-span-1">
            Nav
        </div>
        <div class="bg-green-300 col-span-3">
            Info
        </div>
    </div>
@endsection 