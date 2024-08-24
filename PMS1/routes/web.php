<?php

use App\Http\Controllers\PatientController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('login');
// });

// Route::get('records', function () {
//     return view('admin_med.med_records.records');
// });

// Route::get('/login', function () {
//     return view('login');
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
