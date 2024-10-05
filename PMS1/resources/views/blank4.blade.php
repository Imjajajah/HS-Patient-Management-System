<link rel="stylesheet" href="{{ asset('/css/vitalsigns.css') }}">

@extends('admin_med.layout.index')

@section('med_content')
    <div class="content-body">
        <div class="container-fluid">

            <div class="row justify-content-center my-4">
                <div class="col-lg-12">
                    <div class="row align-items-center ">
                        <div class="col">
                            <!-- <h2 class="h1 mb-0 page-title">{{ __('Medical Chart') }}</h2> -->
                        </div>
                        <div class="col-auto">
            
                            {{-- <button type="button" id="registerBtn" class="btn btn-square btn-outline-primary btn-lg"
                            data-toggle="modal" data-target="#exampleModalLong">{{ __('Register a Patient') }}</button> --}}
                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="row grid">

                        <div class="col-lg-6">
                            <div class="grid-col">
                                <div class="basic-form">
                                    <form>
                                        <label>Patient's Name</label>
                                        <div class="row">
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control" placeholder="First name">
                                            </div>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control" placeholder="Last name">
                                            </div>
                                            <div class="col-sm-2 mt-2 mt-sm-0">
                                                <input type="text" class="form-control" placeholder="M. I.">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row grid">
                <div class="col-xl-5 col-xxl-12">
                    <div class="card">
                        
                        <div class="row form-material">

                            <h5 class="vital-signs-text">Vital Signs</h5>
                            <div class="vital-signs-id">
                                <input type="text" name="vital-signs-id" class="form-control" placeholder="">
                            </div>

                            <h5 class="card-title">Date</h5>
                            <div class="vital-signs-id">
                                <input type="text" name="vital-signs-id" class="form-control" placeholder="">
                            </div>

                        </div>    


                        <div class="row form-material">

                            <h5 class="vital-signs-text">BP</h5>
                            <div class="vital-signs-id">
                                <input type="text" name="vital-signs-id" class="form-control" placeholder="">
                            </div>

                            <h5 class="card-title">HR</h5>
                            <div class="vital-signs-id">
                                <input type="text" name="vital-signs-id" class="form-control" placeholder="">
                            </div>

                        </div>  



                    </div>
                </div>


                <div class="col-xl-7 col-xxl-12">
                    <div class="card">
                         <div class="card-header">
                            <h4 class="card-title">Patient Diagnosis and Procedure</h4>
                        </div>


                        <div class="card-body">
                            <div class="basic-form">
                                <th class="vital-signs">
                                    <td>DiagnosisID</td>
                                    <td>DiagnosisDate</td>
                                    <td>BP</td>
                                    <td>HR</td>
                                    <td>PR</td>
                                    <td>RR</td>
                                    <td>Temp</td>
                                    <td>O2Sat</td>
                                    <td>Weight</td>
                                    <td>Heignt</td>
                                    <td>BMI</td>
                                    <td>Painscale</td>
                                    <td>Pupil Size</td>
                                </th>
                                


                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
