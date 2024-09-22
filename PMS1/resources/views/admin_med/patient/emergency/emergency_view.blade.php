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
                                    <h4 class="media-heading text-primary"></h4>
                                    <p>&#8203</p>
                                </div>
                            </div>


                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#patientInfo1">Patient
                                        Information</a>
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
                                                        <dt class="mb-2">Age:</dt>
                                                        <dd class="mb-4"></dd>
                                                    </dl>
                                                </div>
                                                <div class="col-lg-12">
                                                    <dl>
                                                        <dt class="mb-2">Nationality</dt>
                                                        <dd class="mb-4"></dd>
                                                    </dl>
                                                </div>
                                                <div class="col-lg-12">
                                                    <dl>
                                                        <dt class="mb-2">Religion</dt>
                                                        <dd class="mb-4"></dd>
                                                    </dl>
                                                </div>
                                            </div>
                                            <div class="col-xl-4">
                                                <div class="col-lg-12">
                                                    <dl>
                                                        <dt class="mb-2">Sex:</dt>
                                                        <dd class="mb-4"></dd>
                                                    </dl>
                                                </div>
                                                <div class="col-lg-12">
                                                    <dl>
                                                        <dt class="mb-2">Full Address:</dt>
                                                        <dd></dd>
                                                    </dl>
                                                </div>
                                                <div class="col-lg-12">
                                                    <dl>
                                                        <dt class="mb-2">Phone Number:</dt>
                                                        <dd></dd>
                                                    </dl>
                                                </div>
                                            </div>
                                            <div class="col-xl-4">
                                                <div class="col-lg-12">
                                                    <dl>
                                                        <dt class="mb-2">Civil Status:</dt>
                                                        <dd class="mb-4"></dd>
                                                    </dl>
                                                </div>
                                                <div class="col-lg-12">
                                                    <dl>
                                                        <dt class="mb-2">Employment:</dt>
                                                        <dd></dd>
                                                    </dl>
                                                </div>
                                                <div class="col-lg-12">
                                                    <dl>
                                                        <dt class="mb-2">Email:</dt>
                                                        <dd></dd>
                                                    </dl>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <hr>
                                        </div>

                                        <h4 class="card-title mb-4">Medical Data</h4>
                                        <div class="row">
                                            <div class="col-xl-4">
                                                <div class="col-lg-12">
                                                    <dl>
                                                        <dt class="mb-2">Complaints:</dt>
                                                        <dd class="mb-4"></dd>
                                                    </dl>
                                                </div>
                                                <div class="col-lg-12">
                                                    <dl>
                                                        <dt class="mb-2">Diagnosis:</dt>
                                                        <dd class="mb-4">
                                                           
                                                        </dd>
                                                        {{-- Should be null --}}
                                                    </dl>
                                                </div>
                                            </div>
                                            <div class="col-xl-4">
                                                <div class="col-lg-12">
                                                    <dl>
                                                        <dt class="mb-2">Allergies:</dt>
                                                        <dd class="mb-4"></dd>
                                                    </dl>
                                                </div>
                                                <div class="col-lg-12">
                                                    <dl>
                                                        <dt class="mb-2">Chronic/Other Illness:</dt>
                                                        <dd></dd>
                                                    </dl>
                                                </div>
                                            </div>

                                            <div class="col-xl-4">
                                                <div class="col-lg-12">
                                                    <dl>
                                                        <dt class="mb-2">Surgeries Done:</dt>
                                                        <dd class="mb-4"></dd>
                                                    </dl>
                                                </div>
                                                <div class="col-lg-12">
                                                    <dl>
                                                        <dt class="mb-2">Vices:</dt>
                                                        <dd>
                                    
                                                        </dd>
                                                    </dl>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="patientCharts">
                                    <div class="pt-4">
                                        
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="medRecord1">
                                    <div class="pt-4">
                                        
                                    </div>
                                </div>

                               
                            </div>
                            
                        </div>

                        <div>

                            <a href="javascript:void()" class="btn btn-square btn-secondary mr-4"
                                data-toggle="tooltip" type="button" data-placement="top" title="Edit"
                                onclick="window.location='{{ route('patients.edit', ['patient_id' => $emergency_patient->emergency_patient_id]) }}'">
                                <i class="fa fa-pencil color-muted"> Edit</i> 
                            </a>

                        </div>
                        

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
