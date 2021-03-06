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
        $jan_sales = Salerecord::whereMonth('created_at', '1')->whereYear('created_at', '2021')->count();
        $feb_sales = Salerecord::whereMonth('created_at', '2')->whereYear('created_at', '2021')->count();
        $march_sales = Salerecord::whereMonth('created_at', '3')->whereYear('created_at', '2021')->count();
        $april_sales = Salerecord::whereMonth('created_at', '4')->whereYear('created_at', '2021')->count();
        $may_sales = Salerecord::whereMonth('created_at', '5')->whereYear('created_at', '2021')->count();
        $june_sales = Salerecord::whereMonth('created_at', '6')->whereYear('created_at', '2021')->count();
        $july_sales = Salerecord::whereMonth('created_at', '7')->whereYear('created_at', '2021')->count();
        $aug_sales = Salerecord::whereMonth('created_at', '8')->whereYear('created_at', '2021')->count();
        $sept_sales = Salerecord::whereMonth('created_at', '9')->whereYear('created_at', '2021')->count();
        $oct_sales = Salerecord::whereMonth('created_at', '10')->whereYear('created_at', '2021')->count();
        $nov_sales = Salerecord::whereMonth('created_at', '11')->whereYear('created_at', '2021')->count();
        $dec_sales = Salerecord::whereMonth('created_at', '12')->whereYear('created_at', '2021')->count();

        $salesChart = new SalesChart;
        $salesChart->labels(['January', 'February', 'March', 'April', 'May','June','July', 'August', 'September', 'October', 'November', 'December']);
        $salesChart->dataset('Sale Statistic', 'bar', [$jan_sales, $feb_sales, $march_sales, $april_sales, $may_sales, $june_sales, $july_sales, $aug_sales, $sept_sales, $oct_sales, $nov_sales, $dec_sales])->options(['backgroundColor'=>'#34D399']);

        return view('dashboard.index', ['userChart'=>$userChart, 'patientChart'=>$patientChart, 'salesChart'=>$salesChart]);
    }


}
