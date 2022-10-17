<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\loginController;
use App\Http\Controllers\dashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/login', [loginController::class,'show_login_form'])->name('login');
Route::post('/login', [loginController::class,'process_login'])->name('login');
Route::post('/logout', [loginController::class,'logout'])->name('logout');




Route::group(["middleware" => ["auth"]], function(){
    Route::get('/admin/dashboard',[dashboardController::class, 'show_dashboard']);
    Route::get('/admin/dashboard/operator',[dashboardController::class, 'show_operator']);
    Route::get('/admin/dashboard/payment',[dashboardController::class, 'show_payment']);
    Route::get('/admin/dashboard/route',[dashboardController::class, 'show_route']);
    Route::get('/admin/dashboard/schedule',[dashboardController::class, 'show_schedule']);
    Route::get('/admin/dashboard/users',[dashboardController::class, 'show_user']);
});


