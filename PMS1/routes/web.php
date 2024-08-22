<?php

use App\Http\Controllers\PatientController;
use Illuminate\Support\Facades\Route;

// Define a route for the home page
Route::get('/', function () {
    return view('admin_med.index'); // Render the 'admin_med.index' view
});

// Define a route for the records page
Route::get('records', function () {
    return view('admin_med.records'); // Render the 'admin_med.records' view
});

// Group routes that use the PatientController
Route::controller(PatientController::class)->group(function() {
    Route::get('/index', 'index'); // Route to the index method
    Route::get('/create', 'create'); // Route to the create method
    Route::post('/store', 'store'); // Route to the store method

    // Route to show a specific patient by ID
    Route::get('/patients/{patient_id}', 'show')->name('patients.show');
});