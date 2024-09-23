<?php

use App\Http\Controllers\PatientController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



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


Route::get('overall_records', function () {
    return view('admin_med.patient.overall_records');
});

Route::get('emergency_records', function () {
    return view('admin_med.patient.emergency.emergency_records');
});

Route::get('inpatient_records', function () {
    return view('admin_med.patient.inpatient.inpatient_records');
});



// Ito yung latest na routes sa end ko
// Route::get('med_dashboard', function () {
//     return view('admin_med.dashboard.med_dashboard');
// });

// Route::get('med_records', function () {
//     return view('admin_med.patient.records');
// });

// Route::get('med_register', function () {
//     return view('admin_med.patient.register');
// });

// Route::get('med_view', function () {
//     return view('admin_med.patient.view');
// });

// Route::get('med_edit', function () {
//     return view('admin_med.patient.edit');
// });


// Route::get('/', function () {
//     return view('doctors.doc_dashboard.doctor_dashboard');
// });

// Route::get('doc_records', function () {
//     return view('doctors.doc_patient.doctor_records');
// });
