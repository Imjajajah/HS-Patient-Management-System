<link rel="stylesheet" href="{{ asset('/css/diagnosis_input.css') }}">
<script src="{{ asset('js/diagnosis_input.js') }}"></script>


<div class="card-header">
    <h4 class="input-header" id="inputHeader">Input Mode</h4>
</div>
<!-- Card body for vital signs input-->

<div class="card-body">


    <form action="/emergency/diagnosis-and-procedure/store" id="diagnosisForm" class="step-form-horizontal" method="POST" onsubmit="">
    @csrf


    <!-- doctors-evaluation -->
    <div class="doctors-evaluation">

        <div class="col-md-3">
            <h5 class="evaluation-text">EVALUATION</h5>
        </div>

        <div class="impairments-evaluation">
            <div class="col-md-3">
                <h5 class="impairments-evaluation-text">Impairments</h5>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <button class="add-button" onclick="addTextField(event, 'impairmentInput')">+ Add Impairment</button>
                    <div class="input-wrapper" id="impairments-container">
                        <textarea id="impairmentInput" class="impairments-evaluation-input" name="impairment" data-toggle="tooltip" placeholder="" rows="1" style="display:none;"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Impairments Evaluation -->

        <!-- Activity & Participation Restrictions -->
        <div class="activity-restriction-evaluation">
            <div class="col-md-3">
                <h5 class="activity-restriction-text">Activity & Participation Restrictions</h5>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <button class="add-button" onclick="addTextField(event, 'activityRestrictionInput')">+ Add Activity Restriction</button>
                    <div class="input-wrapper" id="activity-restrictions-container">
                        <textarea id="activityRestrictionInput" class="activity-restriction-input" name="activity_restriction" data-toggle="tooltip" placeholder="" rows="2" style="display:none;"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Activity & Participation Restrictions -->

        <!-- Personal Factors -->
        <div class="personal-factor-evaluation">
            <div class="col-md-3">
                <h5 class="personal-factor-text">Personal Factors</h5>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <button class="add-button" onclick="addTextField(event, 'personalFactorInput')">+ Add Personal Factor</button>
                    <div class="input-wrapper" id="personal-factors-container">
                        <textarea id="personalFactorInput" class="personal-factor-input" name="personal_factor" data-toggle="tooltip" placeholder="" rows="2" style="display:none;"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Personal Factors -->

        <!-- Environmental Factors -->
        <div class="environmental-factor-evaluation">
            <div class="col-md-3">
                <h5 class="environmental-factor-text">Environmental Factors</h5>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <button class="add-button" onclick="addTextField(event, 'environmentalFactorInput')">+ Add Environmental Factor</button>
                    <div class="input-wrapper" id="environmental-factors-container">
                        <textarea id="environmentalFactorInput" class="environmental-factor-input" name="environmental_factor" data-toggle="tooltip" placeholder="" rows="2" style="display:none;"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Environmental Factors -->



    </div>
    <!--End of doctors-evaluation -->




    <!-- DIAGNOSIS Pattern -->
    <div class="diagnosis-remarks">

        <div class="col-md-3">
            <h5 class="diagnosis-text">Diagnosis</h5>
        </div>

        <div class="row">
            <div class="col-md-12">
                <textarea id="diagnosisInput" class="diagnosis-input" name="diagnosis" data-toggle="tooltip" placeholder="" rows="4"></textarea>
            </div>
        </div>

    </div>
    <!--End of DIAGNOSIS Pattern -->

    <!-- PROGNOSIS Pattern -->
    <div class="prognosis-remarks">

        <div class="col-md-3">
            <h5 class="prognosis-text">Prognosis</h5>
        </div>

        <div class="row">
            <div class="col-md-12">
                <textarea id="prognosisInput" class="prognosis-input" name="prognosis" data-toggle="tooltip" placeholder="" rows="4"></textarea>
            </div>
        </div>

    </div>
    <!--End of PROGNOSIS Pattern -->











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
