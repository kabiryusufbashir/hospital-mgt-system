<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Charts\UsersChart;
use DB;

class DashboardController extends Controller
{
    
    public function __construct(){
        $this->middleware(['auth']);
    }
    
    public function index()
    {   
        $doctors = User::where('category', '2')->count();
        $nurses = User::where('category', '3')->count();
        $pharmacists = User::where('category', '4')->count();
        $laboratorists = User::where('category', '5')->count();
        $accountants = User::where('category', '6')->count();
        
        $today_users = User::whereDate('created_at', today())->count();
        $yesterday_users = User::whereDate('created_at', today()->subDays(1))->count();
        $users_2_days_ago = User::whereDate('created_at', today()->subDays(2))->count();

        $chart = new UsersChart;
        $chart->labels(['Doctors', 'Nurses', 'Pharmacists', 'Laboratorists', 'Accountant']);
        $chart->dataset('Staff Statistic', 'bar', [$doctors, $nurses, $pharmacists, $laboratorists, $accountants])->options(['backgroundColor' => 'blue']);
        
        return view('dashboard.index', ['chart'=>$chart]);
    }


}
