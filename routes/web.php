<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoggingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SocialiteAuthController;
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
    return view('auth.login');
});

//prevent unauthorized access to these routes
Route::group(['middleware' => ['auth']], function() {
    Route::resource('/logs', LoggingController::class);
    Route::resource('users', UserController::class);
    Route::resource('roles', RoleController::class);
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/report', [DashboardController::class, 'get_report_data'])->name('report');
});

Route::get('google', [SocialiteAuthController::class, 'googleRedirect'])->name('auth/google');
Route::get('/auth/google-callback', [SocialiteAuthController::class, 'loginWithGoogle']);

require __DIR__.'/auth.php';
