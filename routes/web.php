<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/logout', [DashboardController::class, 'logout'])->name('admin.logout');
    Route::get('/aboutUs', [HomeController::class, 'about'])->name('about');
    Route::get('/contactUs', [HomeController::class, 'contact'])->name('contact');
    Route::get('/services', [HomeController::class, 'service'])->name('service');
    Route::get('/service-details', [HomeController::class, 'service_details'])->name('service_details');

    // Route::post('/login/2fa', [DashboardController::class, 'twoFactorAuthenticate'])->name('login.2fa');
});