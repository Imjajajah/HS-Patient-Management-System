<link rel="stylesheet" href="{{ asset('/css/vitalsigns.css') }}">

<div>
    <div>

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

        <div class="row grid">
            <div class="col-xl-5 col-xxl-12">
                <div class="card">

                    <!-- Card body for vital signs input-->
                    <div class="card-body">

                        <!-- Id and Date Section -->
                        <div class="id-and-date">

                            <!-- Id and Date Section Text -->
                            <div class="row id-and-date-text">
                                <div class="col-md-6">
                                    <h5 class="id-and-date-label">ID</h5>
                                </div>
                                <div class="col-md-6">
                                    <h5 class="id-and-date-label">Date</h5>
                                </div>
                            </div>
                            <!-- End of Id and Date Section Text -->
                                
                            <!-- Id and Date Section Input -->
                            <div class="row id-and-date-input">
                                <div class="col-md-6">
                                    <input type="text" name="vital-signs-id" class="form-control id-input" placeholder="">
                                </div>
                                <div class="col-md-6">
                                    <input type="date" name="vital-signs-date" class="form-control date-input" placeholder="">
                                </div>
                            </div>
                            <!-- End of Id and Date Section Input -->
                        </div>

                        <!-- BP HR and PR -->
                        <div class="bp-hr-pr">
                                
                            <!-- BP HR and PR Section Text -->
                            <div class="row bp-hr-pr-text">
                                <div class="col-md-4">
                                    <h5 class="bp-text">BP</h5>
                                </div>
                                <div class="col-md-4">
                                    <h5 class="hr-text">HR</h5>
                                </div>
                                <div class="col-md-4">
                                    <h5 class="pr-text">PR</h5>
                                </div>
                            </div>
                            <!-- End of BP HR and PR Section Text -->
                                
                            <!-- BP HR and PR Section Input -->
                            <div class="row vital-signs-input">
                                <div class="col-md-4">
                                    <input type="text" name="vital-signs-bp" class="form-control bp-input" placeholder="">
                                </div>
                                <div class="col-md-4">
                                    <input type="text" name="vital-signs-hr" class="form-control hr-input" placeholder="">
                                </div>
                                <div class="col-md-4">
                                    <input type="text" name="vital-signs-pr" class="form-control pr-input" placeholder="">
                                </div>
                            </div>
                            <!-- End of BP HR and PR Section Input -->

                        </div>
                        <!-- End of BP HR and PR -->


                        <!-- Temp, O2Sat, Pain Scale -->
                        <div class="bp-hr-pr">
                                
                            <!-- Temp, O2Sat, Pain Scale Section Text -->
                            <div class="row temp-o2,ps-text">
                                <div class="col-md-4">
                                    <h5 class="temp-text">Temp</h5>
                                </div>
                                <div class="col-md-4">
                                    <h5 class="o2-text">O2Sat</h5>
                                </div>
                                <div class="col-md-4">
                                    <h5 class="pain-scale-text">Pain Scale</h5>
                                </div>
                            </div>
                            <!-- End of Temp, O2Sat, Pain Scale Section Text -->
                                
                            <!-- Temp, O2Sat, Pain Scale Section Input -->
                            <div class="row temp-o2,ps-input">
                                <div class="col-md-4">
                                    <input type="text" name="vital-signs-temp" class="form-control temp-input" placeholder="">
                                </div>
                                <div class="col-md-4">
                                    <input type="text" name="vital-signs-o2" class="form-control o2-input" placeholder="">
                                </div>
                                <div class="col-md-4">
                                    <input type="text" name="vital-signs-pain-scale" class="form-control pain-scale-input" placeholder="">
                                </div>
                            </div>
                            <!-- End of Temp, O2Sat, Pain Scale Section Input -->

                        </div>
                        <!-- End of Temp, O2Sat, Pain Scale -->

                        <!-- Resp Rate, Resp Pattern -->
                        <div class="bp-hr-pr">
                                
                            <!-- Resp Rate, Resp Pattern Text -->
                            <div class="row resprate-resp-pattern-text">
                                <div class="col-md-4">
                                    <h5 class="resp-rate-text">Resp Rate</h5>
                                </div>
                                <div class="col-md-8">
                                    <h5 class="resp-pattern-text">Resp Pattern</h5>
                                </div>
                            </div>
                            <!-- End of Resp Rate, Resp Pattern Text -->
                                
                            <!-- Resp Rate, Resp Pattern Input -->
                            <div class="row resprate-resp-pattern-input">
                                <div class="col-md-4">
                                    <input type="text" name="vital-signs-resp-rate" class="form-control resp-rate-input" placeholder="">
                                </div>
                                <div class="col-md-8">
                                    <input list="resp-patterns" name="vital-signs-resp-pattern" class="form-control resp-pattern-input" placeholder="">
                                    <datalist id="resp-patterns">
                                        <option value="Normal">
                                        <option value="Tachypnea">
                                        <option value="Bradypnea">
                                        <option value="Apnea">
                                        <option value="Hyperventilation">
                                    </datalist>
                                </div>
                            </div>
                            <!-- Resp Rate, Rest Pattern Input -->

                        </div>
                        <!-- End of Resp Rate, Rest Pattern --> 

                        <!-- weight, height,bmi -->
                        <div class="bp-hr-pr">
                                
                            <!-- weight, height,bmi Text -->
                            <div class="row weight-height-bmi-text">
                                <div class="col-md-4">
                                    <h5 class="weight-text">Weight</h5>
                                </div>
                                <div class="col-md-4">
                                    <h5 class="height-text">Height</h5>
                                </div>
                                <div class="col-md-4">
                                    <h5 class="bmi-text">BMI</h5>
                                </div>
                            </div>
                            <!-- End of weight, height,bmi Text -->
                                
                            <!-- weight, height,bmi Input -->
                            <div class="row weight-height-bmi-input">
                                <div class="col-md-4">
                                    <input type="text" name="vital-signs-weight" class="form-control weight-input" placeholder="">
                                </div>
                                <div class="col-md-4">
                                    <input type="text" name="vital-signs-height" class="form-control height-input" placeholder="">
                                </div>
                                <div class="col-md-4">
                                    <input type="text" name="vital-signs-bmi" class="form-control bmi-input" placeholder="">
                                </div>
                            </div>
                            <!-- weight, height,bmi Input -->

                        </div>
                        <!-- End of weight, height,bmi --> 


                        <!-- Remarks Pattern -->
                        <div class="vital-signs-remarks">
                                
                            <!-- Remarks Text -->
                            <div>
                                <div class="col-md-4">
                                    <h5 class="remarks-text">Remarks</h5>
                                </div>
                                    
                            </div>
                            <!-- End of Remarks Text -->
                                
                            <!-- Remarks Input -->
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="text" name="vital-signs-remarks" class="remarks-input" placeholder="">
                                </div>
                                    
                            </div>
                            <!-- End of Remarks Input -->

                        </div>
                        <!--End of Remarks Pattern -->


                        <div class="card-footer d-flex justify-content-end">
                            <button type="button" class="btn btn-secondary btn sweet-confirm me-3" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary ms-3">Save</button>
                        </div>
                </div>
                <!-- End of card body for vital signs input-->


                </div>
            </div>


            <div class="col-xl-7 col-xxl-12">
                <div class="card">

                    <div class="card-header">
                        <h4 class="card-title">Patient's Vital Signs</h4>
                    </div>


                    <div class="card-body">
                        <div class="basic-form">
                            <table class="table-left">
                                <thead class="vital-signs-table-header">
                                    <tr class="vital-signs-header">

                                        <!-- Lagyan ng diagnosis ID syempre pero di ididisplay -->
                                        <!-- <th>DiagnosisID</th> -->


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
                                    <tr class="vital-signs-table-body">
                                            
                                        <td>2024-10-05</td>
                                        <td>120/80</td>
                                        <td>75</td>
                                        <td>60</td>
                                        <td>18</td>
                                        <td>36.5</td>
                                        <td>98%</td>
                                    </tr>
                                    <tr class="vital-signs-table-body">
                                           
                                        <td>2024-10-05</td>
                                        <td>120/80</td>
                                        <td>75</td>
                                        <td>60</td>
                                        <td>18</td>
                                        <td>36.5</td>
                                        <td>98%</td>
                                    </tr>
                                    <tr>
                                          
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

    