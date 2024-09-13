<link rel="stylesheet" href="{{ asset('/css/emergency_registration.css') }}">
<script src="{{ asset('/js/emergency_registration.js') }}"></script>


<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="card-header">
                    <h3 class=" card-title--large">EMERGENCY PATIENT REGISTRATION FORM</h3>
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

                        <!-- DO NOT DELETE, FOR REGISTRATION DATE -->

                            <!-- <div class="form-group">
                                <label for="regDateTime">Registration Date and Time</label>

                                <div class="reg-date-time">

                                    <div class="reg-date">
                                        <input type="date" id="regDate" class="form-control">
                                    </div>

                                    <div class="reg-time">
                                        <input type="time" id="regTime" class="form-control">
                                    </div>

                                </div>

                                <small class="time-label">Hour Minutes</small>
                            </div> -->

                        <!-- DO NOT DELETE, FOR REGISTRATION DATE -->

                            <div class="row form-material align-items-center">
                                <div class="col-lg-4 mb-2">
                                    <div class="form-group form-inline">
                                        <input type="checkbox" id="unidentifiedCB" name="unidentified" class="unidentified-cb">
                                        <label for="unidentified" class="unidentified-label">Unidentified Patient</label>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-2">
                                    <!-- Button with custom styling -->
                                    <button type="button" id="generateID-btn" class="generate-btn" disabled>
                                        Generate Temporary ID
                                    </button>
                                </div>
                            </div>

                            <div class="row form-material">
                                <div class="col-lg-3 mb-2">
                                    <div class="form-group">
                                        <label class="text-label">Patient Name</label>
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

                                <div class="col-lg-3 mb-2">
                                    <div class="form-group">
                                        <label class="text-label">&#8203</label>
                                        <input type="text" name="extName"
                                            class="form-control" placeholder="Ext. Name">
                                    </div>
                                </div>


                                <div class="col-lg-3 mb-4">
                                    <label class="text-label">Date of Birth</label>
                                    <input type="date" class="form-control" name="dateOfBirth" id="mdate" required>
                                </div>

                                <div class="col-lg-3 mb-4">
                                    <div class="form-group">
                                        <label class="text-label">Sex</label>
                                        <select class="custom-select form-control" name="sex" aria-label="Sex" required>
                                            <option value="">Please Select</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-3 mb-4">
                                    <div class="form-group">
                                        <label class="text-label">Age</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="age" placeholder="Age" readonly>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-3 mb-4">
                                    <div class="form-group">
                                        <label class="text-label">Priority Level <span
                                                class="form-required text-danger">*</span></label>
                                        <select class="custom-select form-control"
                                            id="" name="prioritylevel"
                                            data-component="dropdown" required=""
                                            aria-label="Priority Level">
                                            <option value="">Please Select</option>
                                            <option value="lvl1">Level 1 - Resuscitation</option>
                                            <option value="lvl2">Level 2 - Emergent </option>
                                            <option value="lvl3">Level 3 - Urgent</option>
                                            <option value="lvl4">Level 4 - Less Urgent</option>
                                            <option value="lvl5">Level 5 - Non-Urgent</option>
                                        </select>
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



