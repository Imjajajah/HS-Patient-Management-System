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
                <div>
                    <div class="row grid">

                        <div class="col-lg-6">
                            <div class="grid-col">
                                <div class="asdbasic-form">
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

                        <div class="card-body">

                            <!-- Id and Date Section -->
                            <div class="id-and-date">
                                <div class="row vital-signs-text">
                                    <div class="col-md-2">
                                        <h5 class="vitalid-signs-text ml-n3">ID</h5>
                                    </div>
                                        
                                    <div class="col-md-10">
                                        <h5 class="vitalid-signs-text ml-n1">Date</h5>
                                    </div>

                                </div>
                                
                                <div class="row vital-signs-input mt-n3">
                                    <div class="col-md-6">
                                        <input type="text" name="vital-signs-id" class="vitalid-form-control" placeholder="">
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <input type="date" name="vital-signs-date" class="date-form-control" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <!-- End of Id and Date Section -->

                            <!-- BP HR and PR -->
                            <div class="bp-hr-pr">

                                <div class="row vital-signs-text">
                                    
                                    <div class="col-md-3">
                                        <h5 class="vitalid-signs-text mt-3">BP</h5>
                                    </div>
                                        
                                    <div class="col-md-3">
                                        <h5 class="vitalid-signs-text mt-3">HR</h5>
                                    </div>

                                    <div class="col-md-3">
                                        <h5 class="vitalid-signs-text mt-3">PR</h5>
                                    </div>

                                </div>
                                
                                <div class="row vital-signs-input mt-n3">
                                    <div class="col-md-3">
                                        <input type="text" name="vital-signs-bp" class="bp-form-control" placeholder="">
                                    </div>
                                    
                                    <div class="col-md-3">
                                        <input type="text" name="vital-signs-hr" class="hr-form-control" placeholder="">
                                    </div>

                                    <div class="col-md-3">
                                        <input type="text" name="vital-signs-pr" class="pr-form-control" placeholder="">
                                    </div>


                                </div>
                            </div>
                            <!-- End of BP HR and PR -->




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
                                <table class="table-left">
                                    <thead>
                                        <tr>
                                            <th>DiagnosisID</th>
                                            <th>DiagnosisDate</th>
                                            <th>BP</th>
                                            <th>HR</th>
                                            <th>PR</th>
                                            <th>RR</th>
                                            <th>Temp</th>
                                            <th>O2Sat</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>12345</td>
                                            <td>2024-10-05</td>
                                            <td>120/80</td>
                                            <td>75</td>
                                            <td>60</td>
                                            <td>18</td>
                                            <td>36.5</td>
                                            <td>98%</td>
                                        </tr>
                                    </tbody>



                                </table>
                                
                                


                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
