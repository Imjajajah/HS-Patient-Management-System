<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<div class="card-header">
    <h4 class="input-header" id="inputHeader">Input Mode</h4>
</div>
<!-- Card body for vital signs input-->

<div class="card-body">


    
    <div class="assessment-remarks">
       
        <div class="col-md-4">
            <h5 class="assessment-text">Assessment</h5>
        </div>
       
        <div class="row">
            <div class="col-md-12">
                <textarea name="assessment" id="assessmentInput" class="assessment-input" data-toggle="tooltip" placeholder="" rows="4"></textarea>
            </div>
        </div>
      
    </div>

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
