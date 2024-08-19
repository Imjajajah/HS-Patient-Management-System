<?php

use App\Http\Controllers\PatientController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('patient_registration');
// });


Route::controller(PatientController::class)->group(function() {
    Route::get('/index', 'index');
    Route::get('/create', 'create');
    Route::post('/store', 'store');
    Route::get('/patients/{patient_id}', 'show')->name('patients.show');
});
