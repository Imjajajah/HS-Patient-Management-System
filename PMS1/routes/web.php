<?php

// use App\Http\Controllers\NotificationController;

use App\Http\Controllers\DiagnosisAndProcedureController;
use App\Http\Controllers\EpAssessmentController;
use App\Http\Controllers\EpMedicalHistoryController;
use App\Http\Controllers\NotificationsController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VitalSignsController;
use Illuminate\Support\Facades\Route;

Route::controller(UserController::class)->group(function() {
    Route::get('/', 'login')->name('login')->middleware('guest');
    Route::get('/login', 'login')->name('login')->middleware('guest');
    Route::post('/login/process', 'process');
    Route::post('/logout', 'logout');
});

Route::controller(PatientController::class)->group(function() {
    // Route::get('/dashboard', 'index');
    // Route::get('/dashboard/modal', 'indexm');
    // Route::get('/create', 'create');
    // Route::post('/store', 'store');
    // Route::get('/patients/{patient_id}', 'show')->name('patients.show');
    // Route::get('/patients/edit/{patient_id}', 'edit')->name('patients.edit');
    // Route::put('/patients/update/{patient_id}', 'update')->name('patients.update');

    Route::post('/emergency/store', 'emergency_person_store');
    Route::get('/emergency-records', 'emergency_index');
    Route::get('/emergency-patient/{emergency_patient_id}', 'emergency_patient_show')->name('patients.emergency_patient_show');
    Route::get('/emergency-patient/edit/{emergency_patient_id}', 'emergency_patient_edit')->name('patients.emergency_patient_edit');
    Route::put('/emergency-patient/update/{emergency_patient_id}', 'emergency_patient_update')->name('patients.emergency_patient_update');
    // UUID route
    Route::get('/generate-unique-id', 'generateUniqueId');
});

Route::controller(VitalSignsController::class)->group(function() {
    Route::post('/emergency/vital-signs/store', 'vital_signs_store');
    Route::get('/emergency-patient/vital-signs/{vital_signs_id}', 'vital_signs_show')->name('patients.vital_signs_show');
    Route::get('/emergency-patient/vital-signs/edit/{vital_signs_id}', 'vital_signs_edit')->name('patients.vital_signs_edit');
    Route::patch('/emergency/vital-signs/update/{vital_signs_id}', 'vital_signs_update')->name('vital_signs.vital_signs_update');
    Route::get('/logs', 'showLogs')->name('vital_signs.showLogs');
});

Route::controller(NotificationsController::class)->group(function() {
    Route::get('/notifications', 'allNotifications')->name('notifications.allNotifications');
    Route::post('/notifications/read/{id}', 'markAsRead')->name('notifications.markAsRead');
});

Route::controller(DiagnosisAndProcedureController::class)->group(function() {
    Route::post('/emergency/diagnosis-and-procedure/store', 'diagnosis_and_procedure_store');
    Route::patch('/emergency/diagnosis-and-procedure/update/{diagnosis_and_procedure_id}', 'diagnosis_and_procedure_update')->name('diagnosis_and_procedure.diagnosis_and_procedure_update');
});

Route::controller(EpMedicalHistoryController::class)->group(function() {
    Route::post('/emergency/ep-medical-history/store', 'ep_medical_history_store');
    Route::patch('/emergency/ep-medical-history/update/{ep_medical_history_id}', 'ep_medical_history_update')->name('ep_diagnosis_and_procedure.ep_medical_history_update');
});

Route::controller(EpAssessmentController::class)->group(function() {
    Route::post('/emergency/ep-assessment/store', 'ep_assessment_store');
    Route::patch('/emergency/ep-assessment/update/{ep_assessment_id}', 'ep_assessment_update')->name('ep_assessment.ep_assessment_update');
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

Route::get('/blank6', function () {
    return view('blank6');
});



Route::get('overall_records', function () {
    return view('admin_med.patient.overall_records');
});

// Route::get('emergency_records', function () {
//     return view('admin_med.patient.emergency.emergency_records');
// });

Route::get('inpatient_records', function () {
    return view('admin_med.patient.inpatient.inpatient_records');
});






// Ito yung latest na routes sa end ko
Route::get('med_dashboard', function () {
    return view('admin_med.dashboard.med_dashboard');
});

Route::get('med_records', function () {
    return view('admin_med.patient.records');
});

Route::get('med_register', function () {
    return view('admin_med.patient.register');
});

Route::get('med_view', function () {
    return view('admin_med.patient.view');
});

Route::get('med_edit', function () {
    return view('admin_med.patient.edit');
});


Route::get('/doc_dashboard', function () {
    return view('doctors.doc_dashboard.doctor_dashboard');
});

Route::get('doc_records', function () {
    return view('doctors.doc_patient.doctor_records');
});


Route::get('merd_registration', function () {
    return view('admin_med.patient.edit');
});
