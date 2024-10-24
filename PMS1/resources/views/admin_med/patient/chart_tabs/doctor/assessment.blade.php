<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<div class="card-header">
    <h4 class="input-header" id="assessmentInputHeader">Input Mode</h4>
</div>
<!-- Card body for vital signs input-->

<div class="card-body">

    <form action="{{ isset($ep_assessment) ? route('ep_assessment.ep_assessment_update', $ep_assessment->ep_assessment_id) : '/emergency/ep-assessment/store' }}" id="assessmentForm" method="POST" onsubmit="">
        @csrf
        @if(isset($ep_assessment))
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
                <input type="date" name="ep_assessment_date" id="assessment-date-input" class="form-control date-input datetime-input">
            </div>
            <div class="col-md-6">
                <input type="time" name="ep_assessment_time" id="assessment-time-input" class="form-control time-input datetime-input">
            </div>
        </div>
        <!-- End of Id and Date Section Input -->

    </div>



    <div class="assessment-remarks">

        <div class="col-md-4">
            <h5 class="assessment-text">Assessment</h5>
        </div>

        <div class="row">
            <div class="col-md-12">
                <textarea name="ep_assessment_assessments" id="assessmentInput" class="assessment-input" data-toggle="tooltip" placeholder="" rows="4"></textarea>
            </div>
        </div>

    </div>

    <input type="hidden" name="emergency_patient_id" value="{{ $emergency_patient->emergency_patient_id }}">

    <!-- Footer Buttons -->
    <div class="card-footer d-flex justify-content-end">

        <!-- Back to Input Mode Button (Initially Hidden) -->
        <button type="button" class="btn btn-secondary" id="backToInputButtonAssessment" style="display: none;" onclick="showAssessmentInputMode();">Back to Input Mode</button>

        <button type="button" id="assessmentCancelBtn" class="btn btn-secondary btn sweet-confirm me-3" data-dismiss="modal">Clear</button>

        <button type="submit" class="btn btn-primary ms-3" id="editSubmitAssessment" style="display: none;" onclick="showAssessmentSaveAlert(); return false;">
            Save Changes
        </button>

        <button type="submit" id="assessmentSaveBtn" class="btn btn-primary ms-3">Save</button>


    </div>
</div>
</form>

<!-- End of card body for vital signs input-->
