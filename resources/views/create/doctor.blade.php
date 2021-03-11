@extends('layouts.template')

@section('title')
    {{$system_settings->hospital_name ?? 'Piccolo Hospital Mgt. System'}}
@endsection

@section('content')
    <!-- Nav  -->
    @include('includes.dashboardnav')

    <!-- Menu  -->
    <div class="md:grid md:grid-cols-5">
        <!-- Nav link  -->
        @include('includes.dashboardlink')
        <!-- Stats -->
        <div id="statsDiv" class="col-span-4">
            
            <div class="md:grid md:grid-cols-4 md:gap-4 mx-2 my-6">
               @include('includes.adddoctor')
            </div>
            
        </div>
    </div>

@endsection