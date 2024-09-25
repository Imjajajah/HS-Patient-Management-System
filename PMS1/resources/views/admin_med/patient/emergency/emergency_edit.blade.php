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
                            <!-- Nav tabs -->
                            {{-- <div class="custom-tab-1"> --}}
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

                            <form action="{{ route('patients.emergency_patient_update', ['emergency_patient_id' => $emergency_patient->emergency_patient_id]) }}" method="POST">
                                @csrf
                                @method('PUT')
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="patientInfo1" role="tabpanel">
                                    <div class="pt-4">
                                        <h4 class="card-title mb-4">General Information</h4>
                                        <div class="row">
                                            <div class="col-xl-4">
                                                <div class="col-lg-10">
                                                    <dl>
                                                        <dt class="mb-2">Date of Birth:</dt>
                                                        <dd class="mb-4">
                                                            <input type="text" class="form-control" name="emergency_dob"
                                                            value={{ $emergency_patient->emergency_dob }} id="mdate">
                                                            {{-- The value="" should have the Date of Birth inputted for the patient --}}
                                                            @if ($errors->has('emergency_dob'))
                                                                @foreach ($errors->get('emergency_dob') as $error)
                                                                    <span style="color:red;">{{ $error }}</span><br>
                                                                @endforeach
                                                            @endif
                                                        </dd>
                                                    </dl>
                                                </div>
                                                <div class="col-lg-10">
                                                    <dl>
                                                        <dt class="mb-2">Nationality</dt>
                                                        <dd class="mb-4">
                                                            <input type="text" class="form-control" name=""
                                                                value="" id="nationality">
                                                        </dd>
                                                    </dl>
                                                </div>
                                                <div class="col-lg-10">
                                                    <dl>
                                                        <dt class="mb-2">Religion</dt>
                                                        <dd class="mb-4">
                                                            <input type="text" class="form-control" name=""
                                                                value="" id="religion">
                                                        </dd>
                                                    </dl>
                                                </div>
                                            </div>
                                            <div class="col-xl-4">
                                                <div class="col-lg-10">
                                                    <dl>
                                                        <dt class="mb-2">Sex:</dt>
                                                        <dd class="mb-4">
                                                            <select class="custom-select form-control" id="sex"
                                                                name="emergency_sex" data-component="dropdown" required
                                                                aria-label="Sex">
                                                                <option value="" {{ $emergency_patient->emergency_sex == "" ? 'selected' : '' }}>Please Select</option>
                                                                <option value="Male" {{ $emergency_patient->emergency_sex == "Male" ? 'selected' : '' }}>Male</option>
                                                                <option value="Female" {{ $emergency_patient->emergency_sex == "Female" ? 'selected' : '' }}>Female</option>
                                                            </select>
                                                            @if ($errors->has('emergency_dob'))
                                                                @foreach ($errors->get('emergency_dob') as $error)
                                                                    <span style="color:red;">{{ $error }}</span><br>
                                                                @endforeach
                                                            @endif
                                                        </dd>
                                                    </dl>
                                                </div>
                                                <div class="col-lg-10">
                                                    <dl>
                                                        <dt class="mb-2">Full Address:</dt>
                                                        <dd>
                                                            {{-- <input type="text" class="form-control" name="street_address"
                                                                value={{ $patient->street_address }} id="fullAddress"> --}}
                                                            <textarea type="text" name="" class="form-control" rows="2"
                                                            id="allergies"></textarea>
                                                        </dd>
                                                    </dl>
                                                </div>
                                                <div class="col-lg-10">
                                                    <dl>
                                                        <dt class="mb-2">Phone Number:</dt>
                                                        <dd>
                                                            <input type="tel" class="form-control" name=""
                                                                value="" id="phoneNumber">
                                                        </dd>
                                                    </dl>
                                                </div>
                                            </div>
                                            <div class="col-xl-4">
                                                <div class="col-lg-10">
                                                    <dl>
                                                        <dt class="mb-2">Civil Status:</dt>
                                                        <dd class="mb-4">
                                                            <select class="custom-select form-control" id=""
                                                                name="" data-component="dropdown"
                                                                aria-label="Civil Status">
                                                                <option value="" >Please Select</option>
                                                                <option value="Single" >Single</option>
                                                                <option value="Married" >Married</option>
                                                                <option value="Divorced" >Divorced</option>
                                                                <option value="Legally separated" >Legally separated
                                                                </option>
                                                                <option value="Widowed" >Widowed</option>
                                                                <option value="Other" >Other</option>
                                                            </select>
                                                        </dd>
                                                    </dl>
                                                </div>
                                                <div class="col-lg-10">
                                                    <dl>
                                                        <dt class="mb-2">Employment:</dt>
                                                        <dd>
                                                            <select class="custom-select form-control" id=""
                                                                name="" data-component="dropdown"
                                                                 aria-label="Employment">
                                                                <option value="" >Please Select</option>
                                                                <option value="Employed" >Employed</option>
                                                                <option value="Self-Employed" >Self-Employed
                                                                </option>
                                                                <option value="Unemployed" >Unemployed</option>
                                                                <option value="Retired" >Retired</option>
                                                                <option value="Student">Student</option>
                                                                <option value="Other" >Other</option>
                                                            </select>
                                                        </dd>
                                                    </dl>
                                                </div>
                                                <div class="col-lg-10">
                                                    <dl>
                                                        <dt class="mb-2">Email:</dt>
                                                        <dd>
                                                            <input type="email" class="form-control" name=""
                                                                value="" id="email">
                                                        </dd>
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
                                                <div class="col-lg-10">
                                                    <dl>
                                                        <dt class="mb-2">Complaints:</dt>
                                                        <dd class="mb-4"></dd>
                                                    </dl>
                                                </div>
                                                <div class="col-lg-10">
                                                    <dl>
                                                        <dt class="mb-2">Diagnosis:</dt>
                                                        <dd class="mb-4">

                                                        </dd>
                                                        {{-- Will be updates after charting --}}
                                                    </dl>
                                                </div>
                                            </div>
                                            <div class="col-xl-4">
                                                <div class="col-lg-10">
                                                    <dl>
                                                        <dt class="mb-2">Allergies:</dt>
                                                        <dd class="mb-4">
                                                            <textarea type="text" name="" class="form-control" rows="2"
                                                                id="allergies"></textarea>
                                                        </dd>
                                                    </dl>
                                                </div>
                                                <div class="col-lg-10">
                                                    <dl>
                                                        <dt class="mb-2">Chronic/Other Illness:</dt>
                                                        <dd class="mb-4">
                                                            <textarea type="text" name="" class="form-control" rows="2"
                                                                value="[Chronic/Other Illness1], [Chronic/Other Illness2]" id="coroIllness"></textarea>

                                                        </dd>
                                                    </dl>
                                                </div>
                                            </div>
                                            <div class="col-xl-4">
                                                <div class="col-lg-10">
                                                    <dl>
                                                        <dt class="mb-2">Surgeries Done:</dt>
                                                        <dd class="mb-4">
                                                            <textarea type="text" name="" class="form-control" rows="2"
                                                                value="[Surgeries Done1], [Surgeries Done2]" id="surgeries"></textarea>
                                                        </dd>
                                                    </dl>
                                                </div>
                                                <div class="col-lg-10">
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
                                <div class="tab-pane fade" id="medRecord1">
                                    <div class="pt-4">
                                        <h4>Medical Record</h4>
                                        <p>
                                            <textarea type="text" name="" class="form-control" rows="2"
                                                value="[Something Goes Here]" id="medRecord" placeholder="Something Goes Here..."></textarea>
                                        </p>
                                        <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt
                                            tofu
                                            stumptown aliqua, retro synth master cleanse. Mustache cliche tempor.
                                        </p>
                                        <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt
                                            tofu
                                            stumptown aliqua, retro synth master cleanse. Mustache cliche tempor.
                                        </p>
                                    </div>
                                </div>

                            </div>
                            {{-- </div> --}}
                            <div class="container d-flex justify-content-end">
                                <button type="button" class="btn btn-square btn-outline-light btn-lg mx-3" aria-label="Cancel Changes"
                                onclick="window.history.back();">{{ __('Cancel') }}</button>
                                <button type="submit" class="btn btn-square btn-outline-primary btn-lg" aria-label="Save Changes"
                                data-target="">{{ __('Save') }}</button>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
