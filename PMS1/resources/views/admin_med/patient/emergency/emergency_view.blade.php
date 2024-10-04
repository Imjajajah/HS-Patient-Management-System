@extends('admin_med.layout.index')

@section('med_content')
    <div class="content-body">
        <div class="container-fluid">
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

                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#patientInfo1">Patient Information</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#patientCharts">Charts</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#medRecord1">Medical Record</a>
                                </li>

                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="patientInfo1" role="tabpanel">
                                    <div class="pt-4">
                                        <h4 class="card-title mb-4">General Information</h4>

                                        <div class="row">
                                            <div class="col-xl-4">
                                                <div class="col-lg-12">
                                                    <dl>
                                                        <dt class="mb-2">Date of Birth:</dt>
                                                        <dd class="mb-4">{{ $emergency_patient->emergency_dob }}</dd>
                                                    </dl>
                                                </div>
                                                <div class="col-lg-12">
                                                    <dl>
                                                        <dt class="mb-2">Nationality</dt>
                                                        <dd class="mb-4">{{ $emergency_patient->emergency_information->ep_nationality ?? 'N/A'}}</dd>
                                                    </dl>
                                                </div>
                                                <div class="col-lg-12">
                                                    <dl>
                                                        <dt class="mb-2">Religion</dt>
                                                        <dd class="mb-4">{{ $emergency_patient->emergency_information->ep_religion ?? 'N/A'}}</dd>
                                                    </dl>
                                                </div>
                                            </div>
                                            <div class="col-xl-4">
                                                <div class="col-lg-12">
                                                    <dl>
                                                        <dt class="mb-2">Sex:</dt>
                                                        <dd class="mb-4">{{ $emergency_patient->emergency_sex }}</dd>
                                                    </dl>
                                                </div>
                                                <div class="col-lg-12">
                                                    <dl>
                                                        <dt class="mb-2">Full Address:</dt>
                                                        <dd>{{ $emergency_patient->emergency_information->ep_full_address ?? 'N/A'}}</dd>
                                                    </dl>
                                                </div>
                                                <div class="col-lg-12">
                                                    <dl>
                                                        <dt class="mb-2">Phone Number:</dt>
                                                        <dd>{{ $emergency_patient->emergency_information->ep_phone ?? 'N/A'}}</dd>
                                                    </dl>
                                                </div>
                                            </div>
                                            <div class="col-xl-4">
                                                <div class="col-lg-12">
                                                    <dl>
                                                        <dt class="mb-2">Civil Status:</dt>
                                                        <dd class="mb-4">{{ $emergency_patient->emergency_information->ep_civil_status ?? 'N/A'}}</dd>
                                                    </dl>
                                                </div>
                                                <div class="col-lg-12">
                                                    <dl>
                                                        <dt class="mb-2">Employment:</dt>
                                                        <dd>{{ $emergency_patient->emergency_information->ep_employment ?? 'N/A'}}</dd>
                                                    </dl>
                                                </div>
                                                <div class="col-lg-12">
                                                    <dl>
                                                        <dt class="mb-2">Email:</dt>
                                                        <dd>{{ $emergency_patient->emergency_information->ep_email ?? 'N/A'}}</dd>
                                                    </dl>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <hr>
                                        </div>



                                        <div class="update-button">
                                            <button type="button" class="btn btn-square btn-outline-primary btn-lg" aria-label="Update" 
                                                onclick="window.location='{{ route('patients.emergency_patient_edit', ['emergency_patient_id' => $emergency_patient->emergency_patient_id]) }}'">Update
                                            </button>
                                        </div>

                                        <!-- <div>
                                            <button type="button" id="updateButton" class="btn btn-square btn-outline-primary btn-lg"
                                            data-toggle="modal" data-target="#emergencyEdit">{{ __('Update Information') }}</button>

                                            {{-- @include('admin_med.patient.emergency.emergency_edit') --}}
                                        </div> -->





                                    </div>
                                </div>

                                <div class="tab-pane fade" id="patientCharts">
                                    <div class="pt-4">
                                        <div class="update-button">
                                            <button class="update-charts">Update</button>
                                        </div>
                                    </div>
                                </div>

                                





                                <div class="tab-pane fade" id="medRecord1">
                                    <div class="pt-4">


                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
