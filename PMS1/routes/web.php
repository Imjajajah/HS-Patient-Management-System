<?php

use App\Http\Controllers\PatientController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin_med.index');
});

Route::get('records', function () {
    return view('admin_med.med_records.records');
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
