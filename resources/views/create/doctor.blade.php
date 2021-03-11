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
            
            <div class="bg-white mx-2 p-3">
                <!-- @include('includes.adddoctor') -->
                <div class="flex justify-end">
                    <button class="create-btn">
                        <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg> 
                        Add Doctor
                    </button>
                </div>
                <div>
                    @if($doctors->count())
                    <div class="my-6 mx-3">
                        {{ $doctors->links() }}
                    </div>
                    <div class="md:grid md:grid-cols-3 md:gap-4 mx-2 my-6">
                        @foreach($doctors as $doctor)
                            <div class="card border-2">
                                <div>
                                    <img class="w-24 h-24 rounded-full p-2 mx-auto" src=" {{ $doctor->photo }} " alt="{{ $doctor->title }} {{ $doctor->name }} Image">    
                                </div>
                                <div class="font-medium text-xl py-1">
                                    {{ $doctor->name }}
                                </div>
                                <div class="flex text-left border-t py-1">
                                    <span><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7 2a2 2 0 00-2 2v12a2 2 0 002 2h6a2 2 0 002-2V4a2 2 0 00-2-2H7zm3 14a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg></span>
                                    &nbsp;
                                    <span>{{ $doctor->phone }}</span>
                                </div>
                                <div class="flex text-left border-t py-1">
                                    <span><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg></span>
                                    &nbsp;
                                    <span>{{ $doctor->address }}</span>
                                </div>
                                <div class="flex justify-end border-t pt-4 pb-2">
                                    <button class="edit-btn">
                                        <span><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path><path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path></svg></span>
                                        <span>Edit</span>
                                    </button>
                                    &nbsp;
                                    <button class="del-btn">
                                        <span><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg></span>
                                        <span>Delete</span>
                                    </button>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    @else
                        <p>No Doctor Found</p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

@endsection