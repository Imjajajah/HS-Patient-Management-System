<link rel="stylesheet" href="{{ asset('/css/vitalsigns.css') }}">
<script src="{{ asset('js/patient_charts.js') }}"></script>

<!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> -->


<div>
    <div>

        <div class="row justify-content-center my-4">
            <div class="col-lg-12">
                <div class="row align-items-center ">

                </div>
            </div>
        </div>

        <div class="row grid">
            <div class="col-xl-4 col-xxl-12">
                <div class="card">

                    <!-- Card body for vital signs input-->
                    <div class="card-body">


                        <div class="tooltip-container" style="position: relative; display: inline-block;">
                            <label class="normal-ranges-label" id="normalRanges" for="tooltip">
                                <strong>Normal Ranges</strong>
                            </label>
                            <div class="tooltip" id="tooltip" style="display: none; position: absolute; background-color: white; border: 1px solid #ccc; padding: 10px; z-index: 1;">
                                <ul>
                                    <li>BP: Normal BP: 90/60 to 120/80 mmHg</li>
                                    <li>HR: Normal HR: 60 to 100 bpm</li>
                                    <li>PR: Normal PR: 60 to 100 bpm</li>
                                    <li>Temp: Normal Temp: 36.1 to 37.2 °C</li>
                                    <li>O2: Normal O2Sat: 95% to 100%</li>
                                    <li>Pain Scale: Pain Scale: 0 (no pain) to 10 (worst pain)</li>
                                    <li>Resp Rate: Normal Resp Rate: 12 to 20 breaths/min</li>
                                    <li>BMI: Normal BMI: 18.5 to 24.9</li>
                                </ul>
                            </div>
                        </div>


                        <form action="/emergency/vital-signs/store" class="step-form-horizontal" method="POST" onsubmit="">
                        @csrf
                        <!-- Id and Date Section -->
                        <div class="id-and-date">

                            <!-- Id and Date Section Text -->
                            <div class="row id-and-date-text">

                                <div class="col-md-6">
                                    <h5 class="id-and-date-label">Date</h5>
                                </div>
                                <div class="col-md-6">
                                    <h5 class="id-and-date-label">Time</h5>
                                </div>
                            </div>
                            <!-- End of Id and Date Section Text -->

                            <!-- Id and Date Section Input -->
                            <div class="row id-and-date-input">

                                <div class="col-md-6">
                                    <input type="date" name="diagnosis_date" id="datetime-input" class="form-control date-input">
                                </div>
                                <div class="col-md-6">
                                    <input type="time" name="diagnosis_time" id="datetime-input-time" class="form-control date-input">
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
                                    <input type="text" name="B_P" id="bpInput" class="form-control bp-input" data-toggle="tooltip" placeholder="Blood Pressure (e.g. 120/80)">
                                    <small id="bpMessage" class="text-danger" style="display: none;"></small>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" name="heart_rate" id="hrInput" class="form-control hr-input" data-toggle="tooltip" placeholder="Heart Rate (bpm)">
                                    <small id="hrMessage" class="text-danger" style="display: none;"></small>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" name="pulse_rate" id="prInput" class="form-control pr-input" data-toggle="tooltip" placeholder="Pulse Rate (bpm)">
                                    <small id="prMessage" class="text-danger" style="display: none;"></small>
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
                                    <input type="text" name="temperature" id="tempInput" class="form-control temp-input" data-toggle="tooltip" placeholder="">
                                    <small id="tempMessage" class="text-danger" style="display: none;"></small>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" name="oxygen_saturation" id="o2Input" class="form-control o2-input" data-toggle="tooltip" placeholder="">
                                    <small id="o2Message" class="text-danger" style="display: none;"></small>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" name="pain_scale" id="painScaleInput" class="form-control pain-scale-input" data-toggle="tooltip" placeholder="">
                                    <small id="painScaleMessage" class="text-danger" style="display: none;"></small>
                                </div>
                            </div>
                            <!-- End of Temp, O2Sat, Pain Scale Section Input -->

                        </div>
                        <!-- End of Temp, O2Sat, Pain Scale -->

                        <!-- Resp Rate, Resp Pattern -->
                        <div class="resprate-resppatt">
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
                                    <input type="text" name="respiratory_rate" id="respRateInput" class="form-control resp-rate-input" data-toggle="tooltip" placeholder="">
                                    <small id="respRateMessage" class="text-danger" style="display: none;"></small>
                                </div>
                                <div class="col-md-8">
                                    <input list="resp-patterns" name="respiratory_pattern" id="respPatternInput" class="form-control resp-pattern-input" data-toggle="tooltip" placeholder="">
                                    <datalist id="resp-patterns">
                                        <option value="Normal">
                                        <option value="Tachypnea">
                                        <option value="Bradypnea">
                                        <option value="Apnea">
                                        <option value="Hyperventilation">
                                    </datalist>

                                </div>
                            </div>
                            <!-- End of Resp Rate, Resp Pattern Input -->
                        </div>
                        <!-- End of Resp Rate, Resp Pattern -->

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
                                    <input type="text" name="weight" id="weightInput" class="form-control weight-input" data-toggle="tooltip" placeholder="">
                                    <small id="weightMessage" class="text-danger" style="display: none;"></small>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" name="height" id="heightInput" class="form-control height-input" data-toggle="tooltip" placeholder="height (cm)">
                                    <small id="heightMessage" class="text-danger" style="display: none;"></small>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" name="bmi" id="bmiInput" class="form-control bmi-input" data-toggle="tooltip" placeholder="">
                                    <small id="bmiMessage" class="text-danger" style="display: none;"></small>
                                </div>
                            </div>
                            <!-- End of weight, height,bmi Input -->
                        </div>
                        <!-- End of weight, height,bmi -->

                        <!-- Remarks Pattern -->
                        <div class="vital-signs-remarks">
                            <!-- Remarks Text -->
                            <div class="col-md-4">
                                <h5 class="remarks-text">Remarks</h5>
                            </div>
                            <!-- End of Remarks Text -->
                            <!-- Remarks Input -->
                            <div class="row">
                                <div class="col-md-12">
                                    <textarea name="vitals_note" id="remarksInput" class="remarks-input" data-toggle="tooltip" placeholder="" rows="4"></textarea>
                                </div>
                            </div>
                            <!-- End of Remarks Input -->
                        </div>
                        <!--End of Remarks Pattern -->
                        <input type="hidden" name="emergency_patient_id" value="{{ $emergency_patient->emergency_patient_id }}">

                        <!-- Footer Buttons -->
                        <div class="card-footer d-flex justify-content-end">
                            <button type="button" class="btn btn-secondary btn sweet-confirm me-3" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary ms-3">Save</button>
                        </div>
                    </div>
                    </form>
                    <!-- End of card body for vital signs input-->


                </div>
            </div>

            <!-- Table in the left side -->
            <div class="col-xl-8 col-xxl-12">
                <div class="card">

                    <div class="card-header">
                        <h4 class="card-title">Patient's Vital Signs</h4>
                    </div>

                    <div class="card-body">
                        <div class="basic-form">

                            <table class="table-left" id="vitalSignsTable" data-sort-dir="asc">
                                <thead class="vital-signs-table-header">
                                    <tr class="vital-signs-header">
                                        <!-- Clickable headers for sorting -->
                                        <th onclick="sortTable(0)">DiagnosisDate &#x25B2;&#x25BC;</th>
                                        <th>BP</th>
                                        <th>HR</th>
                                        <th>Temp</th>
                                        <th>O2Sat</th>
                                        <th>PS</th>
                                        <th>RR</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($emergency_patient->vital_signs as $vitals)
                                        <tr class="vital-signs-table-body">
                                            <td>{{ \Carbon\Carbon::parse($vitals->diagnosis_date)->format('m/d/Y') }}, {{ $vitals->diagnosis_time }}</td>
                                            <td>{{ $vitals->B_P ?? 'N/A' }}</td>
                                            <td>{{ $vitals->heart_rate ?? 'N/A' }}</td>
                                            <td>{{ $vitals->temperature ?? 'N/A' }}</td>
                                            <td>{{ $vitals->oxygen_saturation ?? 'N/A' }}</td>
                                            <td>{{ isset($vitals->pain_scale) ? $vitals->pain_scale . '/10' : 'N/A' }}</td>
                                            <td>{{ $vitals->respiratory_rate ?? 'N/A' }}</td>
                                            <td>
                                                @php
                                                    $latestVitalSign = $emergency_patient->vital_signs->last(); // or first()
                                                @endphp
                                                <a href="javascript:void()" class="btn btn-square btn-primary mr-3"
                                                    data-toggle="tooltip" type="button" data-placement="top" title="View"
                                                    onclick="window.location='{{ route('patients.vital_signs_show', ['vital_signs_id' => $latestVitalSign->vital_signs_id]) }}'">
                                                    <i class="fa fa-eye color-muted"></i>
                                                </a>
                                                <a href="javascript:void()" class="btn btn-square btn-secondary mr-3"
                                                    data-toggle="tooltip" type="button" data-placement="top" title="Edit"
                                                    onclick="window.location='{{ route('patients.vital_signs_edit', ['vital_signs_id' => $latestVitalSign->vital_signs_id]) }}'">
                                                    <i class="fa fa-pencil color-muted"></i>
                                                </a>
                                                <a href="javascript:void()" class="btn btn-square btn-danger"
                                                    data-toggle="tooltip" type="button" data-placement="top" title="Close"><i
                                                    class="fa fa-close color-danger"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    {{-- <tr class="vital-signs-table-body">
                                        <td>10/8/2023, 4:30:57 PM</td>
                                        <td>110/30</td>
                                        <td>65</td>
                                        <td>36.5</td>
                                        <td>98%</td>
                                        <td>2/10</td>
                                        <td>18</td>
                                        <td>
                                            <a href="javascript:void()" class="btn btn-square btn-primary mr-3"
                                                data-toggle="tooltip" type="button" data-placement="top" title="View"
                                                onclick="window.location='{{ route('patients.emergency_patient_show', ['emergency_patient_id' => $emergency_patient->emergency_patient_id]) }}'">
                                                <i class="fa fa-eye color-muted"></i>
                                            </a>
                                            <a href="javascript:void()" class="btn btn-square btn-secondary mr-3"
                                                data-toggle="tooltip" type="button" data-placement="top" title="Edit"
                                                onclick="window.location='{{ route('patients.emergency_patient_edit', ['emergency_patient_id' => $emergency_patient->emergency_patient_id]) }}'">
                                                <i class="fa fa-pencil color-muted"></i>
                                            </a>
                                            <a href="javascript:void()" class="btn btn-square btn-danger"
                                                data-toggle="tooltip" type="button" data-placement="top" title="Close"><i
                                                class="fa fa-close color-danger"></i>
                                            </a>
                                        </td>
                                    </tr> --}}

                                    {{-- <tr class="vital-signs-table-body">
                                        <td>10/8/2024, 4:30:57 PM</td>
                                        <td>120/80</td>
                                        <td>75</td>
                                        <td>36.5</td>
                                        <td>98%</td>
                                        <td>2/10</td>
                                        <td>18</td>
                                        <td>
                                            <a href="javascript:void()" class="btn btn-square btn-primary mr-3"
                                                data-toggle="tooltip" type="button" data-placement="top" title="View"
                                                onclick="window.location='{{ route('patients.emergency_patient_show', ['emergency_patient_id' => $emergency_patient->emergency_patient_id]) }}'">
                                                <i class="fa fa-eye color-muted"></i>
                                            </a>
                                            <a href="javascript:void()" class="btn btn-square btn-secondary mr-3"
                                                data-toggle="tooltip" type="button" data-placement="top" title="Edit"
                                                onclick="window.location='{{ route('patients.emergency_patient_edit', ['emergency_patient_id' => $emergency_patient->emergency_patient_id]) }}'">
                                                <i class="fa fa-pencil color-muted"></i>
                                            </a>
                                            <a href="javascript:void()" class="btn btn-square btn-danger"
                                                data-toggle="tooltip" type="button" data-placement="top" title="Close"><i
                                                    class="fa fa-close color-danger"></i>
                                            </a>
                                        </td>
                                    </tr> --}}
                                    <!-- Additional rows here -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- End of Table card body -->

                </div>
            </div>
            <!-- End of Table in the left side -->

        </div>

    </div>
</div>

