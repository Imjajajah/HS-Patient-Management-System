<?php

use App\Http\Controllers\PatientController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin_med.index');
});

Route::get('record_list', function () {
    return view('admin_med.patient.record_list');
});

Route::get('full_calendar', function () {
    return view('admin_med.calendar.full_calendar');
});

Route::get('patient_registration', function () {
    return view('admin_med.patient.patient_registration');
});

Route::get('/login', function () {
    return view('login');
});

Route::controller(PatientController::class)->group(function() {
    Route::get('/index', 'index');
    Route::get('/create', 'create');
    Route::post('/store', 'store');

    Route::get('/patients/{patient_id}', 'show')->name('patients.show');

});
