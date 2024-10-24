<script src="{{ asset('js/current_date_time.js') }}"></script>
<script src="{{ asset('js/history_mode.js') }}"></script>

<div class="card-header">
    <h4 class="input-header" id="historyInputHeader">Input Mode</h4>
</div>
<!-- Card body for vital signs input-->

<div class="card-body">


    <form action="{{ isset($ep_medical_history) ? route('ep_diagnosis_and_procedure.ep_medical_history_update', $ep_medical_history->ep_medical_history_id) : '/emergency/ep-medical-history/store' }}" id="epHistoryForm" method="POST" onsubmit="">
    @csrf
    @if(isset($ep_medical_history))
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
                <input type="date" name="ep_medical_history_date" id="history-date-input" class="form-control date-input datetime-input">
            </div>
            <div class="col-md-6">
                <input type="time" name="ep_medical_history_time" id="history-time-input" class="form-control time-input datetime-input">
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

        <!-- ASDASDASDASD -->

        <button type="button" class="btn btn-secondary" id="backToInputButtonHistory" style="display: none;" onclick="showHistoryInputMode();">Back to Input Mode</button>

        <button type="button" id="historyCancelBtn" class="btn btn-secondary btn sweet-confirm me-3" data-dismiss="modal">Clear</button>

        <button type="submit" class="btn btn-primary ms-3" id="editSubmitHistory" style="display: none;" onclick="showHistorySaveAlert(); return false;">
            Save Changes
        </button>

        <button type="submit" id="historySaveBtn" class="btn btn-primary ms-3">Save</button>





        @endif
    </div>
</div>
</form>

<!-- End of card body for vital signs input-->
