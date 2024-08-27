<?php

use App\Http\Controllers\PatientController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// ito yung mga routes associated sa changes ko.. ikaw na bahala mag adjust
// Route::get('/', function () {
//     return view('admin_med.dashboard.home');
// });

// Route::get('records', function () {
//     return view('admin_med.patient.records');
// });

// Route::get('register', function () {
//     return view('admin_med.patient.register');
// });

// Route::get('calendar', function () {
//     return view('admin_med.calendar.calendar');
// });



Route::controller(UserController::class)->group(function() {
    Route::get('/', 'login')->name('login')->middleware('guest');
    Route::post('/login/process', 'process');
    Route::post('/logout', 'logout');
});

Route::controller(PatientController::class)->group(function() {
    Route::get('/dashboard', 'index');
    Route::get('/create', 'create');
    Route::post('/store', 'store');
    Route::get('/patients/{patient_id}', 'show')->name('patients.show');
});
