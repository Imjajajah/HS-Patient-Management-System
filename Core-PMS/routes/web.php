<?php

use App\Http\Controllers\PatientController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin_med.index');
});

Route::get('records', function () {
    return view('admin_med.records');
});

Route::controller(PatientController::class)->group(function() { 
    Route::get('/index', 'index');
    Route::post('/store', 'store');
});