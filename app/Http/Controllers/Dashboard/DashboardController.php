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
        // $users = User::select(\DB::raw("COUNT(*) as count"))
        //             ->whereYear('created_at', date('Y'))
        //             ->groupBy(\DB::raw("Month(created_at)"))
        //             ->pluck('count');
        
        $today_users = User::whereDate('created_at', today())->count();
        $yesterday_users = User::whereDate('created_at', today()->subDays(1))->count();
        $users_2_days_ago = User::whereDate('created_at', today()->subDays(2))->count();

        $chart = new UsersChart;
        $chart->labels(['2 days ago', 'Yesterday', 'Today']);
        $chart->dataset('My dataset', 'line', [$users_2_days_ago, $yesterday_users, $today_users]);
        
        // return view('dashboard.index', ['users'=>$users, 'chart'=>$chart]);
        return view('dashboard.index', ['chart'=>$chart]);
    }


}
