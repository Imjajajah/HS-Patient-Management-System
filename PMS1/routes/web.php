<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('patient_registration');
});
