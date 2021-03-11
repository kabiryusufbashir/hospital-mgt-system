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
                    <button class="flex tracking-wider bg-blue-600 py-2 px-3 text-white rounded-full hover:bg-gray-200 hover:text-black hover:border-2 transition ease-out duration-700">
                        <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg> 
                        Add Doctor
                    </button>
                </div>
                <div>
                    @if($doctors->count())
                    <div class="table w-full">
                        <div class="table-row-group">
                            <div class="table-row">
                                <div class="table-cell">S/No</div>
                                <div class="table-cell">Name</div>
                                <div class="table-cell">City</div>
                                <div class="table-cell">Country</div>
                                <div class="table-cell">Address</div>
                                <div class="table-cell">Phone</div>
                            </div>
                            <!-- <div class="table-row">
                                <div class="table-cell">Cell 4</div>
                                <div class="table-cell">A cell with more content</div>
                                <div class="table-cell">Cell 6</div>
                            </div> -->
                        </div>
                    </div>
                    @else
                        <p>No Doctor Found</p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

@endsection