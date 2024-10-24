
<link rel="stylesheet" href="{{ asset('/css/vitalsigns.css') }}">
<script src="{{ asset('js/patient_charts.js') }}"></script>
<script src="{{ asset('js/charts_mode.js') }}"></script>
<script src="{{ asset('js/charts_graph.js') }}"></script>
<script src="{{ asset('js/charts_reminder.js') }}"></script>
<script src="{{ asset('js/charts_vital_colors.js') }}"></script>




<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">

@extends('admin_med.layout.index')

@section('med_content')
    <div class="content-body">
        <div class="container-fluid">
            @include('components.messages')
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="">Patient Details</h4>
                        </div>
                        <div class="card-body">

                            <div class="media">
                                <div class="media-left">
                                    <a href="#"><img class="media-object mr-3"
                                            src="{{ asset('admin_medcss/theme/./images/avatar/4.png') }} "
                                            alt="..."></a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading text-primary">{{ $emergency_patient->emergency_first_name }} {{ $emergency_patient->emergency_middle_name }} {{ $emergency_patient->emergency_last_name }} {{ $emergency_patient->emergency_extension }}</h4>
                                    <p>&#8203</p>
                                </div>
                            </div>

                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#patientInfo1" role="tab">Patient Information</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#vitalSigns" role="tab">Vital Signs</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#medicalHistory" role="tab">Medical History</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#doctorsAssessment" role="tab">Assessment</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#diagnosisAndProcedure" role="tab">Doctors Diagnosis</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#treatmentPlan" role="tab">Treatment Plan</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#nursesNotes" role="tab">Nurse's Notes</a>
                                </li>
<<<<<<< HEAD
                               
                                
=======

                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#medicationLog" role="tab">Medication Log</a>
                                </li>
>>>>>>> 39d7f057a3908de07e57a49de5b9f4411b67b571
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#ivFluid" role="tab">IV Fluid</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#charges" role="tab">Charges</a>
                                </li>
                            </ul>




                            </ul>

                            <div class="tab-content">

                                <!-- Patient Info Tab -->
                                <div class="tab-pane fade show active" id="patientInfo1" role="tabpanel">
                                    <div class="pt-4">
                                        @include('admin_med.patient.chart_tabs.patient_info')
                                    </div>
                                </div>
                                 <!-- End of Patient Info Tab -->

                                <!-- Vital Signs Tab -->
                                <div class="tab-pane fade" id="vitalSigns" role="tabpanel">
                                    <div class="pt-4">
                                        @include('admin_med.patient.chart_tabs.patient_charts')
                                    </div>
                                </div>
                                <!-- End of Vital Signs Tab -->



                                <div class="tab-pane fade" id="medicalHistory">
                                    <div class="pt-4">
                                        @include('admin_med.patient.chart_tabs.patient_history')
                                    </div>

                                </div>

                                <div class="tab-pane fade" id="doctorsAssessment">
                                    <div class="pt-4">
                                        @include('admin_med.patient.chart_tabs.patient_assessment')

                                    </div>

                                </div>

                                <div class="tab-pane fade" id="diagnosisAndProcedure" role="tabpanel">
                                    <div class="pt-4">
                                        @include('admin_med.patient.chart_tabs.patient_diagnosis')
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="treatmentPlan">
                                    <div class="pt-4">

                                        @include('admin_med.patient.chart_tabs.patient_treatment')


                                    </div>

                                </div>


                                <div class="tab-pane fade" id="nursesNotes">
                                    <div class="pt-4">


                                    </div>

                                </div>



                                

                                <div class="tab-pane fade" id="ivFluid">
                                    <div class="pt-4">


                                    </div>

                                </div>
                                <div class="tab-pane fade" id="charges">
                                    <div class="pt-4">


                                    </div>

                                </div>
                            <!--End of Testing Tab -->

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
