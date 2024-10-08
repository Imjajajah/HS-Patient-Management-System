@extends('admin_med.layout.index')

@section('med_content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                {{-- <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Hi, welcome back!</h4>
                        <p class="mb-1">Validation</p>
                    </div>
                </div> --}}
                <div class="col-sm-6 p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="records">Patient Records</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Register</a></li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div id="page" class="site">
                                <div class="container">
                                    <div class="form-box">
                                        <div class="progress">
                                            <ul class="progress-steps">
                                                <li class="step active">
                                                    <span>1</span>
                                                    <p>Personal<br><span>Patient's Information</span></p>
                                                </li>
                                                <li class="step">
                                                    <span>2</span>
                                                    <p>Emergency<br><span>Patient's Contact</span></p>
                                                </li>
                                                <li class="step">
                                                    <span>3</span>
                                                    <p>Health<br><span>Patient's Health</span></p>
                                                </li>
                                                <li class="step">
                                                    <span>4</span>
                                                    <p>Insurance<br><span>Patient's Insurance</span></p>
                                                </li>
                                            </ul>
                                        </div>
                                        <form action="">
                                            <div class="form-one form-step active">
                                                <h2>Personal Information</h2>
                                                <p></p>
                                                <div class="checkbox" required>
                                                    <label>Patient type</label>
                                                    <div class="grouping-radio">
                                                        <input type="radio" name="patient-type" id="in-patient"
                                                            value="in-patient" required>
                                                        <label for="in-patient">In-Patient</label>
                                                        <input type="radio" name="patient-type" id="out-patient"
                                                            value="out-patient" required>
                                                        <label for="out-patient">Out-Patient</label>
                                                    </div>
                                                </div>
                                                <div>
                                                    <label>Patient Name</label>
                                                    <div class="grouping">
                                                        <input type="text" placeholder="First Name" required>
                                                        <input type="text" placeholder="Middle Name" required>
                                                        <input type="text" placeholder="Last Name" required>
                                                        <input type="text" placeholder="Extension">
                                                    </div>
                                                </div>
                                                <div>
                                                    <label>Patient Demographics</label>
                                                    <div class="grouping">
                                                        <div class="grouping-item">
                                                            <label for="dob">Date of Birth</label>
                                                            <input type="text" class="date-picker" autocomplete="off"
                                                                id="dob" placeholder="Select a Date" required>
                                                        </div>
                                                        <div class="grouping-item">
                                                            <label>Sex</label>
                                                            <select name="sex" data-component="dropdown"
                                                                aria-label="Sex" required>
                                                                <option value="">Please Select</option>
                                                                <option value="Male">Male</option>
                                                                <option value="Female">Female</option>
                                                                <option value="Intersex">Intersex</option>
                                                                <option value="Non-Binary">Non-Binary</option>
                                                                <option value="Transgender Female (MTF)">Transgender
                                                                    Female (MTF)
                                                                </option>
                                                                <option value="Transgender Male (FTM)">Transgender
                                                                    Male (FTM)
                                                                </option>
                                                                <option value="Prefer Not to Say">Prefer Not to Say
                                                                </option>
                                                            </select>
                                                        </div>
                                                        <div class="grouping-item">
                                                            <label>Civil Status</label>
                                                            <select name="civilStatus" data-component="dropdown"
                                                                aria-label="Civil Status" required>
                                                                <option value="">Pleas Select</option>
                                                                <option value="Single">Single</option>
                                                                <option value="Married">Married</option>
                                                                <option value="Divorced">Divorced</option>
                                                                <option value="Legally separated">Legally separated</option>
                                                                <option value="Widowed">Widowed</option>
                                                                <option value="Other">Other</option>
                                                            </select>
                                                        </div>
                                                        <div class="grouping-item">
                                                            <label>Employment</label>
                                                            <select name="employment" data-component="dropdown"
                                                                aria-label="Employment" required>
                                                                <option value="">Employment Status</option>
                                                                <option value="Employed">Employed</option>
                                                                <option value="Self-Employed">Self-Employed</option>
                                                                <option value="Unemployed">Unemployed</option>
                                                                <option value="Retired">Retired</option>
                                                                <option value="Student">Student</option>
                                                                <option value="Other">Other</option>
                                                            </select>
                                                        </div>
                                                        <div class="grouping-item">
                                                            <label>Religion</label>
                                                            <input type="text" name="religion" placeholder="Religion"
                                                                required>
                                                        </div>
                                                        <div class="grouping-item">
                                                            <label>Nationality</label>
                                                            <input type="text" name="nationality"
                                                                placeholder="Nationality" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <label>Contacts</label>
                                                    <div class="grouping">
                                                        <input id="patient-phone" type="tel" placeholder="Phone Number"
                                                            required>
                                                        <input id="patient-email" type="email" placeholder="Email">
                                                    </div>
                                                </div>
                                                <div>
                                                    <label>Permanent Address</label>
                                                    <div class="grouping-1">
                                                        <input type="text" name="street"
                                                            placeholder="House No. Street Name, Barangay" required>
                                                    </div>
                                                    <div class="grouping-2">
                                                        <input type="text" name="municipality"
                                                            placeholder="City/Municipality" required>
                                                        <input type="text" name="country" placeholder="Country">
                                                        <input type="text" name="zip" placeholder="ZIP Code"
                                                            required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-two form-step">
                                                <h2>Emergency Contact</h2>
                                                <p></p>
                                                <div>
                                                    <label>Emergency Contact Person Name</label>
                                                    <div class="grouping">
                                                        <input type="text" placeholder="First Name" required>
                                                        <input type="text" placeholder="Middle Name" required>
                                                        <input type="text" placeholder="Last Name" required>
                                                        <input type="text" placeholder="Extension">
                                                    </div>
                                                </div>
                                                <div>
                                                    <label>Relationship</label>
                                                    <div class="grouping">
                                                        <input type="text" name="relationship-1"
                                                            placeholder="Relationship" required>
                                                    </div>
                                                </div>
                                                <div>
                                                    <label>Contacts</label>
                                                    <div class="grouping-1">
                                                        <input type="tel" id="emergency-email" placeholder="Email">
                                                    </div>
                                                    <div class="grouping-2">
                                                        <input type="tel" id="emergency-phone"
                                                            placeholder="Phone Number" required>
                                                        <input type="tel" id="emergency-tel"
                                                            placeholder="Telephone Number">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-three form-step">
                                                <h2>Health Information</h2>
                                                <p></p>
                                                <div>
                                                    <label>Reason for Registration</label>
                                                    <div class="grouping">
                                                        <input type="text" placeholder="Reason..." required>
                                                    </div>
                                                </div>
                                                <div>
                                                    <label>Additional Notes</label>
                                                    <div class="grouping">
                                                        <textarea class="form-control" rows="4" id="comment"></textarea>
                                                    </div>
                                                </div>
                                                <div>
                                                    <label>Health History</label>
                                                    <p>Kindly indicate "N/A" if not applicable.</p>
                                                    <div class="grouping">
                                                        <div class="grouping-item">
                                                            <label>Past Medical Procedure:</label>
                                                            <textarea class="form-control" rows="4" id="comment"></textarea>
                                                        </div>
                                                        <div class="grouping-item">
                                                            <label>Current Medications:</label>
                                                            <textarea class="form-control" rows="4" id="comment"></textarea>
                                                        </div>
                                                        <div class="grouping-item">
                                                            <label>Known Allergies:</label>
                                                            <textarea class="form-control" rows="4" id="comment"></textarea>
                                                        </div>
                                                        <div class="grouping-item">
                                                            <label>Other Conditions:</label>
                                                            <textarea class="form-control" rows="4" id="comment"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="checkbox">
                                                    <label>Does the Patient Smoke?</label>
                                                    <div class="grouping-radio">
                                                        <input type="radio" name="smoke" id="yes-1"
                                                            value="yes-1" required>
                                                        <label for="yes-1">Yes</label>
                                                        <input type="radio" name="smoke" id="no-1"
                                                            value="no-1" required>
                                                        <label for="no-1">No</label>
                                                    </div>
                                                </div>
                                                <div class="checkbox">
                                                    <label>Does the Patient drink Alcohol?</label>
                                                    <div class="grouping-radio">
                                                        <input type="radio" name="drink" id="yes-2"
                                                            value="yes-2" required>
                                                        <label for="yes-2">Yes</label>
                                                        <input type="radio" name="drink" id="no-2"
                                                            value="no-2" required>
                                                        <label for="no-2">No</label>
                                                    </div>
                                                </div>
                                                <div class="checkbox">
                                                    <label>Family History</label>
                                                    <div class="grouping-check">
                                                        <div class="checkbox-item">
                                                            <input required type="checkbox" name="family-history"
                                                                id="alzheimers-disease" value="alzheimers-disease">
                                                            <label for="alzheimers-disease">Alzheimer's Disease</label>
                                                        </div>
                                                        <div class="checkbox-item">
                                                            <input required type="checkbox" name="family-history"
                                                                id="asthma" value="asthma">
                                                            <label for="asthma">Asthma</label>
                                                        </div>
                                                        <div class="checkbox-item">
                                                            <input required type="checkbox" name="family-history"
                                                                id="cancer" value="cancer">
                                                            <label for="cancer">Cancer</label>
                                                        </div>
                                                        <div class="checkbox-item">
                                                            <input required type="checkbox" name="family-history"
                                                                id="diabetes" value="diabetes">
                                                            <label for="diabetes">Diabetes</label>
                                                        </div>
                                                        <div class="checkbox-item">
                                                            <input required type="checkbox" name="family-history"
                                                                id="heart-disease" value="heart-disease">
                                                            <label for="heart-disease">Heart Disease</label>
                                                        </div>
                                                        <div class="checkbox-item">
                                                            <input required type="checkbox" name="family-history"
                                                                id="hypertension" value="hypertension">
                                                            <label for="hypertension">Hypertension</label>
                                                        </div>
                                                        <div class="checkbox-item">
                                                            <input required type="checkbox" name="family-history"
                                                                id="obesity" value="obesity">
                                                            <label for="obesity">Obesity</label>
                                                        </div>
                                                        <div class="checkbox-item">
                                                            <input required type="checkbox" name="family-history"
                                                                id="osteopeorosis" value="osteopeorosis">
                                                            <label for="osteopeorosis">Osteopeorosis</label>
                                                        </div>
                                                        <div class="checkbox-item">
                                                            <input required type="checkbox" name="family-history"
                                                                id="mental-disorders" value="mental-disorders">
                                                            <label for="mental-disorders">Mental Disorders</label>
                                                        </div>
                                                        <div class="checkbox-item">
                                                            <input required type="checkbox" name="family-history"
                                                                id="stroke" value="stroke">
                                                            <label for="stroke">Stroke</label>
                                                        </div>
                                                        <div class="checkbox-item">
                                                            <input required type="checkbox" name="family-history"
                                                                id="substance-abuse" value="substance-abuse">
                                                            <label for="substance-abuse">Substance Abuse</label>
                                                        </div>
                                                        <div class="checkbox-item">
                                                            <input required type="checkbox" name="family-history"
                                                                id="others" value="others">
                                                            <label for="others">Others</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-four form-step">
                                                <h2>Insurance Information</h2>
                                                <p></p>
                                                <!-- Patient's Insurance -->
                                                <div class="checkbox">
                                                    <label>Does the Patient Have Insurance?</label>
                                                    <div class="grouping-radio">
                                                        <input required type="radio" name="has-insurance"
                                                            id="yes-insurance" value="yes">
                                                        <label for="yes-insurance">Yes</label>
                                                        <input required type="radio" name="has-insurance"
                                                            id="no-insurance" value="no" checked>
                                                        <label for="no-insurance">No</label>
                                                    </div>
                                                </div>
                                                <div id="insurance-fields" class="checkbox conditional-fields">
                                                    <label>Type of Insurance</label>
                                                    <div class="grouping-radio">
                                                        <input required type="radio" name="insurance-type1"
                                                            id="philHealth1" value="philHealth1">
                                                        <label for="philHealth1">PhilHealth</label>
                                                        <input required type="radio" name="insurance-type1"
                                                            id="hmo1" value="hmo1">
                                                        <label for="hmo1">HMO</label>
                                                        <input required type="radio" name="insurance-type1"
                                                            id="private1" value="private1">
                                                        <label for="private1">Private Insurance</label>
                                                    </div>
                                                    <label>Primary Insurance Information</label>
                                                    <div class="grouping">
                                                        <div class="grouping-item">
                                                            <label for="eff1">Effective Date</label>
                                                            <input required type="text" class="date-picker"
                                                                autocomplete="off" id="eff"
                                                                placeholder="Select a Date" required>
                                                        </div>
                                                        <div class="grouping-item">
                                                            <label for="exp1">Expiration Date</label>
                                                            <input required type="text" class="date-picker"
                                                                autocomplete="off" id="exp"
                                                                placeholder="Select a Date" required>
                                                        </div>
                                                    </div>
                                                    <div class="grouping">
                                                        <div class="grouping-item">
                                                            <label>Insurance Provider</label>
                                                            <input required type="text" name="insurance"
                                                                placeholder="Insurance Company">
                                                        </div>
                                                        <div class="grouping-item">
                                                            <label>Policy Number</label>
                                                            <input required type="text" name="policy"
                                                                placeholder="Policy Number">
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Patient's Secondary Insurance -->
                                                <div class="checkbox">
                                                    <label>Does the Patient have a Secondary Insurance?</label>
                                                    <div class="grouping-radio">
                                                        <input required type="radio" name="has-secondary-insurance"
                                                            id="yes-secondary-insurance" value="yes">
                                                        <label for="yes-secondary-insurance">Yes</label>
                                                        <input required type="radio" name="has-secondary-insurance"
                                                            id="no-secondary-insurance" value="no" checked>
                                                        <label for="no-secondary-insurance">No</label>
                                                    </div>
                                                </div>
                                                <div id="second-insurance-fields" class="checkbox conditional-fields">
                                                    <label>Type of Insurance</label>
                                                    <div class="grouping-radio">
                                                        <input required type="radio" name="secondary-insurance-type"
                                                            id="philHealth2" value="philHealth2">
                                                        <label for="philHealth2">PhilHealth</label>
                                                        <input required type="radio" name="secondary-insurance-type"
                                                            id="hmo2" value="hmo2">
                                                        <label for="hmo2">HMO</label>
                                                        <input required type="radio" name="secondary-insurance-type"
                                                            id="private2" value="private2">
                                                        <label for="private2">Private Insurance</label>
                                                    </div>
                                                    <label>Secondary Insurance Information</label>
                                                    <div class="grouping">
                                                        <div class="grouping-item">
                                                            <label for="eff2">Effective Date</label>
                                                            <input required type="text" class="date-picker"
                                                                autocomplete="off" id="eff2"
                                                                placeholder="Select a Date" required>
                                                        </div>
                                                        <div class="grouping-item">
                                                            <label for="exp2">Expiration Date</label>
                                                            <input required type="text" class="date-picker"
                                                                autocomplete="off" id="exp2"
                                                                placeholder="Select a Date" required>
                                                        </div>
                                                    </div>
                                                    <div class="grouping">
                                                        <div class="grouping-item">
                                                            <label>Insurance Provider</label>
                                                            <input required type="text" name="insurance"
                                                                placeholder="Insurance Company">
                                                        </div>
                                                        <div class="grouping-item">
                                                            <label>Policy Number</label>
                                                            <input required type="text" name="policy"
                                                                placeholder="Policy Number">
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Other Policyholder's Isurance -->
                                                <div class="checkbox">
                                                    <label>Is the Patient under another Policyholder's Insurance? </label>
                                                    <div class="grouping-radio">
                                                        <input required type="radio" name="under-policyholder"
                                                            id="yes-policyholder" value="yes">
                                                        <label for="yes-policyholder">Yes</label>
                                                        <input required type="radio" name="under-policyholder"
                                                            id="no-policyholder" value="no" checked>
                                                        <label for="no-policyholder">No</label>
                                                    </div>
                                                </div>
                                                <div id="policyholder-fields" class="conditional-fields">
                                                    <label>Policyholder's Insurance Information</label>
                                                    <div class="grouping">
                                                        <div class="grouping-item">
                                                            <label>Policyholder's Name</label>
                                                            <div class="grouping">
                                                                <input required type="text" placeholder="First Name">
                                                                <input required type="text" placeholder="Middle Name">
                                                                <input required type="text" placeholder="Last Name">
                                                                <input type="text" placeholder="Extension">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="grouping">
                                                        <div class="grouping-item">
                                                            <label for="eff1">Effective Date</label>
                                                            <input required type="text" class="date-picker"
                                                                autocomplete="off" id="eff1"
                                                                placeholder="Select a Date" required>
                                                        </div>
                                                        <div class="grouping-item">
                                                            <label for="exp1">Expiration Date</label>
                                                            <input required type="text" class="date-picker"
                                                                autocomplete="off" id="exp1"
                                                                placeholder="Select a Date" required>
                                                        </div>
                                                        <div class="grouping-item">
                                                            <label>Relationship</label>
                                                            <input required type="text" name="relationship-2"
                                                                placeholder="Relationship">
                                                        </div>
                                                    </div>
                                                    <div class="grouping">
                                                        <div class="grouping-item">
                                                            <label>Insurance Provider</label>
                                                            <input required type="text" name="insurance"
                                                                placeholder="Insurance Company">
                                                        </div>
                                                        <div class="grouping-item">
                                                            <label>Policy Number</label>
                                                            <input required type="text" name="policy"
                                                                placeholder="Policy Number">
                                                        </div>
                                                    </div>
                                                    <div class="grouping-item">
                                                        <label>Contacts</label>
                                                        <div class="grouping-2">
                                                            <input required type="tel" id="insurance-phone"
                                                                placeholder="Phone Number">
                                                            <input type="tel" id="insurance-tel"
                                                                placeholder="Telephone Number">
                                                        </div>
                                                        <div class="grouping-1">
                                                            <input type="tel" id="insurance-email"
                                                                placeholder="Email">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="btn-group">
                                                <button type="button" class="btn-prev" disabled>Back</button>
                                                <button type="button" class="btn-next">Next</button>
                                                <button type="submit" class="btn-submit" id="toastr-success-top-right">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection