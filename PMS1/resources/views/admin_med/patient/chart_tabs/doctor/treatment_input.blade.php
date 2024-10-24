<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ asset('js/data_validation.js') }}"></script>

<div class="card-header">
    <h4 class="input-header" id="assessmentInputHeader">Input Mode</h4>
</div>
<!-- Card body for vital signs input-->

<div class="card-body">

    <form action="" id="treatmentForm" method="POST" onsubmit="">
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
                <input type="date" name="ep_assessment_date" id="treatment-date-input" class="form-control date-input datetime-input">
            </div>
            <div class="col-md-6">
                <input type="time" name="ep_assessment_time" id="treatment-time-input" class="form-control time-input datetime-input">
            </div>
        </div>
        <!-- End of Id and Date Section Input -->

    </div>

    <div class="treatment-remarks">
        <div class="row id-and-date-text">
            <div class="col-md-6">
                <h5 class="id-and-date-label">Medication Name</h5>
            </div>
            <div class="col-md-3">
                <h5 class="id-and-date-label">Dosage</h5>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <input type="text" id="medicationInput" class="form-control weight-input" name="medicationName" required></input>
            </div>
            <div class="col-md-6">
                <input type="text" id="dosageInput" class="form-control weight-input" name="dosageName" required></input>
            </div>
        </div>

    </div>

    <div class="treatment-remarks">
        <div class="row id-and-date-text">
            <div class="col-md-6">
                <h5 class="id-and-date-label">Frequency</h5>
            </div>
            <div class="col-md-4">
                <h5 class="id-and-date-label">Duration</h5>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <input type="text" id="frequencyInput" class="form-control weight-input" name="frequencyName" required></input>
            </div>
            <div class="col-md-6">
                <input type="text" id="durationInput" class="form-control weight-input" name="durationName" required></input>
            </div>
        </div>

    </div>

    <div class="form-group">
        <label for="additionalNotes">Additional Notes</label>
        <textarea class="form-control" id="additionalNotes" name="additionalNotes"></textarea>
    </div>

    

   


    <input type="hidden" name="emergency_patient_id" value="{{ $emergency_patient->emergency_patient_id }}">

    <!-- Footer Buttons -->
    <div class="card-footer d-flex justify-content-end">

        <!-- Back to Input Mode Button (Initially Hidden) -->
        <button type="button" class="btn btn-secondary" id="backToInputButtonTreatment" style="display: none;" onclick="showTreatmentInputMode();">Back to Input Mode</button>
        <!-- <button id="downloadFileBtn" class="btn btn-primary ms-3" style="display: none;" onclick="downloadFile()">Download</button> -->
        <button type="button" id="treatmentCancelBtn" class="btn btn-secondary btn sweet-confirm me-3" data-dismiss="modal">Print</button>

        <button type="submit" class="btn btn-primary ms-3" id="editSubmitTreatment" style="display: none;" onclick="showTreatmentSaveAlert(); return false;">
            Save Changes
        </button>

        <button type="submit" id="treatmentSaveBtn" class="btn btn-primary ms-3">Save</button>


    </div>
</div>
</form>

<!-- End of card body for vital signs input-->
