@extends('admin_med.layout.index')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="">Patient Details</h4>
                        </div>
                        <div class="card-body">
                            <!-- Nav tabs -->
                            {{-- <div class="custom-tab-1"> --}}
                            <div class="media">
                                <div class="media-left">
                                    <a href="#"><img class="media-object mr-3"
                                            src="{{ asset('admin_medcss/theme/./images/avatar/4.png') }} "
                                            alt="..."></a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading text-primary">[Patient Full Name]</h4>
                                    <p>&#8203</p>
                                </div>
                            </div>
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#patientInfo1">Patient
                                        Information</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#medRecord1">Medical Record</a>
                                </li>
                                {{-- <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#contact1">Contact</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#message1">Message</a>
                                    </li> --}}
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
                                                        <dd class="mb-4">[Age] years old</dd>
                                                    </dl>
                                                </div>
                                                <div class="col-lg-12">
                                                    <dl>
                                                        <dt class="mb-2">Nationality</dt>
                                                        <dd class="mb-4">[Nationality]</dd>
                                                    </dl>
                                                </div>
                                                <div class="col-lg-12">
                                                    <dl>
                                                        <dt class="mb-2">Religion</dt>
                                                        <dd class="mb-4">[Religion]</dd>
                                                    </dl>
                                                </div>
                                            </div>
                                            <div class="col-xl-4">
                                                <div class="col-lg-12">
                                                    <dl>
                                                        <dt class="mb-2">Sex:</dt>
                                                        <dd class="mb-4">[Sex]</dd>
                                                    </dl>
                                                </div>
                                                <div class="col-lg-12">
                                                    <dl>
                                                        <dt class="mb-2">Full Address:</dt>
                                                        <dd>[Full Address]</dd>
                                                    </dl>
                                                </div>
                                                <div class="col-lg-12">
                                                    <dl>
                                                        <dt class="mb-2">Phone Number:</dt>
                                                        <dd>(+63)[Phone Number]</dd>
                                                    </dl>
                                                </div>                                                
                                            </div>
                                            <div class="col-xl-4">
                                                <div class="col-lg-12">
                                                    <dl>
                                                        <dt class="mb-2">Civil Status:</dt>
                                                        <dd class="mb-4">[Civil Status]</dd>
                                                    </dl>
                                                </div>
                                                <div class="col-lg-12">
                                                    <dl>
                                                        <dt class="mb-2">Employment:</dt>
                                                        <dd>[Employment]</dd>
                                                    </dl>
                                                </div>
                                                <div class="col-lg-12">
                                                    <dl>
                                                        <dt class="mb-2">Email:</dt>
                                                        <dd>[Email]</dd>
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
                                                        <dd class="mb-4">[Complaints]</dd>
                                                    </dl>
                                                </div>
                                                <div class="col-lg-12">
                                                    <dl>
                                                        <dt class="mb-2">Diagnosis:</dt>
                                                        <dd class="mb-4">[Diagnosis]</dd>
                                                        {{-- Should be null --}}
                                                    </dl>
                                                </div>
                                            </div>
                                            <div class="col-xl-4">
                                                <div class="col-lg-12">
                                                    <dl>
                                                        <dt class="mb-2">Allergies:</dt>
                                                        <dd class="mb-4">[Allergy1], [Allergy2]</dd>
                                                    </dl>
                                                </div>
                                                <div class="col-lg-12">
                                                    <dl>
                                                        <dt class="mb-2">Chronic/Other Illness:</dt>
                                                        <dd>[Chronic/Other Illness1], [Chronic/Other Illness2]</dd>
                                                    </dl>
                                                </div>
                                            </div>
                                            <div class="col-xl-4">
                                                <div class="col-lg-12">
                                                    <dl>
                                                        <dt class="mb-2">Surgeries Done:</dt>
                                                        <dd class="mb-4">[Surgeries Done1], [Surgeries Done2]</dd>
                                                    </dl>
                                                </div>
                                                <div class="col-lg-12">
                                                    <dl>
                                                        <dt class="mb-2">Vices:</dt>
                                                        <dd>[Drinking or Smoking]</dd>
                                                    </dl>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="medRecord1">
                                    <div class="pt-4">
                                        <h4>Medical Record</h4>
                                        <p>Something Goes Here.
                                        </p>
                                        <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu
                                            stumptown aliqua, retro synth master cleanse. Mustache cliche tempor.
                                        </p>
                                        <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu
                                            stumptown aliqua, retro synth master cleanse. Mustache cliche tempor.
                                        </p>
                                    </div>
                                </div>
                                {{-- <div class="tab-pane fade" id="contact1">
                                        <div class="pt-4">
                                            <h4>This is contact title</h4>
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.
                                            </p>
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="message1">
                                        <div class="pt-4">
                                            <h4>This is message title</h4>
                                            <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor.
                                            </p>
                                            <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor.
                                            </p>
                                        </div>
                                    </div> --}}
                            </div>
                            {{-- </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
