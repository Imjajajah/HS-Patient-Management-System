<li class="form-line" data-type="control_radio" id="id_303"><label class="form-label form-label-top"
    id="label_303" aria-hidden="true"> </label>
<div id="cid_303" class="form-input-wide" data-layout="full">
    <div class="form-multiple-column" data-columncount="2" role="group"
        aria-labelledby="label_303" data-component="radio"><span class="form-radio-item"><span
                class="dragger-item"></span><input type="radio" aria-describedby="label_303"
                class="form-radio" id="input_303_0" name="patient_type" checked=""
                value="Out Patient" /><label id="label_input_303_0" for="input_303_0">Out
                Patient</label></span><span class="form-radio-item"><span
                class="dragger-item"></span><input type="radio" aria-describedby="label_303"
                class="form-radio" id="input_303_1" name="patient_type" value="In Patient" /><label
                id="label_input_303_1" for="input_303_1">In Patient</label></span>
            </div>
            @if ($errors->has('patient_type'))
                @foreach ($errors->get('patient_type') as $error)
                    <span style="color:red;">{{ $error }}</span><br>
                @endforeach
            @endif
</div>
</li>


<li class="form-line" data-type="control_radio" id="id_309"><label
    class="form-label form-label-top form-label-auto" id="label_309" aria-hidden="false">
    Insurance Plan Type </label>
<div id="cid_309" class="form-input-wide" data-layout="full">
    <div class="form-single-column" role="group" aria-labelledby="label_309"
        data-component="radio"><span class="form-radio-item" style="clear:left"><span
                class="dragger-item"></span><input type="radio" aria-describedby="label_309"
                class="form-radio" id="input_309_0" name="plan_type"
                value="HMO (Health Maintenance Organization)" /><label id="label_input_309_0"
                for="input_309_0">HMO (Health Maintenance Organization)</label></span><span
            class="form-radio-item" style="clear:left"><span
                class="dragger-item"></span><input type="radio" aria-describedby="label_309"
                class="form-radio" id="input_309_1" name="plan_type"
                value="PPO (Preferred Provider Organization)" /><label id="label_input_309_1"
                for="input_309_1">PPO (Preferred Provider Organization)</label></span><span
            class="form-radio-item" style="clear:left"><span
                class="dragger-item"></span><input type="radio" aria-describedby="label_309"
                class="form-radio" id="input_309_2" name="plan_type"
                value="EPO (Exclusive Provider Organization)" /><label id="label_input_309_2"
                for="input_309_2">EPO (Exclusive Provider Organization)</label></span><span
            class="form-radio-item" style="clear:left"><span
                class="dragger-item"></span><input type="radio" aria-describedby="label_309"
                class="form-radio" id="input_309_3" name="plan_type"
                value="HDHP (High Deductible Health Plan)" /><label id="label_input_309_3"
                for="input_309_3">HDHP (High Deductible Health Plan)</label></span><span
            class="form-radio-item formRadioOther" style="clear:left"><input type="radio"
                class="form-radio-other form-radio" name="plan_type" id="other_309"
                value="other" tabindex="0" aria-label="Other" /><label
                id="label_other_309" style="text-indent:0" for="other_309">Other</label><span
                id="other_309_input" class="other-input-container" style="display:none"><input
                    type="text" class="form-radio-other-input form-textbox"
                    name="plan_type" data-otherhint="Other" size="15"
                    id="input_309" data-placeholder="Please type another option here"
                    placeholder="Please type another option here" /></span></span></div>
</div>
            @if ($errors->has('plan_type'))
                @foreach ($errors->get('plan_type') as $error)
                    <span style="color:red;">{{ $error }}</span><br>
                @endforeach
            @endif
</li>
