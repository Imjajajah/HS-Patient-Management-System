<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ asset('js/data_validation.js') }}"></script>

<div class="card-header">
    <h4 class="input-header" id="assessmentInputHeader">Input Mode</h4>
</div>
<!-- Card body for vital signs input-->

<div class="card-body">

    <form action="{{ isset($ep_assessment) ? route('ep_assessment.ep_assessment_update', $ep_assessment->ep_assessment_id) : '/emergency/ep-assessment/store' }}" id="assessmentForm" method="POST" onsubmit="" enctype="multipart/form-data">
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
                <textarea name="ep_assessment_assessments" id="assessmentInput" class="assessment-input" data-toggle="tooltip" placeholder="" rows="4" required></textarea>
            </div>
        </div>

    </div>

    <!-- New Diagnostic Test Ordering Section -->
    <div class="diagnostic-test-order mt-4">
        <div class="col-md-8">
            <h5 class="assessment-text">Order Diagnostic Test</h5>
        </div>

        <div class="row">
            <div class="col-md-6">
                <label for="diagnostic-test-select">Choose Test</label>
                <select id="diagnostic-test-select" name="ep_assessment_test" class="form-control">
                    <option value="" disabled selected>Select a test</option>
                    <option value="X-ray">X-ray</option>
                    <option value="Blood Test">Blood Test</option>
                    <option value="MRI">MRI</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="test-instructions">Test Instructions</label>
                <input type="text" id="test-instructions" name="ep_assessment_test_instruction" class="form-control" placeholder="e.g., fasting required">
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <label for="test-priority">Priority</label>
<<<<<<< HEAD
                <select id="test-priority" name="test_priority" class="form-control">
                    <option value="" disabled selected>Select priority</option> <!-- Default empty option -->
                    <option value="routine">Routine</option>
                    <option value="urgent">Urgent</option>
                </select>
            </div>
=======
                <select id="test-priority" name="ep_assessment_priority" class="form-control">
                    <option value="" disabled selected>Select priority</option>
                    <option value="Routine">Routine</option>
                    <option value="Urgent">Urgent</option>
                </select>
            </div>

>>>>>>> 39d7f057a3908de07e57a49de5b9f4411b67b571
            <div class="col-md-6">
                <label for="lab-request-file">Attach File (Optional)</label>
                <input type="file" id="lab-request-file" name="order_test_file" class="form-control">
                <!-- Display current file (if any) -->
                <small id="current-file" class="form-text text-muted"></small>
            </div>

        </div>

        <div class="col-md-6">
            <h5 class="id-and-date-label">Email: </h5>
        </div>
        <div class="col-md-12">

            <input type="text" id="labEmail" name="ep_test_email" class="form-control">
        </div>

    </div>

    <input type="hidden" name="" id="epAssessmentId">


    <input type="hidden" name="emergency_patient_id" id="assessmentId" value="{{ $emergency_patient->emergency_patient_id }}">

    <!-- Footer Buttons -->
    <div class="card-footer d-flex justify-content-end">

        <!-- Back to Input Mode Button (Initially Hidden) -->
        <button type="button" class="btn btn-secondary" id="backToInputButtonAssessment" style="display: none;" onclick="showAssessmentInputMode();">Back to Input Mode</button>
<<<<<<< HEAD
        <!-- <button id="downloadFileBtn" class="btn btn-primary ms-3" style="display: none;" onclick="downloadFile()">Download</button> -->
=======
        {{-- <button id="downloadFileBtn" class="btn btn-primary ms-3" style="display: none;" onclick="downloadFile()">Download</button> --}}
        <a id="downloadFileBtn" class="btn btn-primary ms-3" style="display: none;" onclick="downloadFile()">Download</a>
>>>>>>> 39d7f057a3908de07e57a49de5b9f4411b67b571
        <button type="button" id="assessmentCancelBtn" class="btn btn-secondary btn sweet-confirm me-3" data-dismiss="modal">Print</button>

        <button type="submit" class="btn btn-primary ms-3" id="editSubmitAssessment" style="display: none;" onclick="showAssessmentSaveAlert(); return false;">
            Save Changes
        </button>

        <button type="submit" id="assessmentSaveBtn" class="btn btn-primary ms-3">Save</button>


    </div>
</div>
</form>

<!-- End of card body for vital signs input-->

