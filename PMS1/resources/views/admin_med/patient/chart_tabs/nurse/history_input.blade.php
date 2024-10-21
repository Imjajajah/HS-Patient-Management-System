
<div class="card-header">
    <h4 class="input-header" id="inputHeader">Input Mode</h4>
</div>
<!-- Card body for vital signs input-->

<div class="card-body">


    <form action="/emergency/ep-medical-history/store" method="POST" onsubmit="">
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
                <input type="date" name="ep_medical_history_date" id="datetime-input" class="form-control date-input">
            </div>
            <div class="col-md-6">
                <input type="time" name="ep_medical_history_time" id="datetime-input-time" class="form-control date-input">
            </div>
        </div>
        <!-- End of Id and Date Section Input -->

    </div>



    <div class="diagnosis-remarks">
        <div class="col-md-4">
            <h5 class="diagnosis-text">Diagnosis</h5>
        </div>
        <div class="row">
            <div class="col-md-12">
                <textarea name="ep_medical_history_diagnosis" id="diagnosisInput" class="diagnosis-input" data-toggle="tooltip" placeholder="" rows="4"></textarea>
            </div>
        </div>
    </div>

    <div class="treatment-remarks">
        <div class="col-md-4">
            <h5 class="treatment-text">Treatment</h5>
        </div>
        <div class="row">
            <div class="col-md-12">
                <textarea name="ep_medical_history_treatment" id="treatmentInput" class="treatment-input" data-toggle="tooltip" placeholder="" rows="4"></textarea>
            </div>
        </div>
    </div>

    <div class="surgeries-remarks">
        <div class="col-md-4">
            <h5 class="surgeries-text">Surgeries</h5>
        </div>
        <div class="row">
            <div class="col-md-12">
                <textarea name="ep_medical_history_surgery" id="surgeriesInput" class="surgeries-input" data-toggle="tooltip" placeholder="" rows="4"></textarea>
            </div>
        </div>
    </div>
    <div class="medication-remarks">
        <div class="col-md-4">
            <h5 class="medication-text">Medications</h5>
        </div>
        <div class="row">
            <div class="col-md-12">
                <textarea name="ep_medical_history_medications" id="medicationInput" class="medication-input" data-toggle="tooltip" placeholder="" rows="4"></textarea>
            </div>
        </div>
    </div>

    <input type="hidden" name="emergency_patient_id" value="{{ $emergency_patient->emergency_patient_id }}">


    <!-- Footer Buttons -->
    <div class="card-footer d-flex justify-content-end">
        {{-- Show the register button only if the user has an admin or medical staff role --}}
        @if (auth()->check() && in_array(auth()->user()->authorization->role_name, ['Admin', 'Medical staff']))
        <!-- Back to Input Mode Button (Initially Hidden) -->
        <button type="button" class="btn btn-secondary" id="backToInputButton" style="display: none;" onclick="showInputMode();">Back to Input Mode</button>

        <button type="button" id="cancel-btn" class="btn btn-secondary btn sweet-confirm me-3" data-dismiss="modal">Clear</button>


        <button type="submit" class="btn btn-primary ms-3" id="editSubmit" style="display: none;" onclick="showSaveAlert(); return false;">
            Save Changes
        </button>

        <button type="submit" id="save-btn" class="btn btn-primary ms-3">Save</button>

        @endif
    </div>
</div>
</form>

<!-- End of card body for vital signs input-->
