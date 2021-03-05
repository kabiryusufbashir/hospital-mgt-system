<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Bio;

use App\Charts\UsersChart;
use App\Charts\PatientChart;

use DB;

class DashboardController extends Controller
{    
    public function __construct(){
        $this->middleware(['auth']);
    }
    
    public function index()
    {   
        //Staff Stats
        $doctors = User::where('category', '2')->count();
        $nurses = User::where('category', '3')->count();
        $pharmacists = User::where('category', '4')->count();
        $laboratorists = User::where('category', '5')->count();
        $accountants = User::where('category', '6')->count();

        $userChart = new UsersChart;
        $userChart->labels(['Doctors', 'Nurses', 'Pharmacists', 'Laboratorists', 'Accountant']);
        $userChart->dataset('Staff Statistic', 'bar', [$doctors, $nurses, $pharmacists, $laboratorists, $accountants])->options(['backgroundColor' => '#60A5FA']);
        

        //Patient Stats
        $patientMale = Bio::where('gender', 'male')->count();
        $patientFemale = Bio::where('gender', 'female')->count();

        $patientChart = new PatientChart;
        $patientChart->labels(['Male', 'Female']);
        $patientChart->dataset('Patient Statistic', 'bar', [$patientMale, $patientFemale])->options(['backgroundColor' => '#FCD34D']);

        return view('dashboard.index', ['userChart'=>$userChart, 'patientChart'=>$patientChart]);
    }


}
