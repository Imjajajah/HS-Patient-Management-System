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

// Route::get('view', function () {
//     return view('admin_med.patient.view');
// });

// Route::get('edit', function () {
//     return view('admin_med.patient.edit');
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
    Route::get('/dashboard/modal', 'indexm');
    Route::get('/create', 'create');
    Route::post('/store', 'store');
    Route::get('/patients/{patient_id}', 'show')->name('patients.show');
    Route::get('/patients/edit/{patient_id}', 'edit')->name('patients.edit');
    Route::put('/patients/update/{patient_id}', 'update')->name('patients.update');
});

Route::get('/blank1', function () {
    return view('blank1');
});

Route::get('/blank2', function () {
    return view('blank2');
});

Route::get('/blank3', function () {
    return view('blank3');
});

Route::get('/blank4', function () {
    return view('blank4');
});

Route::get('/blank5', function () {
    return view('blank5');
});