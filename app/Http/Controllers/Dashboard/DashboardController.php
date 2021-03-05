<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Bio;
use App\Models\Salerecord;

use App\Charts\UsersChart;
use App\Charts\PatientChart;
use App\Charts\SalesChart;

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

        // Sale Stats
        $today_sales = Salerecord::whereDate('created_at', today())->count();
        $last_month_sales = Salerecord::whereDate('created_at', '<=', today()->subDays(1))->whereDate('created_at', '>=', today()->subDays(30))->where('paymentStatus', 'paid')->get();
        $last_month_two_sales = Salerecord::whereDate('created_at', '<=', today()->subDays(31))->whereDate('created_at', '>=', today()->subDays(60))->where('paymentStatus', 'paid')->count();
        $last_month_three_sales = Salerecord::whereDate('created_at', '<=', today()->subDays(61))->whereDate('created_at', '>=', today()->subDays(90))->where('paymentStatus', 'paid')->count();
        $last_month_four_sales = Salerecord::whereDate('created_at', '<=', today()->subDays(91))->whereDate('created_at', '>=', today()->subDays(120))->where('paymentStatus', 'paid')->count();
        $last_month_five_sales = Salerecord::whereDate('created_at', '<=', today()->subDays(121))->whereDate('created_at', '>=', today()->subDays(150))->where('paymentStatus', 'paid')->count();
        $last_month_six_sales = Salerecord::whereDate('created_at', '<=', today()->subDays(151))->whereDate('created_at', '>=', today()->subDays(180))->where('paymentStatus', 'paid')->count();

        $salesChart = new SalesChart;
        $salesChart->labels(['Today', 'Last Month', 'Last Two Months', 'Last Three Months', 'Last Four Months','Last Five Months','Last Six Months']);
        $salesChart->dataset('Sale Statistic', 'bar', [$today_sales, $last_month_sales, $last_month_two_sales, $last_month_three_sales, $last_month_four_sales, $last_month_five_sales, $last_month_six_sales])->options(['backgroundColor'=>'#10B981']);

        return view('dashboard.index', ['userChart'=>$userChart, 'patientChart'=>$patientChart, 'salesChart'=>$salesChart]);
    }


}
