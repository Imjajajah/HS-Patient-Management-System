<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<div class="card-header">
    <h4 class="input-header" id="inputHeader">Input Mode</h4>
</div>
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


    <form action="{{ isset($vital_sign) ? route('vital_signs.vital_signs_update', $vital_sign->vital_signs_id) : '/emergency/vital-signs/store' }}" id="vitalSignsForm" class="step-form-horizontal" method="POST" onsubmit="">
    @csrf
    @if(isset($vital_sign))
        @csrf
        @method('PATCH') <!-- This will be added only if editing -->
    @endif
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
                <h5 class="bp-text">BP<span class="form-required text-danger">*</span></h5>

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
                <input type="text" name="B_P" id="bpInput" class="form-control bp-input" data-toggle="tooltip" placeholder="Blood Pressure (e.g. 120/80)" required>
                <small id="bpMessage" class="text-danger" style="display: none;"></small>
            </div>
            <div class="col-md-4">
                <input type="text" name="heart_rate" id="hrInput" class="form-control hr-input" data-toggle="tooltip" placeholder="Heart Rate (bpm)">
                <small id="hrMessage" class="text-danger" style="display: none;"></small>
            </div>
            <div class="col-md-4">
                <input type="text" name="pulse_rate" id="prInput" class="form-control pr-input" data-toggle="tooltip" placeholder="Pulse Rate (bpm)" required>
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
                <input type="text" name="temperature" id="tempInput" class="form-control temp-input" data-toggle="tooltip" placeholder="Temperature °C" required>
                <small id="tempMessage" class="text-danger" style="display: none;"></small>
            </div>
            <div class="col-md-4">
                <input type="text" name="oxygen_saturation" id="o2Input" class="form-control o2-input" data-toggle="tooltip" placeholder="O2Sat">
                <small id="o2Message" class="text-danger" style="display: none;"></small>
            </div>
            <div class="col-md-4">
                <input type="text" name="pain_scale" id="painScaleInput" class="form-control pain-scale-input" data-toggle="tooltip" placeholder="Pain Scale">
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
                <input type="text" name="respiratory_rate" id="respRateInput" class="form-control resp-rate-input" data-toggle="tooltip" placeholder="Resp Rate" required>
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
                <input type="text" name="weight" id="weightInput" class="form-control weight-input" data-toggle="tooltip" placeholder="Weight (kg)">
                <small id="weightMessage" class="text-danger" style="display: none;"></small>
            </div>
            <div class="col-md-4">
                <input type="text" name="height" id="heightInput" class="form-control height-input" data-toggle="tooltip" placeholder="Height (cm)">
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
        <!-- Back to Input Mode Button (Initially Hidden) -->
        <button type="button" class="btn btn-secondary" id="backToInputButton" style="display: none;" onclick="showInputMode();">Back to Input Mode</button>

        <button type="button" id="cancel-btn" class="btn btn-secondary btn sweet-confirm me-3" data-dismiss="modal">Clear</button>


        <button type="submit" class="btn btn-primary ms-3" id="editSubmit" style="display: none;" onclick="showSaveAlert(); return false;">
            Save Changes
        </button>

        <button type="submit" id="save-btn" class="btn btn-primary ms-3">Save</button>


    </div>
</div>
</form>
<!-- End of card body for vital signs input-->