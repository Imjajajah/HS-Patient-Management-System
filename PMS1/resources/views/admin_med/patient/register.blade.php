@extends('admin_med.layout.index')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 col-xxl-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class=" card-title--large">PATIENT REGISTRATION FORM</h3>
                            
                        </div>
                        <div class="card-body">
                            <form action="#" id="step-form-horizontal" class="step-form-horizontal" method="POST"
                                onsubmit="">
                                @csrf
                                <div>
                                    <h4>Personal Info</h4>
                                    <section>
                                        <div class="row form-material">
                                            <div class="col-lg-3 mb-2">
                                                <div class="form-group">
                                                    <label class="text-label">Patient Name <span
                                                            class="form-required">*</span></label>
                                                    <input type="text" name="firstName" class="form-control"
                                                        placeholder="First Name">
                                                </div>
                                            </div>
                                            <div class="col-lg-3 mb-2">
                                                <div class="form-group">
                                                    <label class="text-label">&#8203</label>
                                                    <input type="text" name="middlename" class="form-control"
                                                        placeholder="Middle Name">
                                                </div>
                                            </div>
                                            <div class="col-lg-3 mb-2">
                                                <div class="form-group">
                                                    <label class="text-label">&#8203</label>
                                                    <input type="text" name="lastName" class="form-control"
                                                        placeholder="Last Name">
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-2">
                                                <div class="form-group">
                                                    <label class="text-label">&#8203</label>
                                                    <input type="text" name="suffix" class="form-control"
                                                        placeholder="Ext.">
                                                </div>
                                            </div>
                                            <div class="col-lg-3 mb-4">
                                                <label class="text-label">Date of Birth<span
                                                    class="form-required">*</span></label>
                                                    <input type="text" class="form-control" placeholder="2017-06-04" id="mdate">
                                            </div>
                                            <div class="col-lg-3 mb-4">
                                                <div class="form-group">
                                                    <label class="text-label">Sex <span class="form-required">*</span></label>
                                                    <select class="form-control" id="" name="sex"
                                                        data-component="dropdown" required="" aria-label="Sex">
                                                        <option value="">Please Select</option>
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                        <option value="Intersex">Intersex</option>
                                                        <option value="Non-Binary">Non-Binary</option>
                                                        <option value="Transgender Female (MTF)">Transgender Female (MTF)
                                                        </option>
                                                        <option value="Transgender Male (FTM)">Transgender Male (FTM)
                                                        </option>
                                                        <option value="Prefer Not to Say">Prefer Not to Say</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 mb-4">
                                                <div class="form-group">
                                                    <label class="text-label">Civil Status <span class="form-required">*</span></label>
                                                    <select class="form-control" id="" name="civil_status"
                                                        data-component="dropdown" required="" aria-label="Civil Status">
                                                        <option value="">Please Select</option>
                                                        <option value="Single">Single</option>
                                                        <option value="Married">Married</option>
                                                        <option value="Divorced">Divorced</option>
                                                        <option value="Legally separated">Legally separated</option>
                                                        <option value="Widowed">Widowed</option>
                                                        <option value="Other">Other</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 mb-4">
                                                <div class="form-group">
                                                    <label class="text-label">Employment <span
                                                            class="form-required">*</span></label>
                                                            <select
                                                            class="form-control" id="" name="employment" data-component="dropdown" required="" aria-label="Employment">
                                                            <option value="">Please Select</option>
                                                            <option value="Employed">Employed</option>
                                                            <option value="Self-Employed">Self-Employed</option>
                                                            <option value="Unemployed">Unemployed</option>
                                                            <option value="Retired">Retired</option>
                                                            <option value="Student">Student</option>
                                                            <option value="Other">Other</option>
                                                        </select>
                                                </div>
                                            </div>                                           
                                            <div class="col-lg-3 mb-4">
                                                <div class="form-group">
                                                    <label class="text-label">Phone Number<span
                                                        class="form-required">*</span></label>
                                                    <div class="input-group">
                                                        <input type="tel" name="phoneNumber" class="form-control" placeholder="(+63) 912-345-6780">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 mb-4">
                                                <div class="form-group">
                                                    <label class="text-label">Email Address <span
                                                            class="form-required">*</span></label>
                                                    <div class="input-group">
                                                        <input type="email" class="form-control" id="email"
                                                            placeholder="example@example.com">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 mb-2">
                                                <div class="form-group">
                                                    <label class="text-label">Religion<span
                                                            class="form-required">*</span></label>
                                                    <input type="text" name="religion" class="form-control"
                                                        placeholder="Religion">
                                                </div>
                                            </div>
                                            <div class="col-lg-3 mb-2">
                                                <div class="form-group">
                                                    <label class="text-label">Nationality<span
                                                            class="form-required">*</span></label>
                                                    <input type="text" name="nationality" class="form-control"
                                                        placeholder="Nationality">
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-4">
                                                <div class="form-group">
                                                    <label class="text-label">Permanent Address<span
                                                            class="form-required">*</span></label>
                                                    <input type="text" name="housenumber" class="form-control" placeholder="House No.">
                                                </div>
                                            </div>
                                            <div class="col-lg-3 mb-4">
                                                <div class="form-group">
                                                    <label class="text-label">&#8203</label>
                                                    <input type="text" name="street" class="form-control" placeholder="Street">
                                                </div>
                                            </div>
                                            <div class="col-lg-3 mb-4">
                                                <div class="form-group">
                                                    <label class="text-label">&#8203</label>
                                                    <input type="text" name="barangay" class="form-control" placeholder="Barangay">
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-4">
                                                <div class="form-group">
                                                    <label class="text-label">&#8203</label>
                                                    <input type="text" name="municipality" class="form-control" placeholder="Municipality">
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-4">
                                                <div class="form-group">
                                                    <label class="text-label">&#8203</label>
                                                    <input type="text" name="zipcode" class="form-control" placeholder="ZIP/Postal Code">
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <h4>Company Info</h4>
                                    <section>
                                        <div class="row">
                                            <div class="col-lg-12 mb-4">
                                                <div class="form-group">
                                                    <label class="text-label">Company Name <span
                                                            class="form-required">*</span></label>
                                                    <input type="text" name="firstName" class="form-control"
                                                        placeholder="Cellophane Square">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mb-4">
                                                <div class="form-group">
                                                    <label class="text-label">Company Email Address <span
                                                            class="form-required">*</span></label>
                                                    <div class="input-group">
                                                        <input type="email" class="form-control" id="emial1"
                                                            placeholder="example@example.com.com">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mb-4">
                                                <div class="form-group">
                                                    <label class="text-label">Company Phone Number <span
                                                            class="form-required">*</span></label>
                                                    <div class="input-group">
                                                        <input type="text" name="phoneNumber" class="form-control"
                                                            placeholder="(+1)408-657-9007">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mb-4">
                                                <div class="form-group">
                                                    <label class="text-label">Your position in Company <span
                                                            class="form-required">*</span></label>
                                                    <input type="text" name="place" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <h4>Business Hours</h4>
                                    <section>
                                        <div class="row">
                                            <div class="col-4 col-sm-3 mb-4">
                                                <h4>Monday *</h4>
                                            </div>
                                            <div class="col-4 col-sm-3 mb-4">
                                                <div class="form-group">
                                                    <input class="form-control" value="9.00" type="number"
                                                        name="input1" id="input1">
                                                </div>
                                            </div>
                                            <div class="col-4 col-sm-3 mb-4">
                                                <div class="form-group">
                                                    <input class="form-control" value="6.00" type="number"
                                                        name="input2" id="input2">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4 col-sm-3 mb-4">
                                                <h4>Tuesday *</h4>
                                            </div>
                                            <div class="col-4 col-sm-3 mb-4">
                                                <div class="form-group">
                                                    <input class="form-control" value="9.00" type="number"
                                                        name="input3" id="input3">
                                                </div>
                                            </div>
                                            <div class="col-4 col-sm-3 mb-4">
                                                <div class="form-group">
                                                    <input class="form-control" value="6.00" type="number"
                                                        name="input4" id="input4">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4 col-sm-3 mb-4">
                                                <h4>Wednesday *</h4>
                                            </div>
                                            <div class="col-4 col-sm-3 mb-4">
                                                <div class="form-group">
                                                    <input class="form-control" value="9.00" type="number"
                                                        name="input5" id="input5">
                                                </div>
                                            </div>
                                            <div class="col-4 col-sm-3 mb-4">
                                                <div class="form-group">
                                                    <input class="form-control" value="6.00" type="number"
                                                        name="input6" id="input6">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4 col-sm-3 mb-4">
                                                <h4>Thrusday *</h4>
                                            </div>
                                            <div class="col-4 col-sm-3 mb-4">
                                                <div class="form-group">
                                                    <input class="form-control" value="9.00" type="number"
                                                        name="input7" id="input7">
                                                </div>
                                            </div>
                                            <div class="col-4 col-sm-3 mb-4">
                                                <div class="form-group">
                                                    <input class="form-control" value="6.00" type="number"
                                                        name="input8" id="input8">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4 col-sm-3 mb-4">
                                                <h4>Friday *</h4>
                                            </div>
                                            <div class="col-4 col-sm-3 mb-4">
                                                <div class="form-group">
                                                    <input class="form-control" value="9.00" type="number"
                                                        name="input9" id="input9">
                                                </div>
                                            </div>
                                            <div class="col-4 col-sm-3 mb-4">
                                                <div class="form-group">
                                                    <input class="form-control" value="6.00" type="number"
                                                        name="input10" id="input10">
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <h4>Email Setup</h4>
                                    <section>
                                        <div class="row emial-setup">
                                            <div class="col-sm-3 col-6">
                                                <div class="form-group">
                                                    <label for="mailclient11" class="mailclinet mailclinet-gmail">
                                                        <input type="radio" name="emailclient" id="mailclient11">
                                                        <span class="mail-icon">
                                                            <i class="mdi mdi-google-plus" aria-hidden="true"></i>
                                                        </span>
                                                        <span class="mail-text">I'm using Gmail</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 col-6">
                                                <div class="form-group">
                                                    <label for="mailclient12" class="mailclinet mailclinet-office">
                                                        <input type="radio" name="emailclient" id="mailclient12">
                                                        <span class="mail-icon">
                                                            <i class="mdi mdi-office" aria-hidden="true"></i>
                                                        </span>
                                                        <span class="mail-text">I'm using Office</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 col-6">
                                                <div class="form-group">
                                                    <label for="mailclient13" class="mailclinet mailclinet-drive">
                                                        <input type="radio" name="emailclient" id="mailclient13">
                                                        <span class="mail-icon">
                                                            <i class="mdi mdi-google-drive" aria-hidden="true"></i>
                                                        </span>
                                                        <span class="mail-text">I'm using Drive</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 col-6">
                                                <div class="form-group">
                                                    <label for="mailclient14" class="mailclinet mailclinet-another">
                                                        <input type="radio" name="emailclient" id="mailclient14">
                                                        <span class="mail-icon">
                                                            <i class="fa fa-question-circle-o" aria-hidden="true"></i>
                                                        </span>
                                                        <span class="mail-text">Another Service</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12">
                                                <div class="skip-email text-center">
                                                    <p>Or if want skip this step entirely and setup it later</p>
                                                    <a href="javascript:void()">Skip step</a>
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
        </div>
    </div>
@endsection
