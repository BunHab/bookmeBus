<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth; // include for AUTH



use App\Providers\RouteServiceProvider;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;  // include DB Class
use Illuminate\Support\Facades\Route;

class dashboardController extends Controller
{
    //
    public function show_dashboard(){
        return view('admin.adminDashboard');
    }

    public function show_operator(){
        return view('admin.operatorControl');
    }

    public function show_payment(){
        return view('admin.paymentControl');
    }

    public function show_route(){
        return view('admin.routeControl');
    }

    public function show_schedule(){
        return view('admin.scheduleControl');
    }

    public function show_user(){
        return view('admin.userControl');
    }
}
