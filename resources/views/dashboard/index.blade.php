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
            <!-- System Stats  -->
            <div class="md:grid md:grid-cols-4 md:gap-4 mx-2 my-6">
                <!-- Doctor  -->
                <div class="stats-card">
                    <div>
                        <img class="stats-icon bg-blue-400" src="{{ asset('images/doctor_stats.png') }}" alt="Doctor Stats Icon">
                    </div>
                    <div>
                        <div class="stats-value">{{ $doctor }}</div>
                        <div class="bg-blue-400 text-white px-4 py-1 rounded-lg flex items-center">
                            <span>Doctors</span>
                            &nbsp;
                            <span>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            </span>
                        </div>    
                    </div>
                </div>
                <!-- Patient  -->
                <div class="stats-card">
                    <div>
                        <img class="stats-icon bg-yellow-400" src="{{ asset('images/patient_stats.png') }}" alt="Doctor Stats Icon">
                    </div>
                    <div>
                        <div class="stats-value">{{ $patient }}</div>
                        <div class="bg-yellow-500 text-white px-4 py-1 rounded-lg flex items-center">
                            <span>Patient</span>
                            &nbsp;
                            <span>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            </span>
                        </div>    
                    </div>
                </div>
                <!-- Attend  -->
                <div class="stats-card">
                    <div>
                        <img class="stats-icon bg-green-400" src="{{ asset('images/attend.png') }}" alt="Attend Stats Icon">
                    </div>
                    <div>
                        <div class="stats-value">{{ $patientAttend }}</div>
                        <div class="bg-green-500 text-white px-4 py-1 rounded-lg flex items-center">
                            <span>Attend</span>
                            &nbsp;
                            <span>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            </span>
                        </div>    
                    </div>
                </div>
                <!-- Waiting  -->
                <div class="stats-card">
                    <div>
                        <img class="stats-icon bg-purple-400" src="{{ asset('images/waiting.png') }}" alt="Waiting Stats Icon">
                    </div>
                    <div>
                        <div class="stats-value">{{ $patientNotAttend }}</div>
                        <div class="bg-purple-500 text-white px-4 py-1 rounded-lg flex items-center">
                            <span>Waiting</span>
                            &nbsp;
                            <span>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            </span>
                        </div>    
                    </div>
                </div>
            </div>
            <div class="md:grid md:grid-cols-2 md:gap-4 mx-2 my-6">
                <div class="bg-white">
                    <div class="stats-value px-16 py-4">Staff Statistic</div>
                    <div>{!! $userChart->container() !!}</div>
                </div>
                <div class="bg-white">
                    <div class="stats-value px-16 py-4">Patient Statistic</div>
                    <div>{!! $patientChart->container() !!}</div>
                </div>
            </div>
            <!-- Charts  -->
            <div class="bg-white md:grid md:grid-cols-2 md:gap-4 mx-2 my-6">
                <div class="">
                    <div class="stats-value px-16 py-4">Payment Status Statistic</div>
                    <div>{!! $payChart->container() !!}</div>
                </div>
                <div>
                    <div class="stats-value px-16 py-4">Sales Statistic 2021</div>
                    <div>{!! $salesChart->container() !!}</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Chart Script  -->
    {!! $userChart->script() !!}
    {!! $patientChart->script() !!}
    {!! $payChart->script() !!}
    {!! $salesChart->script() !!}
@endsection