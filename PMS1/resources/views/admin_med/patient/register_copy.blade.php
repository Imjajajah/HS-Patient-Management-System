<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="card-header">
                    <h3 class=" card-title--large">PATIENT REGISTRATION FORM</h3>
                </div>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" id="step-form-horizontal" class="step-form-horizontal"
                    method="POST" onsubmit="">
                    @csrf
                    <div>
                        <h4>Information</h4>
                        <section>
                            <div class="form-group">
                                <label class="radio-inline col-lg-4">
                                    <input type="radio" name="optradio">Out-Patient</label>
                                <label class="radio-inline">
                                    <input type="radio" name="optradio">In-Patient</label>
                            </div>
                            <div class="row form-material">
                                <div class="col-lg-3 mb-2">
                                    <div class="form-group">
                                        <label class="text-label">Patient Name <span
                                                class="form-required text-danger">*</span></label>
                                        <input type="text" name="firstName"
                                            class="form-control" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-2">
                                    <div class="form-group">
                                        <label class="text-label">&#8203</label>
                                        <input type="text" name="middleName"
                                            class="form-control" placeholder="Middle Name">
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-2">
                                    <div class="form-group">
                                        <label class="text-label">&#8203</label>
                                        <input type="text" name="lastName"
                                            class="form-control" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="col-lg-2 mb-2">
                                    <div class="form-group">
                                        <label class="text-label">&#8203</label>
                                        <input type="text" name="suffix"
                                            class="form-control" placeholder="Ext.">
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-4">
                                    <label class="text-label">Date of Birth<span
                                            class="form-required text-danger">*</span></label>
                                    <input type="text" class="form-control"
                                        name="dateOfBirth" placeholder="2017-06-04"
                                        id="mdate">
                                </div>
                                <div class="col-lg-3 mb-4">
                                    <div class="form-group">
                                        <label class="text-label">Sex <span
                                                class="form-required text-danger">*</span></label>
                                        <select class="custom-select form-control"
                                            id="" name="sex"
                                            data-component="dropdown" required=""
                                            aria-label="Sex">
                                            <option value="">Please Select</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-4">
                                    <div class="form-group">
                                        <label class="text-label">Civil Status <span
                                                class="form-required text-danger">*</span></label>
                                        <select class="custom-select form-control"
                                            id="" name="civilStatus"
                                            data-component="dropdown" required=""
                                            aria-label="Civil Status">
                                            <option value="">Please Select</option>
                                            <option value="Single">Single</option>
                                            <option value="Married">Married</option>
                                            <option value="Divorced">Divorced</option>
                                            <option value="Legally separated">Legally separated
                                            </option>
                                            <option value="Widowed">Widowed</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-4">
                                    <div class="form-group">
                                        <label class="text-label">Employment <span
                                                class="form-required text-danger">*</span></label>
                                        <select class="custom-select form-control"
                                            id="" name="employment"
                                            data-component="dropdown" required=""
                                            aria-label="Employment">
                                            <option value="">Please Select</option>
                                            <option value="Employed">Employed</option>
                                            <option value="Self-Employed">Self-Employed
                                            </option>
                                            <option value="Unemployed">Unemployed</option>
                                            <option value="Retired">Retired</option>
                                            <option value="Student">Student</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-4">
                                    <div class="form-group">
                                        <label class="text-label">Phone Number <span
                                                class="form-required text-danger">*</span></label>
                                        <div class="input-group">
                                            <input type="tel" name="phoneNumber"
                                                class="form-control"
                                                placeholder="(+63) 912-345-6780">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-4">
                                    <div class="form-group">
                                        <label class="text-label">Email Address <span
                                                class="form-required text-danger">*</span></label>
                                        <div class="input-group">
                                            <input type="email" class="form-control"
                                                id="email"
                                                placeholder="example@example.com">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-2">
                                    <div class="form-group">
                                        <label class="text-label">Religion <span
                                                class="form-required text-danger">*</span></label>
                                        <input type="text" name="religion"
                                            class="form-control" placeholder="Religion">
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-2">
                                    <div class="form-group">
                                        <label class="text-label">Nationality <span
                                                class="form-required text-danger">*</span></label>
                                        <input type="text" name="nationality"
                                            class="form-control" placeholder="Nationality">
                                    </div>
                                </div>
                                <div class="col-lg-7 mb-4">
                                    <div class="form-group">
                                        <label class="text-label">Permanent Address <span
                                                class="form-required text-danger">*</span></label>
                                        <input type="text" name="houseNumber"
                                            class="form-control"
                                            placeholder="House No. Street Name, Barangay">
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-4">
                                    <div class="form-group">
                                        <label class="text-label">&#8203</label>
                                        <input type="text" name="municipality"
                                            class="form-control"
                                            placeholder="City/Municipality">
                                    </div>
                                </div>
                                <div class="col-lg-2 mb-4">
                                    <div class="form-group">
                                        <label class="text-label">&#8203</label>
                                        <input type="text" name="zipCode"
                                            class="form-control" placeholder="ZIP Code">
                                    </div>
                                </div>
                            </div>
                        </section>
                        <h4>Emergency</h4>
                        <section>
                            <div class="row">
                                <div class="col-lg-3 mb-2">
                                    <div class="form-group">
                                        <label class="text-label">Emergency Contact <span
                                                class="form-required text-danger">*</span></label>
                                        <input type="text" name="firstName"
                                            class="form-control" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-2">
                                    <div class="form-group">
                                        <label class="text-label">&#8203 </label>
                                        <input type="text" name="middleName"
                                            class="form-control" placeholder="Middle Name">
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-2">
                                    <div class="form-group">
                                        <label class="text-label">&#8203</label>
                                        <input type="text" name="lastName"
                                            class="form-control" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="col-lg-2 mb-2">
                                    <div class="form-group">
                                        <label class="text-label">&#8203</label>
                                        <input type="text" name="suffix"
                                            class="form-control" placeholder="Ext.">
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-2">
                                    <div class="form-group">
                                        <label class="text-label">Relationship <span
                                                class="form-required text-danger">*</span></label>
                                        <input type="text" name="relationship"
                                            class="form-control" placeholder="Relationship">
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-4">
                                    <div class="form-group">
                                        <label class="text-label">Contact Number <span
                                                class="form-required text-danger">*</span></label>
                                        <div class="input-group">
                                            <input type="text" name="primaryContact"
                                                class="form-control"
                                                placeholder="(+63) 912-345-6780">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-4">
                                    <div class="form-group">
                                        <label class="text-label">Telephone Number </label>
                                        <div class="input-group">
                                            <input type="text" name="secondaryContact"
                                                class="form-control"
                                                placeholder="(02) 8123-4567">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-4">
                                    <div class="form-group">
                                        <label class="text-label">Email Address</label>
                                        <div class="input-group">
                                            <input type="email" class="form-control"
                                                id="emial1"
                                                placeholder="example@example.com">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <h4>Health</h4>
                        <section>
                            <div class="row">
                                <div class="col-lg-6 mb-4">
                                    <div class="form-group">
                                        <label class="text-label">Reason for Registration <span
                                                class="form-required text-danger">*</span></label>
                                        <textarea type="text" name="reasonRegistration" class="form-control" rows="2"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="form-group">
                                        <label class="text-label">Additional Notes </label>
                                        <textarea type="text" name="additionalNotes" class="form-control" rows="2" id="additional_notes"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-1">
                                    <h5>Kindly indicate "N/A" if not applicable.</h5>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="form-group">
                                        <label class="text-label">Past Surgeries/Medical
                                            Procedures: <span
                                                class="form-required text-danger">*</span></label>
                                        <textarea type="text" name="reasonRegistration" class="form-control" rows="2"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="form-group">
                                        <label class="text-label">Current Medications: <span
                                                class="form-required text-danger">*</span></label>
                                        <textarea type="text" name="additionalNotes" class="form-control" rows="2" id="additional_notes"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="form-group">
                                        <label class="text-label">Known Allergies: <span
                                                class="form-required text-danger">*</span></label>
                                        <textarea type="text" name="reasonRegistration" class="form-control" rows="2"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="form-group">
                                        <label class="text-label">Chronic/Other Conditions:
                                            <span
                                                class="form-required text-danger">*</span></label>
                                        <textarea type="text" name="additionalNotes" class="form-control" rows="2" id="additional_notes"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <fieldset class="form-group">
                                        <div class="row">
                                            <label class="col-form-label col-sm-5 pt-0">Does
                                                the Patient smoke?</label>
                                            <div class="col-sm-6">
                                                <div class="form-check form-group">
                                                    <label
                                                        class="form-check-label radio-inline">
                                                        <input class="form-check-input"
                                                            type="radio" name="gridRadios"
                                                            value="option1" checked>
                                                        Yes
                                                    </label>
                                                    <label
                                                        class="form-check-label radio-inline col-lg-4">
                                                        <input class="form-check-input"
                                                            type="radio" name="gridRadios"
                                                            value="option2">
                                                        No
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <fieldset class="form-group">
                                        <div class="row">
                                            <label class="col-form-label col-sm-6 pt-0">Does
                                                the Patient drink Alcohol?</label>
                                            <div class="col-sm-6">
                                                <div class="form-check form-group">
                                                    <label
                                                        class="form-check-label radio-inline">
                                                        <input class="form-check-input"
                                                            type="radio" name="gridRadios"
                                                            value="option1" checked>
                                                        Yes
                                                    </label>
                                                    <label
                                                        class="form-check-label radio-inline col-lg-4">
                                                        <input class="form-check-input"
                                                            type="radio" name="gridRadios"
                                                            value="option2">
                                                        No
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                                {{-- <div class="col-lg-6 mb-4">
                                    <div class="form-group">
                                        <div class="form-check mb-2">
                                            <input type="checkbox" class="form-check-input" id="check1" value="">
                                            <label class="form-check-label" for="check1">Alzheimer's Disease</label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input type="checkbox" class="form-check-input" id="check2" value="">
                                            <label class="form-check-label" for="check2">Cancer</label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input type="checkbox" class="form-check-input" id="check3" value="" >
                                            <label class="form-check-label" for="check3">Heart Disease</label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input type="checkbox" class="form-check-input" id="check4" value="" >
                                            <label class="form-check-label" for="check4">Obesity</label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input type="checkbox" class="form-check-input" id="check5" value="" >
                                            <label class="form-check-label" for="check5">Stroke</label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input type="checkbox" class="form-check-input" id="check6" value="" >
                                            <label class="form-check-label" for="check6">Substance Abuse</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="form-group">
                                        <div class="form-check mb-2">
                                            <input type="checkbox" class="form-check-input" id="check7" value="">
                                            <label class="form-check-label" for="check7">Asthma</label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input type="checkbox" class="form-check-input" id="check8" value="">
                                            <label class="form-check-label" for="check8">Diabetes</label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input type="checkbox" class="form-check-input" id="check9" value="" >
                                            <label class="form-check-label" for="check9">Hypertension</label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input type="checkbox" class="form-check-input" id="check10" value="" >
                                            <label class="form-check-label" for="check10">Osteopoeosis</label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input type="checkbox" class="form-check-input" id="check11" value="" >
                                            <label class="form-check-label" for="check11">Mental Disorders</label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input type="checkbox" class="form-check-input" id="check12" value="" >
                                            <label class="form-check-label" for="check12">Other</label>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </section>
                        {{-- <h4>History</h4>
                        <section>
                            <div class="row">
                                <div class="col-lg-6 mb-4">
                                    <fieldset class="form-group">
                                        <div class="row">
                                            <label class="col-form-label col-sm-5 pt-0">Does the Patient smoke?</label>
                                            <div class="col-sm-6">
                                                <div class="form-check form-group">
                                                    <label class="form-check-label radio-inline">
                                                        <input class="form-check-input"
                                                        type="radio" name="gridRadios"
                                                        value="option1" checked>
                                                        Yes
                                                    </label>
                                                    <label class="form-check-label radio-inline col-lg-4">
                                                        <input class="form-check-input"
                                                        type="radio" name="gridRadios"
                                                        value="option2">
                                                        No
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <fieldset class="form-group">
                                        <div class="row">
                                            <label class="col-form-label col-sm-6 pt-0">Does the Patient drink Alcohol?</label>
                                            <div class="col-sm-6">
                                                <div class="form-check form-group">
                                                    <label class="form-check-label radio-inline">
                                                        <input class="form-check-input"
                                                        type="radio" name="gridRadios"
                                                        value="option1" checked>
                                                        Yes
                                                    </label>
                                                    <label class="form-check-label radio-inline col-lg-4">
                                                        <input class="form-check-input"
                                                        type="radio" name="gridRadios"
                                                        value="option2">
                                                        No
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="form-group">
                                        <div class="form-check mb-2">
                                            <input type="checkbox" class="form-check-input" id="check1" value="">
                                            <label class="form-check-label" for="check1">Alzheimer's Disease</label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input type="checkbox" class="form-check-input" id="check2" value="">
                                            <label class="form-check-label" for="check2">Cancer</label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input type="checkbox" class="form-check-input" id="check3" value="" >
                                            <label class="form-check-label" for="check3">Heart Disease</label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input type="checkbox" class="form-check-input" id="check4" value="" >
                                            <label class="form-check-label" for="check4">Obesity</label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input type="checkbox" class="form-check-input" id="check5" value="" >
                                            <label class="form-check-label" for="check5">Stroke</label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input type="checkbox" class="form-check-input" id="check6" value="" >
                                            <label class="form-check-label" for="check6">Substance Abuse</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="form-group">
                                        <div class="form-check mb-2">
                                            <input type="checkbox" class="form-check-input" id="check7" value="">
                                            <label class="form-check-label" for="check7">Asthma</label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input type="checkbox" class="form-check-input" id="check8" value="">
                                            <label class="form-check-label" for="check8">Diabetes</label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input type="checkbox" class="form-check-input" id="check9" value="" >
                                            <label class="form-check-label" for="check9">Hypertension</label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input type="checkbox" class="form-check-input" id="check10" value="" >
                                            <label class="form-check-label" for="check10">Osteopoeosis</label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input type="checkbox" class="form-check-input" id="check11" value="" >
                                            <label class="form-check-label" for="check11">Mental Disorders</label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input type="checkbox" class="form-check-input" id="check12" value="" >
                                            <label class="form-check-label" for="check12">Other</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section> --}}
                        <h4>Insurance</h4>
                        <section>
                            <div class="row">
                                <div class="col-lg-12 mb-3">
                                    <fieldset class="form-group">
                                        <div class="row">
                                            <label class="col-form-label col-sm-9 pt-0">Type of
                                                Insurance: </label>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input type="checkbox"
                                                                class="form-check-input"
                                                                value="">PhilHealth
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input type="checkbox"
                                                                class="form-check-input"
                                                                value="">Health
                                                            Maintenance Organization (HMO)
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input type="checkbox"
                                                                class="form-check-input"
                                                                value="">Private Health
                                                            Insurance
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="col-lg-4 mb-3">
                                    <div class="form-group">
                                        <label class="text-label"
                                            for="primaryInsuranceProvider">Primary Insurance
                                            Provider </label>
                                        <input type="text" name="primaryInsuranceProvider"
                                            class="form-control"
                                            placeholder="Insurance Provider" />
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-3">
                                    <div class="form-group">
                                        <label class="text-label"
                                            for="primaryPolicyNumber">Primary Policy
                                            Number </label>
                                        <input type="text" name="primaryPolicyNumber"
                                            class="form-control"
                                            placeholder="Policy Number" />
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-3">
                                    <div class="form-group">
                                        <label class="text-label" for="groupNumber">Group
                                            Number </label>
                                        <input type="text" name="groupNumber"
                                            class="form-control" placeholder="Group Number" />
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-3">
                                    <div class="form-group">
                                        <label class="text-label"
                                            for="primaryPolicyholderName">Primary
                                            Policyholder's Name </label>
                                        <input type="text" name="primaryPolicyholderName"
                                            class="form-control"
                                            placeholder="Policyholder's Name" />
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-3">
                                    <div class="form-group">
                                        <label class="text-label"
                                            for="relationshipToPatient">Reltionship to Patient
                                        </label>
                                        <input type="text" name="relationshipToPatient"
                                            class="form-control" placeholder="Relationship" />
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-3">
                                    <div class="form-group">
                                        <label class="text-label"
                                            for="secondaryInsuranceProvider">Secondary Insurance
                                            Provider </label>
                                        <input type="text" name="secondaryInsuranceProvider"
                                            class="form-control"
                                            placeholder="Insurance Provider" />
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-3">
                                    <div class="form-group">
                                        <label class="text-label"
                                            for="secondaryPolicyNumber">Secondary Policy
                                            Number </label>
                                        <input type="text" name="secondaryPolicyNumber"
                                            class="form-control"
                                            placeholder="Policy Number" />
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-3">
                                    <div class="form-group">
                                        <label class="text-label" for="groupNumber">Group
                                            Number </label>
                                        <input type="text" name="groupNumber"
                                            class="form-control" placeholder="Group Number" />
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-3">
                                    <div class="form-group">
                                        <label class="text-label"
                                            for="secondaryPolicyholderName">Secondary
                                            Policyholder's Name </label>
                                        <input type="text" name="secondaryPolicyholderName"
                                            class="form-control"
                                            placeholder="Policyholder's Name" />
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-3">
                                    <div class="form-group">
                                        <label class="text-label"
                                            for="relationshipToPatient">Reltionship to Patient
                                        </label>
                                        <input type="text" name="relationshipToPatient"
                                            class="form-control" placeholder="Relationship" />
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>