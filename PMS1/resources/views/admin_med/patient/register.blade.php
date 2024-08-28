@extends('admin_med.layout.index')

@section('content')
    <div class="content-body">
        <form class="jotform-form" onsubmit="return typeof testSubmitFunction !== 'undefined' && testSubmitFunction();"
            action="https://submit.jotform.com/submit/242195735928468" method="post" name="form_242195735928468"
            id="242195735928468" accept-charset="utf-8" autocomplete="on"><input type="hidden" name="formID"
                value="242195735928468" /><input type="hidden" id="JWTContainer" value="" /><input type="hidden"
                id="cardinalOrderNumber" value="" /><input type="hidden" id="jsExecutionTracker"
                name="jsExecutionTracker" value="build-date-1724744788077" /><input type="hidden" id="submitSource"
                name="submitSource" value="unknown" /><input type="hidden" id="buildDate" name="buildDate"
                value="1724744788077" />
            <div role="main" class="form-all">
                <ul class="form-section page-section">
                    <li id="cid_322" class="form-input-wide" data-type="control_head">
                        <div class="form-header-group  header-large">
                            <div class="header-text httac htvam">
                                <h1 id="header_322" class="form-header" data-component="header">PATIENT REGISTRATION FORM
                                </h1>
                            </div>
                        </div>
                    </li>
                    <li id="cid_259" class="form-input-wide" data-type="control_head">
                        <div class="form-header-group  header-default">
                            <div class="header-text httal htvam">
                                <h2 id="header_259" class="form-header" data-component="header">Patient Information</h2>
                            </div>
                        </div>
                    </li>
                    <li class="form-line" data-type="control_radio" id="id_303"><label class="form-label form-label-top"
                            id="label_303" aria-hidden="true"> </label>
                        <div id="cid_303" class="form-input-wide" data-layout="full">
                            <div class="form-multiple-column" data-columncount="2" role="group"
                                aria-labelledby="label_303" data-component="radio"><span class="form-radio-item"><span
                                        class="dragger-item"></span><input type="radio" aria-describedby="label_303"
                                        class="form-radio" id="input_303_0" name="q303_typeA" checked=""
                                        value="Out Patient" /><label id="label_input_303_0" for="input_303_0">Out
                                        Patient</label></span><span class="form-radio-item"><span
                                        class="dragger-item"></span><input type="radio" aria-describedby="label_303"
                                        class="form-radio" id="input_303_1" name="q303_typeA" value="In Patient" /><label
                                        id="label_input_303_1" for="input_303_1">In Patient</label></span></div>
                        </div>
                    </li>
                    <li class="form-line jf-required" data-type="control_fullname" id="id_3"
                        data-compound-hint="First Name,Middle Name,Last Name ,Ext."><label
                            class="form-label form-label-top form-label-extended form-label-auto" id="label_3"
                            for="first_3" aria-hidden="false"> Patient Name<span class="form-required">*</span> </label>
                        <div id="cid_3" class="form-input-wide jf-required" data-layout="full">
                            <div data-wrapper-react="true" class="extended"><span class="form-sub-label-container"
                                    style="vertical-align:top" data-input-type="first"><input type="text"
                                        id="first_3" name="q3_patientName[first]"
                                        class="form-textbox validate[required]" data-defaultvalue=""
                                        autoComplete="section-input_3 given-name" size="10" placeholder="First Name"
                                        data-component="first" aria-labelledby="label_3" required=""
                                        value="" /></span><span class="form-sub-label-container"
                                    style="vertical-align:top" data-input-type="middle"><input type="text"
                                        id="middle_3" name="q3_patientName[middle]" class="form-textbox"
                                        data-defaultvalue="" autoComplete="section-input_3 additional-name"
                                        size="10" placeholder="Middle Name" data-component="middle"
                                        aria-labelledby="label_3" required="" value="" /></span><span
                                    class="form-sub-label-container" style="vertical-align:top"
                                    data-input-type="last"><input type="text" id="last_3"
                                        name="q3_patientName[last]" class="form-textbox validate[required]"
                                        data-defaultvalue="" autoComplete="section-input_3 family-name" size="15"
                                        placeholder="Last Name " data-component="last" aria-labelledby="label_3"
                                        required="" value="" /></span><span class="form-sub-label-container"
                                    style="vertical-align:top" data-input-type="suffix"><input type="text"
                                        id="suffix_3" name="q3_patientName[suffix]" class="form-textbox"
                                        data-defaultvalue="" autoComplete="section-input_3 honorific-suffix"
                                        size="4" placeholder="Ext." data-component="suffix"
                                        aria-labelledby="label_3" required="" value="" /></span></div>
                        </div>
                    </li>
                    <li class="form-line form-line-column form-col-1 jf-required" data-type="control_dropdown"
                        id="id_231"><label class="form-label form-label-top form-label-auto" id="label_231"
                            for="input_231" aria-hidden="false">
                            Sex<span class="form-required">*</span> </label>
                        <div id="cid_231" class="form-input-wide jf-required" data-layout="half"> <select
                                class="form-dropdown validate[required]" id="input_231" name="q231_sex"
                                style="width:310px" data-component="dropdown" required="" aria-label="Sex">
                                <option value="">Please Select</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Intersex">Intersex</option>
                                <option value="Non-Binary">Non-Binary</option>
                                <option value="Transgender Female (MTF)">Transgender Female (MTF)</option>
                                <option value="Transgender Male (FTM)">Transgender Male (FTM)</option>
                                <option value="Prefer Not to Say">Prefer Not to Say</option>
                            </select> </div>
                    </li>
                    <li class="form-line form-line-column form-col-2 jf-required" data-type="control_dropdown"
                        id="id_232"><label class="form-label form-label-top form-label-auto" id="label_232"
                            for="input_232" aria-hidden="false"> Civil
                            Status<span class="form-required">*</span> </label>
                        <div id="cid_232" class="form-input-wide jf-required" data-layout="half"> <select
                                class="form-dropdown validate[required]" id="input_232" name="q232_maritalStatus232"
                                style="width:310px" data-component="dropdown" required="" aria-label="Civil Status">
                                <option value="">Please Select</option>
                                <option value="Single">Single</option>
                                <option value="Married">Married</option>
                                <option value="Divorced">Divorced</option>
                                <option value="Legally separated">Legally separated</option>
                                <option value="Widowed">Widowed</option>
                                <option value="Other">Other</option>
                            </select> </div>
                    </li>
                    <li class="form-line form-line-column form-col-3 jf-required" data-type="control_datetime"
                        id="id_333"><label class="form-label form-label-top" id="label_333" for="lite_mode_333"
                            aria-hidden="false"> Date of Birth<span class="form-required">*</span> </label>
                        <div id="cid_333" class="form-input-wide jf-required" data-layout="half">
                            <div data-wrapper-react="true">
                                <div style="display:none"><span class="form-sub-label-container"
                                        style="vertical-align:top"><input type="tel"
                                            class="form-textbox validate[required, limitDate]" id="month_333"
                                            name="q333_dateOf333[month]" size="2" data-maxlength="2"
                                            data-age="" maxLength="2" value="" required=""
                                            autoComplete="off" aria-labelledby="label_333 sublabel_333_month" /><span
                                            class="date-separate" aria-hidden="true"> -</span><label
                                            class="form-sub-label" for="month_333" id="sublabel_333_month"
                                            style="min-height:13px">Month</label></span><span
                                        class="form-sub-label-container" style="vertical-align:top"><input type="tel"
                                            class="form-textbox validate[required, limitDate]" id="day_333"
                                            name="q333_dateOf333[day]" size="2" data-maxlength="2" data-age=""
                                            maxLength="2" value="" required="" autoComplete="off"
                                            aria-labelledby="label_333 sublabel_333_day" /><span class="date-separate"
                                            aria-hidden="true"> -</span><label class="form-sub-label" for="day_333"
                                            id="sublabel_333_day" style="min-height:13px">Day</label></span><span
                                        class="form-sub-label-container" style="vertical-align:top"><input type="tel"
                                            class="form-textbox validate[required, limitDate]" id="year_333"
                                            name="q333_dateOf333[year]" size="4" data-maxlength="4" data-age=""
                                            maxLength="4" value="" required="" autoComplete="off"
                                            aria-labelledby="label_333 sublabel_333_year" /><label class="form-sub-label"
                                            for="year_333" id="sublabel_333_year"
                                            style="min-height:13px">Year</label></span></div><span
                                    class="form-sub-label-container" style="vertical-align:top"><input type="text"
                                        class="form-textbox validate[required, limitDate, validateLiteDate]"
                                        id="lite_mode_333" size="12" data-maxlength="12" maxLength="12"
                                        data-age="" value="" required="" data-format="mmddyyyy"
                                        data-seperator="-" placeholder="MM-DD-YYYY" data-placeholder="MM-DD-YYYY"
                                        autoComplete="off" aria-labelledby="label_333" /><img
                                        class=" newDefaultTheme-dateIcon icon-liteMode" alt="Pick a Date"
                                        id="input_333_pick" src="https://cdn.jotfor.ms/images/calendar.png"
                                        data-component="datetime" aria-hidden="true" data-allow-time="No"
                                        data-version="v2" /><label class="form-sub-label is-empty" for="lite_mode_333"
                                        id="sublabel_333_litemode" style="min-height:13px"></label></span>
                            </div>
                        </div>
                    </li>
                    <li class="form-line form-line-column form-col-4 jf-required" data-type="control_dropdown"
                        id="id_336"><label class="form-label form-label-top" id="label_336" for="input_336"
                            aria-hidden="false"> Employment<span class="form-required">*</span> </label>
                        <div id="cid_336" class="form-input-wide jf-required" data-layout="half"> <select
                                class="form-dropdown validate[required]" id="input_336" name="q336_employment"
                                style="width:310px" data-component="dropdown" required="" aria-label="Employment">
                                <option value="">Please Select</option>
                                <option value="Employed">Employed</option>
                                <option value="Self-Employed">Self-Employed</option>
                                <option value="Unemployed">Unemployed</option>
                                <option value="Retired">Retired</option>
                                <option value="Student">Student</option>
                                <option value="Other">Other</option>
                            </select> </div>
                    </li>
                    <li class="form-line form-line-column form-col-5 jf-required" data-type="control_phone"
                        id="id_235"><label class="form-label form-label-top form-label-auto" id="label_235"
                            for="input_235_full"> Phone Number<span class="form-required">*</span> </label>
                        <div id="cid_235" class="form-input-wide jf-required" data-layout="half"> <span
                                class="form-sub-label-container" style="vertical-align:top"><input type="tel"
                                    id="input_235_full" name="q235_phoneNumber235[full]" data-type="mask-number"
                                    class="mask-phone-number form-textbox validate[required, Fill Mask]"
                                    data-defaultvalue="" autoComplete="section-input_235 tel" style="width:310px"
                                    data-masked="true" placeholder="0000-000-0000" data-component="phone"
                                    aria-labelledby="label_235" required="" value="" /></span> </div>
                    </li>
                    <li class="form-line form-line-column form-col-6" data-type="control_email" id="id_281"><label
                            class="form-label form-label-top" id="label_281" for="input_281" aria-hidden="false"> Email
                        </label>
                        <div id="cid_281" class="form-input-wide" data-layout="half"> <input type="email"
                                id="input_281" name="q281_email" class="form-textbox validate[Email]"
                                data-defaultvalue="" autoComplete="section-input_281 email" style="width:310px"
                                size="310" placeholder="e.g. example@example.com" data-component="email"
                                aria-labelledby="label_281" value="" />
                        </div>
                    </li>
                    <li class="form-line form-line-column form-col-7 jf-required" data-type="control_textbox"
                        id="id_328"><label class="form-label form-label-top" id="label_328" for="input_328"
                            aria-hidden="false"> Religion<span class="form-required">*</span> </label>
                        <div id="cid_328" class="form-input-wide jf-required" data-layout="half"> <input
                                type="text" id="input_328" name="q328_typeA328" data-type="input-textbox"
                                class="form-textbox validate[required, Alphabetic]" data-defaultvalue=""
                                style="width:310px" size="310" placeholder="Religion" data-component="textbox"
                                aria-labelledby="label_328" required="" value="" /> </div>
                    </li>
                    <li class="form-line form-line-column form-col-8 jf-required" data-type="control_textbox"
                        id="id_337"><label class="form-label form-label-top" id="label_337" for="input_337"
                            aria-hidden="false"> Nationality<span class="form-required">*</span> </label>
                        <div id="cid_337" class="form-input-wide jf-required" data-layout="half"> <input
                                type="text" id="input_337" name="q337_nationality" data-type="input-textbox"
                                class="form-textbox validate[required, Alphabetic]" data-defaultvalue=""
                                style="width:310px" size="310" placeholder="Nationality" data-component="textbox"
                                aria-labelledby="label_337" required="" value="" /> </div>
                    </li>
                    <li class="form-line jf-required" data-type="control_address" id="id_234"
                        data-compound-hint="House No.,Street,Barangay,Municipality,,ZIP / Postal Code,,"><label
                            class="form-label form-label-top form-label-auto" id="label_234" for="input_234_addr_line1"
                            aria-hidden="false"> Permanent Address<span class="form-required">*</span> </label>
                        <div id="cid_234" class="form-input-wide jf-required" data-layout="full">
                            <div summary="" class="form-address-table jsTest-addressField">
                                <div class="form-address-line-wrapper jsTest-address-line-wrapperField"><span
                                        class="form-address-line form-address-street-line jsTest-address-lineField"><span
                                            class="form-sub-label-container" style="vertical-align:top"><input
                                                type="text" id="input_234_addr_line1"
                                                name="q234_address234[addr_line1]"
                                                class="form-textbox validate[required] form-address-line"
                                                data-defaultvalue="" autoComplete="section-input_234 address-line1"
                                                placeholder="Street Address" data-component="address_line_1"
                                                aria-labelledby="label_234" required=""
                                                value="" /></span></span>
                                </div>
                                <div class="form-address-line-wrapper jsTest-address-line-wrapperField"><span
                                        class="form-address-line form-address-street-line jsTest-address-lineField"><span
                                            class="form-sub-label-container" style="vertical-align:top"><input
                                                type="text" id="input_234_addr_line2"
                                                name="q234_address234[addr_line2]" class="form-textbox form-address-line"
                                                data-defaultvalue="" autoComplete="section-input_234 address-line2"
                                                placeholder="Extension" data-component="address_line_2"
                                                aria-labelledby="label_234" value="" /></span></span></div>
                                <div class="form-address-line-wrapper jsTest-address-line-wrapperField"><span
                                        class="form-address-line form-address-city-line jsTest-address-lineField "><span
                                            class="form-sub-label-container" style="vertical-align:top"><input
                                                type="text" id="input_234_city" name="q234_address234[city]"
                                                class="form-textbox validate[required] form-address-city"
                                                data-defaultvalue="" autoComplete="section-input_234 address-level2"
                                                placeholder="Barangay" data-component="city" aria-labelledby="label_234"
                                                required="" value="" /></span></span><span
                                        class="form-address-line form-address-state-line jsTest-address-lineField "><span
                                            class="form-sub-label-container" style="vertical-align:top"><input
                                                type="text" id="input_234_state" name="q234_address234[state]"
                                                class="form-textbox validate[required] form-address-state"
                                                data-defaultvalue="" autoComplete="section-input_234 address-level1"
                                                placeholder="Municipality" data-component="state"
                                                aria-labelledby="label_234" required=""
                                                value="" /></span></span></div>
                                <div class="form-address-line-wrapper jsTest-address-line-wrapperField"><span
                                        class="form-address-line form-address-zip-line jsTest-address-lineField "><span
                                            class="form-sub-label-container" style="vertical-align:top"><input
                                                type="text" id="input_234_postal" name="q234_address234[postal]"
                                                class="form-textbox validate[required] form-address-postal"
                                                data-defaultvalue="" autoComplete="section-input_234 postal-code"
                                                placeholder="ZIP / Postal Code" data-component="zip"
                                                aria-labelledby="label_234" required=""
                                                value="" /></span></span></div>
                            </div>
                        </div>
                    </li>
                    <li id="cid_356" class="form-input-wide" data-type="control_pagebreak">
                        <div class="form-pagebreak" data-component="pagebreak">
                            <div class="form-pagebreak-back-container"><button id="form-pagebreak-back_356"
                                    type="button"
                                    class="form-pagebreak-back  form-submit-button-navy-700 jf-form-buttons"
                                    data-component="pagebreak-back">Back</button></div>
                            <div class="form-pagebreak-next-container"><button id="form-pagebreak-next_356"
                                    type="button"
                                    class="form-pagebreak-next  form-submit-button-navy-700 jf-form-buttons"
                                    data-component="pagebreak-next">Next</button></div>
                            <div style="clear:both" class="pageInfo form-sub-label" id="pageInfo_356"></div>
                        </div>
                    </li>
                </ul>
                <ul class="form-section page-section" style="display:none;">
                    <li id="cid_355" class="form-input-wide" data-type="control_head">
                        <div class="form-header-group  header-default">
                            <div class="header-text httal htvam">
                                <h2 id="header_355" class="form-header" data-component="header">Emergency Contact</h2>
                            </div>
                        </div>
                    </li>
                    <li class="form-line jf-required" data-type="control_fullname" id="id_13"
                        data-compound-hint="First Name,Middle Name,Last Name"><label
                            class="form-label form-label-top form-label-extended" id="label_13" for="first_13"
                            aria-hidden="false">
                            Emergency Contact Person<span class="form-required">*</span> </label>
                        <div id="cid_13" class="form-input-wide jf-required" data-layout="full">
                            <div data-wrapper-react="true" class="extended"><span class="form-sub-label-container"
                                    style="vertical-align:top" data-input-type="first"><input type="text"
                                        id="first_13" name="q13_emergencyContact13[first]"
                                        class="form-textbox validate[required]" data-defaultvalue=""
                                        autoComplete="section-input_13 given-name" size="10"
                                        placeholder="First Name" data-component="first" aria-labelledby="label_13"
                                        required="" value="" /></span><span class="form-sub-label-container"
                                    style="vertical-align:top" data-input-type="middle"><input type="text"
                                        id="middle_13" name="q13_emergencyContact13[middle]" class="form-textbox"
                                        data-defaultvalue="" autoComplete="section-input_13 additional-name"
                                        size="10" placeholder="Middle Name" data-component="middle"
                                        aria-labelledby="label_13" required="" value="" /></span><span
                                    class="form-sub-label-container" style="vertical-align:top"
                                    data-input-type="last"><input type="text" id="last_13"
                                        name="q13_emergencyContact13[last]" class="form-textbox validate[required]"
                                        data-defaultvalue="" autoComplete="section-input_13 family-name" size="15"
                                        placeholder="Last Name" data-component="last" aria-labelledby="label_13"
                                        required="" value="" /></span></div>
                        </div>
                    </li>
                    <li class="form-line form-line-column form-col-1 jf-required" data-type="control_textbox"
                        id="id_73"><label class="form-label form-label-top" id="label_73" for="input_73"
                            aria-hidden="false"> Relationship<span class="form-required">*</span> </label>
                        <div id="cid_73" class="form-input-wide jf-required" data-layout="half"> <input
                                type="text" id="input_73" name="q73_relationship" data-type="input-textbox"
                                class="form-textbox validate[required]" data-defaultvalue="" style="width:310px"
                                size="310" placeholder=" e.g. Spouse, Guardian" data-component="textbox"
                                aria-labelledby="label_73" required="" value="" /> </div>
                    </li>
                    <li class="form-line form-line-column form-col-2 jf-required" data-type="control_phone"
                        id="id_279"><label class="form-label form-label-top" id="label_279" for="input_279_full">
                            Primary Contact<span class="form-required">*</span> </label>
                        <div id="cid_279" class="form-input-wide jf-required" data-layout="half"> <span
                                class="form-sub-label-container" style="vertical-align:top"><input type="tel"
                                    id="input_279_full" name="q279_primaryContact[full]" data-type="mask-number"
                                    class="mask-phone-number form-textbox validate[required, Fill Mask]"
                                    data-defaultvalue="" autoComplete="section-input_279 tel" style="width:310px"
                                    data-masked="true" placeholder="0000-000-0000" data-component="phone"
                                    aria-labelledby="label_279" required="" value="" /></span> </div>
                    </li>
                    <li class="form-line form-line-column form-col-3" data-type="control_phone" id="id_335"><label
                            class="form-label form-label-top" id="label_335" for="input_335_full"> Secondary Contact
                        </label>
                        <div id="cid_335" class="form-input-wide" data-layout="half"> <span
                                class="form-sub-label-container" style="vertical-align:top"><input type="tel"
                                    id="input_335_full" name="q335_secondaryContact[full]" data-type="mask-number"
                                    class="mask-phone-number form-textbox validate[Fill Mask]" data-defaultvalue=""
                                    autoComplete="section-input_335 tel" style="width:310px" data-masked="true"
                                    placeholder="0000-000-0000" data-component="phone" aria-labelledby="label_335"
                                    value="" /></span> </div>
                    </li>
                    <li class="form-line form-line-column form-col-4" data-type="control_email" id="id_282"><label
                            class="form-label form-label-top" id="label_282" for="input_282" aria-hidden="false"> Email
                        </label>
                        <div id="cid_282" class="form-input-wide" data-layout="half"> <input type="email"
                                id="input_282" name="q282_email282" class="form-textbox validate[Email]"
                                data-defaultvalue="" autoComplete="section-input_282 email" style="width:310px"
                                size="310" placeholder="e.g. example@example.com" data-component="email"
                                aria-labelledby="label_282" value="" />
                        </div>
                    </li>
                    <li class="form-line jf-required" data-type="control_radio" id="id_338"><label
                            class="form-label form-label-top" id="label_338" aria-hidden="false"> Does the Emergency
                            Contact Person live with the Patient?<span class="form-required">*</span> </label>
                        <div id="cid_338" class="form-input-wide jf-required" data-layout="full">
                            <div class="form-multiple-column" data-columncount="2" role="group"
                                aria-labelledby="label_338" data-component="radio"><span class="form-radio-item"><span
                                        class="dragger-item"></span><input type="radio" aria-describedby="label_338"
                                        class="form-radio validate[required]" id="input_338_0" name="q338_doesThe338"
                                        value="Yes" required="" /><label id="label_input_338_0"
                                        for="input_338_0">Yes</label></span><span class="form-radio-item"><span
                                        class="dragger-item"></span><input type="radio" aria-describedby="label_338"
                                        class="form-radio validate[required]" id="input_338_1" name="q338_doesThe338"
                                        value="No" required="" /><label id="label_input_338_1"
                                        for="input_338_1">No</label></span></div>
                        </div>
                    </li>
                    <li class="form-line form-field-hidden" style="display:none;" data-type="control_address"
                        id="id_339" data-compound-hint="House No.,Street,Barangay,Municipality,,ZIP / Postal Code,,">
                        <label class="form-label form-label-top form-label-auto" id="label_339"
                            for="input_339_addr_line1" aria-hidden="false"> Emergency Contact Person's Address </label>
                        <div id="cid_339" class="form-input-wide" data-layout="full">
                            <div summary="" class="form-address-table jsTest-addressField">
                                <div class="form-address-line-wrapper jsTest-address-line-wrapperField"><span
                                        class="form-address-line form-address-street-line jsTest-address-lineField"><span
                                            class="form-sub-label-container" style="vertical-align:top"><input
                                                type="text" id="input_339_addr_line1"
                                                name="q339_emergencyContact339[addr_line1]"
                                                class="form-textbox form-address-line" data-defaultvalue=""
                                                autoComplete="section-input_339 address-line1" placeholder="House No."
                                                data-component="address_line_1" aria-labelledby="label_339"
                                                value="" /></span></span></div>
                                <div class="form-address-line-wrapper jsTest-address-line-wrapperField"><span
                                        class="form-address-line form-address-street-line jsTest-address-lineField"><span
                                            class="form-sub-label-container" style="vertical-align:top"><input
                                                type="text" id="input_339_addr_line2"
                                                name="q339_emergencyContact339[addr_line2]"
                                                class="form-textbox form-address-line" data-defaultvalue=""
                                                autoComplete="section-input_339 address-line2" placeholder="Street"
                                                data-component="address_line_2" aria-labelledby="label_339"
                                                value="" /></span></span></div>
                                <div class="form-address-line-wrapper jsTest-address-line-wrapperField"><span
                                        class="form-address-line form-address-city-line jsTest-address-lineField "><span
                                            class="form-sub-label-container" style="vertical-align:top"><input
                                                type="text" id="input_339_city" name="q339_emergencyContact339[city]"
                                                class="form-textbox form-address-city" data-defaultvalue=""
                                                autoComplete="section-input_339 address-level2" placeholder="Barangay"
                                                data-component="city" aria-labelledby="label_339"
                                                value="" /></span></span><span
                                        class="form-address-line form-address-state-line jsTest-address-lineField "><span
                                            class="form-sub-label-container" style="vertical-align:top"><input
                                                type="text" id="input_339_state"
                                                name="q339_emergencyContact339[state]"
                                                class="form-textbox form-address-state" data-defaultvalue=""
                                                autoComplete="section-input_339 address-level1" placeholder="Municipality"
                                                data-component="state" aria-labelledby="label_339"
                                                value="" /></span></span></div>
                                <div class="form-address-line-wrapper jsTest-address-line-wrapperField"><span
                                        class="form-address-line form-address-zip-line jsTest-address-lineField "><span
                                            class="form-sub-label-container" style="vertical-align:top"><input
                                                type="text" id="input_339_postal"
                                                name="q339_emergencyContact339[postal]"
                                                class="form-textbox form-address-postal" data-defaultvalue=""
                                                autoComplete="section-input_339 postal-code"
                                                placeholder="ZIP / Postal Code" data-component="zip"
                                                aria-labelledby="label_339" value="" /></span></span></div>
                            </div>
                        </div>
                    </li>
                    <li id="cid_357" class="form-input-wide" data-type="control_pagebreak">
                        <div class="form-pagebreak" data-component="pagebreak">
                            <div class="form-pagebreak-back-container"><button id="form-pagebreak-back_357"
                                    type="button"
                                    class="form-pagebreak-back  form-submit-button-navy-700 jf-form-buttons"
                                    data-component="pagebreak-back">Back</button></div>
                            <div class="form-pagebreak-next-container"><button id="form-pagebreak-next_357"
                                    type="button"
                                    class="form-pagebreak-next  form-submit-button-navy-700 jf-form-buttons"
                                    data-component="pagebreak-next">Next</button></div>
                            <div style="clear:both" class="pageInfo form-sub-label" id="pageInfo_357"></div>
                        </div>
                    </li>
                </ul>
                <ul class="form-section page-section" style="display:none;">
                    <li id="cid_265" class="form-input-wide" data-type="control_head">
                        <div class="form-header-group  header-default">
                            <div class="header-text httal htvam">
                                <h2 id="header_265" class="form-header" data-component="header">Health History</h2>
                            </div>
                        </div>
                    </li>
                    <li class="form-line jf-required" data-type="control_textbox" id="id_252"><label
                            class="form-label form-label-top" id="label_252" for="input_252" aria-hidden="false"> Reason
                            for
                            Registration<span class="form-required">*</span> </label>
                        <div id="cid_252" class="form-input-wide jf-required" data-layout="half"> <input
                                type="text" id="input_252" name="q252_reasonFor" data-type="input-textbox"
                                class="form-textbox validate[required, AlphaNumeric, minCharLimit]" data-defaultvalue=""
                                style="width:310px" size="310" maxLength="300" data-minlength="1" placeholder=" "
                                data-component="textbox" aria-labelledby="label_252" required="" value="" />
                        </div>
                    </li>
                    <li class="form-line" data-type="control_textarea" id="id_255"><label
                            class="form-label form-label-top form-label-auto" id="label_255" for="input_255"
                            aria-hidden="false">
                            Additional Notes </label>
                        <div id="cid_255" class="form-input-wide" data-layout="full">
                            <textarea id="input_255" class="form-textarea validate[AlphaNumeric]" name="q255_additionalNotes"
                                style="width:648px;height:163px" data-component="textarea" aria-labelledby="label_255"></textarea>
                        </div>
                    </li>
                    <li class="form-line jf-required" data-type="control_radio" id="id_296"><label
                            class="form-label form-label-top" id="label_296" aria-hidden="false"> Does the patient have
                            any history of hospitalization or surgical
                            operation?<span class="form-required">*</span> </label>
                        <div id="cid_296" class="form-input-wide jf-required" data-layout="full">
                            <div class="form-multiple-column" data-columncount="2" role="group"
                                aria-labelledby="label_296" data-component="radio"><span class="form-radio-item"><span
                                        class="dragger-item"></span><input type="radio" aria-describedby="label_296"
                                        class="form-radio validate[required]" id="input_296_0" name="q296_doesThe"
                                        value="Yes" required="" /><label id="label_input_296_0"
                                        for="input_296_0">Yes</label></span><span class="form-radio-item"><span
                                        class="dragger-item"></span><input type="radio" aria-describedby="label_296"
                                        class="form-radio validate[required]" id="input_296_1" name="q296_doesThe"
                                        value="No" required="" /><label id="label_input_296_1"
                                        for="input_296_1">No</label></span></div>
                        </div>
                    </li>
                    <li class="form-line jf-required form-field-hidden" style="display:none;"
                        data-type="control_textarea" id="id_297"><label class="form-label form-label-top"
                            id="label_297" for="input_297" aria-hidden="false">
                            Specify<span class="form-required">*</span> </label>
                        <div id="cid_297" class="form-input-wide jf-required" data-layout="full">
                            <textarea id="input_297" class="form-textarea validate[required, AlphaNumeric]" name="q297_specify"
                                style="width:648px;height:163px" data-component="textarea" required="" aria-labelledby="label_297"></textarea>
                        </div>
                    </li>
                    <li class="form-line jf-required" data-type="control_radio" id="id_331"><label
                            class="form-label form-label-top" id="label_331" aria-hidden="false"> Does the patient have
                            any current condition<span class="form-required">*</span> </label>
                        <div id="cid_331" class="form-input-wide jf-required" data-layout="full">
                            <div class="form-multiple-column" data-columncount="2" role="group"
                                aria-labelledby="label_331" data-component="radio"><span class="form-radio-item"><span
                                        class="dragger-item"></span><input type="radio" aria-describedby="label_331"
                                        class="form-radio validate[required]" id="input_331_0" name="q331_doesThe331"
                                        value="Yes" required="" /><label id="label_input_331_0"
                                        for="input_331_0">Yes</label></span><span class="form-radio-item"><span
                                        class="dragger-item"></span><input type="radio" aria-describedby="label_331"
                                        class="form-radio validate[required]" id="input_331_1" name="q331_doesThe331"
                                        value="No" required="" /><label id="label_input_331_1"
                                        for="input_331_1">No</label></span></div>
                        </div>
                    </li>
                    <li class="form-line jf-required form-field-hidden" style="display:none;"
                        data-type="control_textarea" id="id_332"><label class="form-label form-label-top"
                            id="label_332" for="input_332" aria-hidden="false">
                            Specify<span class="form-required">*</span> </label>
                        <div id="cid_332" class="form-input-wide jf-required" data-layout="full">
                            <textarea id="input_332" class="form-textarea validate[required, AlphaNumeric]" name="q332_specify332"
                                style="width:648px;height:163px" data-component="textarea" required="" aria-labelledby="label_332"></textarea>
                        </div>
                    </li>
                    <li class="form-line jf-required" data-type="control_radio" id="id_43"><label
                            class="form-label form-label-top" id="label_43" aria-hidden="false"> Is the patient
                            currently taking any prescription or over-the-counter
                            medications?<span class="form-required">*</span> </label>
                        <div id="cid_43" class="form-input-wide jf-required" data-layout="full">
                            <div class="form-multiple-column" data-columncount="2" role="group"
                                aria-labelledby="label_43" data-component="radio"><span class="form-radio-item"><span
                                        class="dragger-item"></span><input type="radio" aria-describedby="label_43"
                                        class="form-radio validate[required]" id="input_43_0" name="q43_isThe43"
                                        value="Yes" required="" /><label id="label_input_43_0"
                                        for="input_43_0">Yes</label></span><span class="form-radio-item"><span
                                        class="dragger-item"></span><input type="radio" aria-describedby="label_43"
                                        class="form-radio validate[required]" id="input_43_1" name="q43_isThe43"
                                        value="No" required="" /><label id="label_input_43_1"
                                        for="input_43_1">No</label></span></div>
                        </div>
                    </li>
                    <li class="form-line jf-required form-field-hidden" style="display:none;"
                        data-type="control_textarea" id="id_22"><label class="form-label form-label-top"
                            id="label_22" for="input_22" aria-hidden="false"> Specify
                            Medications<span class="form-required">*</span> </label>
                        <div id="cid_22" class="form-input-wide jf-required" data-layout="full">
                            <textarea id="input_22" class="form-textarea validate[required, AlphaNumeric]" name="q22_specifyMedications"
                                style="width:648px;height:163px" data-component="textarea" required="" aria-labelledby="label_22"></textarea>
                        </div>
                    </li>
                    <li class="form-line jf-required" data-type="control_radio" id="id_291"><label
                            class="form-label form-label-top" id="label_291" aria-hidden="false"> Is the patient have
                            any FOOD allergies?<span class="form-required">*</span> </label>
                        <div id="cid_291" class="form-input-wide jf-required" data-layout="full">
                            <div class="form-multiple-column" data-columncount="2" role="group"
                                aria-labelledby="label_291" data-component="radio"><span class="form-radio-item"><span
                                        class="dragger-item"></span><input type="radio" aria-describedby="label_291"
                                        class="form-radio validate[required]" id="input_291_0" name="q291_isThe"
                                        value="Yes" required="" /><label id="label_input_291_0"
                                        for="input_291_0">Yes</label></span><span class="form-radio-item"><span
                                        class="dragger-item"></span><input type="radio" aria-describedby="label_291"
                                        class="form-radio validate[required]" id="input_291_1" name="q291_isThe"
                                        value="No" required="" /><label id="label_input_291_1"
                                        for="input_291_1">No</label></span></div>
                        </div>
                    </li>
                    <li class="form-line jf-required form-field-hidden" style="display:none;"
                        data-type="control_textarea" id="id_295"><label class="form-label form-label-top"
                            id="label_295" for="input_295" aria-hidden="false">
                            Specify Food Allergies<span class="form-required">*</span> </label>
                        <div id="cid_295" class="form-input-wide jf-required" data-layout="full">
                            <textarea id="input_295" class="form-textarea validate[required, AlphaNumeric]" name="q295_specifyFood"
                                style="width:648px;height:163px" data-component="textarea" required="" aria-labelledby="label_295"></textarea>
                        </div>
                    </li>
                    <li class="form-line jf-required" data-type="control_radio" id="id_293"><label
                            class="form-label form-label-top" id="label_293" aria-hidden="false"> Is the patient have
                            any DRUG allergies?<span class="form-required">*</span> </label>
                        <div id="cid_293" class="form-input-wide jf-required" data-layout="full">
                            <div class="form-multiple-column" data-columncount="2" role="group"
                                aria-labelledby="label_293" data-component="radio"><span class="form-radio-item"><span
                                        class="dragger-item"></span><input type="radio" aria-describedby="label_293"
                                        class="form-radio validate[required]" id="input_293_0" name="q293_isThe293"
                                        value="Yes" required="" /><label id="label_input_293_0"
                                        for="input_293_0">Yes</label></span><span class="form-radio-item"><span
                                        class="dragger-item"></span><input type="radio" aria-describedby="label_293"
                                        class="form-radio validate[required]" id="input_293_1" name="q293_isThe293"
                                        value="No" required="" /><label id="label_input_293_1"
                                        for="input_293_1">No</label></span></div>
                        </div>
                    </li>
                    <li class="form-line jf-required form-field-hidden" style="display:none;"
                        data-type="control_textarea" id="id_294"><label class="form-label form-label-top"
                            id="label_294" for="input_294" aria-hidden="false">
                            Specify Drug Allergies<span class="form-required">*</span> </label>
                        <div id="cid_294" class="form-input-wide jf-required" data-layout="full">
                            <textarea id="input_294" class="form-textarea validate[required, AlphaNumeric]" name="q294_specifyDrug"
                                style="width:648px;height:163px" data-component="textarea" required="" aria-labelledby="label_294"></textarea>
                        </div>
                    </li>
                    <li class="form-line jf-required" data-type="control_radio" id="id_298"><label
                            class="form-label form-label-top" id="label_298" aria-hidden="false"> Does the patient
                            smoke?<span class="form-required">*</span> </label>
                        <div id="cid_298" class="form-input-wide jf-required" data-layout="full">
                            <div class="form-multiple-column" data-columncount="2" role="group"
                                aria-labelledby="label_298" data-component="radio"><span class="form-radio-item"><span
                                        class="dragger-item"></span><input type="radio" aria-describedby="label_298"
                                        class="form-radio validate[required]" id="input_298_0" name="q298_doesThe298"
                                        value="Yes" required="" /><label id="label_input_298_0"
                                        for="input_298_0">Yes</label></span><span class="form-radio-item"><span
                                        class="dragger-item"></span><input type="radio" aria-describedby="label_298"
                                        class="form-radio validate[required]" id="input_298_1" name="q298_doesThe298"
                                        value="No" required="" /><label id="label_input_298_1"
                                        for="input_298_1">No</label></span></div>
                        </div>
                    </li>
                    <li class="form-line jf-required" data-type="control_radio" id="id_299"><label
                            class="form-label form-label-top" id="label_299" aria-hidden="false"> Does the patient
                            drink alcohol?<span class="form-required">*</span>
                        </label>
                        <div id="cid_299" class="form-input-wide jf-required" data-layout="full">
                            <div class="form-multiple-column" data-columncount="2" role="group"
                                aria-labelledby="label_299" data-component="radio"><span class="form-radio-item"><span
                                        class="dragger-item"></span><input type="radio" aria-describedby="label_299"
                                        class="form-radio validate[required]" id="input_299_0" name="q299_doesThe299"
                                        value="Yes" required="" /><label id="label_input_299_0"
                                        for="input_299_0">Yes</label></span><span class="form-radio-item"><span
                                        class="dragger-item"></span><input type="radio" aria-describedby="label_299"
                                        class="form-radio validate[required]" id="input_299_1" name="q299_doesThe299"
                                        value="No" required="" /><label id="label_input_299_1"
                                        for="input_299_1">No</label></span></div>
                        </div>
                    </li>
                    <li class="form-line form-line-column form-col-1 form-line-column-clear jf-required"
                        data-type="control_checkbox" id="id_321"><label class="form-label form-label-top"
                            id="label_321" aria-hidden="false"> Family History<span class="form-required">*</span>
                        </label>
                        <div id="cid_321" class="form-input-wide jf-required" data-layout="full">
                            <div class="form-multiple-column" data-columncount="3" role="group"
                                aria-labelledby="label_321" data-component="checkbox"><span
                                    class="form-checkbox-item"><span class="dragger-item"></span><input
                                        type="checkbox" aria-describedby="label_321"
                                        class="form-checkbox validate[required]" id="input_321_0"
                                        name="q321_familyHistory321[]" value="Alzheimer&#x27;s Disease"
                                        required="" /><label id="label_input_321_0" for="input_321_0">Alzheimer's
                                        Disease</label></span><span class="form-checkbox-item"><span
                                        class="dragger-item"></span><input type="checkbox"
                                        aria-describedby="label_321" class="form-checkbox validate[required]"
                                        id="input_321_1" name="q321_familyHistory321[]" value="Asthma"
                                        required="" /><label id="label_input_321_1"
                                        for="input_321_1">Asthma</label></span><span class="form-checkbox-item"><span
                                        class="dragger-item"></span><input type="checkbox"
                                        aria-describedby="label_321" class="form-checkbox validate[required]"
                                        id="input_321_2" name="q321_familyHistory321[]" value="Cancer"
                                        required="" /><label id="label_input_321_2"
                                        for="input_321_2">Cancer</label></span><span class="form-checkbox-item"
                                    style="clear:left"><span class="dragger-item"></span><input type="checkbox"
                                        aria-describedby="label_321" class="form-checkbox validate[required]"
                                        id="input_321_3" name="q321_familyHistory321[]" value="Diabetes"
                                        required="" /><label id="label_input_321_3"
                                        for="input_321_3">Diabetes</label></span><span class="form-checkbox-item"><span
                                        class="dragger-item"></span><input type="checkbox"
                                        aria-describedby="label_321" class="form-checkbox validate[required]"
                                        id="input_321_4" name="q321_familyHistory321[]" value="Heart Disease"
                                        required="" /><label id="label_input_321_4" for="input_321_4">Heart
                                        Disease</label></span><span class="form-checkbox-item"><span
                                        class="dragger-item"></span><input type="checkbox"
                                        aria-describedby="label_321" class="form-checkbox validate[required]"
                                        id="input_321_5" name="q321_familyHistory321[]" value="Hypertension"
                                        required="" /><label id="label_input_321_5"
                                        for="input_321_5">Hypertension</label></span><span class="form-checkbox-item"
                                    style="clear:left"><span class="dragger-item"></span><input type="checkbox"
                                        aria-describedby="label_321" class="form-checkbox validate[required]"
                                        id="input_321_6" name="q321_familyHistory321[]" value="Obesity"
                                        required="" /><label id="label_input_321_6"
                                        for="input_321_6">Obesity</label></span><span class="form-checkbox-item"><span
                                        class="dragger-item"></span><input type="checkbox"
                                        aria-describedby="label_321" class="form-checkbox validate[required]"
                                        id="input_321_7" name="q321_familyHistory321[]" value="Osteoporosis"
                                        required="" /><label id="label_input_321_7"
                                        for="input_321_7">Osteoporosis</label></span><span
                                    class="form-checkbox-item"><span class="dragger-item"></span><input
                                        type="checkbox" aria-describedby="label_321"
                                        class="form-checkbox validate[required]" id="input_321_8"
                                        name="q321_familyHistory321[]" value="Stroke" required="" /><label
                                        id="label_input_321_8" for="input_321_8">Stroke</label></span><span
                                    class="form-checkbox-item" style="clear:left"><span
                                        class="dragger-item"></span><input type="checkbox"
                                        aria-describedby="label_321" class="form-checkbox validate[required]"
                                        id="input_321_9" name="q321_familyHistory321[]" value="Mental Disorders"
                                        required="" /><label id="label_input_321_9" for="input_321_9">Mental
                                        Disorders</label></span><span class="form-checkbox-item"><span
                                        class="dragger-item"></span><input type="checkbox"
                                        aria-describedby="label_321" class="form-checkbox validate[required]"
                                        id="input_321_10" name="q321_familyHistory321[]" value="Substance Abuse"
                                        required="" /><label id="label_input_321_10" for="input_321_10">Substance
                                        Abuse</label></span><span class="form-checkbox-item formCheckboxOther"><input
                                        type="checkbox" class="form-checkbox-other form-checkbox validate[required]"
                                        name="q321_familyHistory321[other]" id="other_321" value="other"
                                        tabindex="0" aria-label="Other" /><label id="label_other_321"
                                        style="text-indent:0" for="other_321">Other</label><span id="other_321_input"
                                        class="other-input-container" style="display:none"><input type="text"
                                            class="form-checkbox-other-input form-textbox"
                                            name="q321_familyHistory321[other]" data-otherhint="Other" size="15"
                                            id="input_321" data-placeholder="Please type another option here"
                                            placeholder="Please type another option here" /></span></span></div>
                        </div>
                    </li>
                    <li id="cid_358" class="form-input-wide" data-type="control_pagebreak">
                        <div class="form-pagebreak" data-component="pagebreak">
                            <div class="form-pagebreak-back-container"><button id="form-pagebreak-back_358"
                                    type="button"
                                    class="form-pagebreak-back  form-submit-button-navy-700 jf-form-buttons"
                                    data-component="pagebreak-back">Back</button></div>
                            <div class="form-pagebreak-next-container"><button id="form-pagebreak-next_358"
                                    type="button"
                                    class="form-pagebreak-next  form-submit-button-navy-700 jf-form-buttons"
                                    data-component="pagebreak-next">Next</button></div>
                            <div style="clear:both" class="pageInfo form-sub-label" id="pageInfo_358"></div>
                        </div>
                    </li>
                </ul>
                <ul class="form-section page-section" style="display:none;">
                    <li id="cid_266" class="form-input-wide" data-type="control_head">
                        <div class="form-header-group  header-default">
                            <div class="header-text httal htvam">
                                <h2 id="header_266" class="form-header" data-component="header">Insurance Information
                                </h2>
                            </div>
                        </div>
                    </li>
                    <li class="form-line jf-required" data-type="control_radio" id="id_307"><label
                            class="form-label form-label-top" id="label_307" aria-hidden="false"> Is the patient the
                            Primary Card Holder?<span class="form-required">*</span> </label>
                        <div id="cid_307" class="form-input-wide jf-required" data-layout="full">
                            <div class="form-multiple-column" data-columncount="2" role="group"
                                aria-labelledby="label_307" data-component="radio"><span class="form-radio-item"><span
                                        class="dragger-item"></span><input type="radio" aria-describedby="label_307"
                                        class="form-radio validate[required]" id="input_307_0" name="q307_isThe307"
                                        checked="" value="Yes" required="" /><label id="label_input_307_0"
                                        for="input_307_0">Yes</label></span><span class="form-radio-item"><span
                                        class="dragger-item"></span><input type="radio" aria-describedby="label_307"
                                        class="form-radio validate[required]" id="input_307_1" name="q307_isThe307"
                                        value="No" required="" /><label id="label_input_307_1"
                                        for="input_307_1">No</label></span></div>
                        </div>
                    </li>
                    <li class="form-line form-line-column form-col-1 jf-required" data-type="control_textbox"
                        id="id_267"><label class="form-label form-label-top form-label-auto" id="label_267"
                            for="input_267" aria-hidden="false">
                            Insurance Company<span class="form-required">*</span> </label>
                        <div id="cid_267" class="form-input-wide jf-required" data-layout="half"> <input
                                type="text" id="input_267" name="q267_insuranceCompany" data-type="input-textbox"
                                class="form-textbox validate[required, Alphabetic]" data-defaultvalue=""
                                style="width:310px" size="310" placeholder="Company Name"
                                data-component="textbox" aria-labelledby="label_267" required=""
                                value="" /> </div>
                    </li>
                    <li class="form-line form-line-column form-col-2 jf-required" data-type="control_textbox"
                        id="id_342"><label class="form-label form-label-top form-label-auto" id="label_342"
                            for="input_342" aria-hidden="false">
                            Insurance ID<span class="form-required">*</span> </label>
                        <div id="cid_342" class="form-input-wide jf-required" data-layout="half"> <input
                                type="text" id="input_342" name="q342_insuranceId342" data-type="input-textbox"
                                class="form-textbox validate[required, AlphaNumeric]" data-defaultvalue=""
                                style="width:310px" size="310" placeholder="ID Number" data-component="textbox"
                                aria-labelledby="label_342" required="" value="" /> </div>
                    </li>
                    <li class="form-line form-line-column form-col-3 jf-required" data-type="control_datetime"
                        id="id_314"><label class="form-label form-label-top form-label-auto" id="label_314"
                            for="lite_mode_314" aria-hidden="false">
                            Effective Date<span class="form-required">*</span> </label>
                        <div id="cid_314" class="form-input-wide jf-required" data-layout="half">
                            <div data-wrapper-react="true">
                                <div style="display:none"><span class="form-sub-label-container"
                                        style="vertical-align:top"><input type="tel"
                                            class="form-textbox validate[required, limitDate]" id="month_314"
                                            name="q314_effectiveDate[month]" size="2" data-maxlength="2"
                                            data-age="" maxLength="2" value="" required=""
                                            autoComplete="off" aria-labelledby="label_314 sublabel_314_month" /><span
                                            class="date-separate" aria-hidden="true"> -</span><label
                                            class="form-sub-label" for="month_314" id="sublabel_314_month"
                                            style="min-height:13px">Month</label></span><span
                                        class="form-sub-label-container" style="vertical-align:top"><input
                                            type="tel" class="form-textbox validate[required, limitDate]"
                                            id="day_314" name="q314_effectiveDate[day]" size="2"
                                            data-maxlength="2" data-age="" maxLength="2" value=""
                                            required="" autoComplete="off"
                                            aria-labelledby="label_314 sublabel_314_day" /><span class="date-separate"
                                            aria-hidden="true"> -</span><label class="form-sub-label" for="day_314"
                                            id="sublabel_314_day" style="min-height:13px">Day</label></span><span
                                        class="form-sub-label-container" style="vertical-align:top"><input
                                            type="tel" class="form-textbox validate[required, limitDate]"
                                            id="year_314" name="q314_effectiveDate[year]" size="4"
                                            data-maxlength="4" data-age="" maxLength="4" value=""
                                            required="" autoComplete="off"
                                            aria-labelledby="label_314 sublabel_314_year" /><label
                                            class="form-sub-label" for="year_314" id="sublabel_314_year"
                                            style="min-height:13px">Year</label></span></div><span
                                    class="form-sub-label-container" style="vertical-align:top"><input type="text"
                                        class="form-textbox validate[required, limitDate, validateLiteDate]"
                                        id="lite_mode_314" size="12" data-maxlength="12" maxLength="12"
                                        data-age="" value="" required="" data-format="mmddyyyy"
                                        data-seperator="-" placeholder="MM-DD-YYYY" data-placeholder="MM-DD-YYYY"
                                        autoComplete="off" aria-labelledby="label_314" /><img
                                        class="showAutoCalendar newDefaultTheme-dateIcon icon-liteMode"
                                        alt="Pick a Date" id="input_314_pick"
                                        src="https://cdn.jotfor.ms/images/calendar.png" data-component="datetime"
                                        aria-hidden="true" data-allow-time="No" data-version="v2" /><label
                                        class="form-sub-label is-empty" for="lite_mode_314" id="sublabel_314_litemode"
                                        style="min-height:13px"></label></span>
                            </div>
                        </div>
                    </li>
                    <li class="form-line form-line-column form-col-4 jf-required" data-type="control_datetime"
                        id="id_315"><label class="form-label form-label-top form-label-auto" id="label_315"
                            for="lite_mode_315" aria-hidden="false">
                            Expiration Date<span class="form-required">*</span> </label>
                        <div id="cid_315" class="form-input-wide jf-required" data-layout="half">
                            <div data-wrapper-react="true">
                                <div style="display:none"><span class="form-sub-label-container"
                                        style="vertical-align:top"><input type="tel"
                                            class="form-textbox validate[required, limitDate]" id="month_315"
                                            name="q315_expirationDate315[month]" size="2" data-maxlength="2"
                                            data-age="" maxLength="2" value="" required=""
                                            autoComplete="off" aria-labelledby="label_315 sublabel_315_month" /><span
                                            class="date-separate" aria-hidden="true"> -</span><label
                                            class="form-sub-label" for="month_315" id="sublabel_315_month"
                                            style="min-height:13px">Month</label></span><span
                                        class="form-sub-label-container" style="vertical-align:top"><input
                                            type="tel" class="form-textbox validate[required, limitDate]"
                                            id="day_315" name="q315_expirationDate315[day]" size="2"
                                            data-maxlength="2" data-age="" maxLength="2" value=""
                                            required="" autoComplete="off"
                                            aria-labelledby="label_315 sublabel_315_day" /><span class="date-separate"
                                            aria-hidden="true"> -</span><label class="form-sub-label" for="day_315"
                                            id="sublabel_315_day" style="min-height:13px">Day</label></span><span
                                        class="form-sub-label-container" style="vertical-align:top"><input
                                            type="tel" class="form-textbox validate[required, limitDate]"
                                            id="year_315" name="q315_expirationDate315[year]" size="4"
                                            data-maxlength="4" data-age="" maxLength="4" value=""
                                            required="" autoComplete="off"
                                            aria-labelledby="label_315 sublabel_315_year" /><label
                                            class="form-sub-label" for="year_315" id="sublabel_315_year"
                                            style="min-height:13px">Year</label></span></div><span
                                    class="form-sub-label-container" style="vertical-align:top"><input type="text"
                                        class="form-textbox validate[required, limitDate, validateLiteDate]"
                                        id="lite_mode_315" size="12" data-maxlength="12" maxLength="12"
                                        data-age="" value="" required="" data-format="mmddyyyy"
                                        data-seperator="-" placeholder="MM-DD-YYYY" data-placeholder="MM-DD-YYYY"
                                        autoComplete="off" aria-labelledby="label_315" /><img
                                        class="showAutoCalendar newDefaultTheme-dateIcon icon-liteMode"
                                        alt="Pick a Date" id="input_315_pick"
                                        src="https://cdn.jotfor.ms/images/calendar.png" data-component="datetime"
                                        aria-hidden="true" data-allow-time="No" data-version="v2" /><label
                                        class="form-sub-label is-empty" for="lite_mode_315" id="sublabel_315_litemode"
                                        style="min-height:13px"></label></span>
                            </div>
                        </div>
                    </li>
                    <li class="form-line jf-required" data-type="control_radio" id="id_348"><label
                            class="form-label form-label-top" id="label_348" aria-hidden="false"> Insurance Type
                            Plan<span class="form-required">*</span> </label>
                        <div id="cid_348" class="form-input-wide jf-required" data-layout="full">
                            <div class="form-multiple-column" data-columncount="2" role="group"
                                aria-labelledby="label_348" data-component="radio"><span class="form-radio-item"><span
                                        class="dragger-item"></span><input type="radio" aria-describedby="label_348"
                                        class="form-radio validate[required]" id="input_348_0"
                                        name="q348_insuranceType" value="HMO (Health Maintenance Organization)"
                                        required="" /><label id="label_input_348_0" for="input_348_0">HMO (Health
                                        Maintenance Organization)</label></span><span class="form-radio-item"><span
                                        class="dragger-item"></span><input type="radio" aria-describedby="label_348"
                                        class="form-radio validate[required]" id="input_348_1"
                                        name="q348_insuranceType" value="PPO (Preferred Provider Organization)"
                                        required="" /><label id="label_input_348_1" for="input_348_1">PPO
                                        (Preferred Provider Organization)</label></span><span class="form-radio-item"
                                    style="clear:left"><span class="dragger-item"></span><input type="radio"
                                        aria-describedby="label_348" class="form-radio validate[required]"
                                        id="input_348_2" name="q348_insuranceType"
                                        value="EPO (Exclusive Provider Organization)" required="" /><label
                                        id="label_input_348_2" for="input_348_2">EPO (Exclusive Provider
                                        Organization)</label></span><span class="form-radio-item"><span
                                        class="dragger-item"></span><input type="radio" aria-describedby="label_348"
                                        class="form-radio validate[required]" id="input_348_3"
                                        name="q348_insuranceType" value="HDHP (High Deductible Health Plan)"
                                        required="" /><label id="label_input_348_3" for="input_348_3">HDHP (High
                                        Deductible Health Plan)</label></span><span
                                    class="form-radio-item formRadioOther"><input type="radio"
                                        class="form-radio-other form-radio validate[required]" name="q348_insuranceType"
                                        id="other_348" value="other" tabindex="0" aria-label="Other" /><label
                                        id="label_other_348" style="text-indent:0" for="other_348">Other</label><span
                                        id="other_348_input" class="other-input-container" style="display:none"><input
                                            type="text" class="form-radio-other-input form-textbox"
                                            name="q348_insuranceType[other]" data-otherhint="Other" size="15"
                                            id="input_348" data-placeholder="Please type another option here"
                                            placeholder="Please type another option here" /></span></span></div>
                        </div>
                    </li>
                    <li class="form-line jf-required form-field-hidden" style="display:none;"
                        data-type="control_radio" id="id_343">
                        <label class="form-label form-label-top" id="label_343" aria-hidden="false"> Does the Patient
                            have another
                            insurance?<span class="form-required">*</span> </label>
                        <div id="cid_343" class="form-input-wide jf-required" data-layout="full">
                            <div class="form-multiple-column" data-columncount="2" role="group"
                                aria-labelledby="label_343" data-component="radio"><span class="form-radio-item"><span
                                        class="dragger-item"></span><input type="radio" aria-describedby="label_343"
                                        class="form-radio validate[required]" id="input_343_0" name="q343_isThe343"
                                        checked="" value="No" required="" /><label id="label_input_343_0"
                                        for="input_343_0">No</label></span><span class="form-radio-item"><span
                                        class="dragger-item"></span><input type="radio" aria-describedby="label_343"
                                        class="form-radio validate[required]" id="input_343_1" name="q343_isThe343"
                                        value="Yes" required="" /><label id="label_input_343_1"
                                        for="input_343_1">Yes</label></span></div>
                        </div>
                    </li>
                    <li class="form-line form-line-column form-col-1 jf-required form-field-hidden"
                        style="display:none;" data-type="control_textbox" id="id_341"><label
                            class="form-label form-label-top form-label-auto" id="label_341" for="input_341"
                            aria-hidden="false"> Insurance Company<span class="form-required">*</span>
                        </label>
                        <div id="cid_341" class="form-input-wide jf-required" data-layout="half"> <input
                                type="text" id="input_341" name="q341_insuranceCompany341"
                                data-type="input-textbox" class="form-textbox validate[required, Alphabetic]"
                                data-defaultvalue="" style="width:310px" size="310" placeholder="Company Name"
                                data-component="textbox" aria-labelledby="label_341" required=""
                                value="" />
                        </div>
                    </li>
                    <li class="form-line form-line-column form-col-2 jf-required form-field-hidden"
                        style="display:none;" data-type="control_textbox" id="id_268"><label
                            class="form-label form-label-top form-label-auto" id="label_268" for="input_268"
                            aria-hidden="false"> Insurance ID<span class="form-required">*</span>
                        </label>
                        <div id="cid_268" class="form-input-wide jf-required" data-layout="half"> <input
                                type="text" id="input_268" name="q268_insuranceId" data-type="input-textbox"
                                class="form-textbox validate[required, AlphaNumeric]" data-defaultvalue=""
                                style="width:310px" size="310" placeholder="ID Number" data-component="textbox"
                                aria-labelledby="label_268" required="" value="" /> </div>
                    </li>
                    <li class="form-line form-line-column form-col-3 jf-required form-field-hidden"
                        style="display:none;" data-type="control_datetime" id="id_344"><label
                            class="form-label form-label-top form-label-auto" id="label_344" for="lite_mode_344"
                            aria-hidden="false"> Effective Date<span class="form-required">*</span>
                        </label>
                        <div id="cid_344" class="form-input-wide jf-required" data-layout="half">
                            <div data-wrapper-react="true">
                                <div style="display:none"><span class="form-sub-label-container"
                                        style="vertical-align:top"><input type="tel"
                                            class="form-textbox validate[required, limitDate]" id="month_344"
                                            name="q344_effectiveDate344[month]" size="2" data-maxlength="2"
                                            data-age="" maxLength="2" value="" required=""
                                            autoComplete="off" aria-labelledby="label_344 sublabel_344_month" /><span
                                            class="date-separate" aria-hidden="true"> -</span><label
                                            class="form-sub-label" for="month_344" id="sublabel_344_month"
                                            style="min-height:13px">Month</label></span><span
                                        class="form-sub-label-container" style="vertical-align:top"><input
                                            type="tel" class="form-textbox validate[required, limitDate]"
                                            id="day_344" name="q344_effectiveDate344[day]" size="2"
                                            data-maxlength="2" data-age="" maxLength="2" value=""
                                            required="" autoComplete="off"
                                            aria-labelledby="label_344 sublabel_344_day" /><span class="date-separate"
                                            aria-hidden="true"> -</span><label class="form-sub-label" for="day_344"
                                            id="sublabel_344_day" style="min-height:13px">Day</label></span><span
                                        class="form-sub-label-container" style="vertical-align:top"><input
                                            type="tel" class="form-textbox validate[required, limitDate]"
                                            id="year_344" name="q344_effectiveDate344[year]" size="4"
                                            data-maxlength="4" data-age="" maxLength="4" value=""
                                            required="" autoComplete="off"
                                            aria-labelledby="label_344 sublabel_344_year" /><label
                                            class="form-sub-label" for="year_344" id="sublabel_344_year"
                                            style="min-height:13px">Year</label></span></div><span
                                    class="form-sub-label-container" style="vertical-align:top"><input type="text"
                                        class="form-textbox validate[required, limitDate, validateLiteDate]"
                                        id="lite_mode_344" size="12" data-maxlength="12" maxLength="12"
                                        data-age="" value="" required="" data-format="mmddyyyy"
                                        data-seperator="-" placeholder="MM-DD-YYYY" data-placeholder="MM-DD-YYYY"
                                        autoComplete="off" aria-labelledby="label_344" /><img
                                        class="showAutoCalendar newDefaultTheme-dateIcon icon-liteMode"
                                        alt="Pick a Date" id="input_344_pick"
                                        src="https://cdn.jotfor.ms/images/calendar.png" data-component="datetime"
                                        aria-hidden="true" data-allow-time="No" data-version="v2" /><label
                                        class="form-sub-label is-empty" for="lite_mode_344" id="sublabel_344_litemode"
                                        style="min-height:13px"></label></span>
                            </div>
                        </div>
                    </li>
                    <li class="form-line form-line-column form-col-4 jf-required form-field-hidden"
                        style="display:none;" data-type="control_datetime" id="id_345"><label
                            class="form-label form-label-top form-label-auto" id="label_345" for="lite_mode_345"
                            aria-hidden="false"> Expiration Date<span class="form-required">*</span>
                        </label>
                        <div id="cid_345" class="form-input-wide jf-required" data-layout="half">
                            <div data-wrapper-react="true">
                                <div style="display:none"><span class="form-sub-label-container"
                                        style="vertical-align:top"><input type="tel"
                                            class="form-textbox validate[required, limitDate]" id="month_345"
                                            name="q345_expirationDate[month]" size="2" data-maxlength="2"
                                            data-age="" maxLength="2" value="" required=""
                                            autoComplete="off" aria-labelledby="label_345 sublabel_345_month" /><span
                                            class="date-separate" aria-hidden="true"> -</span><label
                                            class="form-sub-label" for="month_345" id="sublabel_345_month"
                                            style="min-height:13px">Month</label></span><span
                                        class="form-sub-label-container" style="vertical-align:top"><input
                                            type="tel" class="form-textbox validate[required, limitDate]"
                                            id="day_345" name="q345_expirationDate[day]" size="2"
                                            data-maxlength="2" data-age="" maxLength="2" value=""
                                            required="" autoComplete="off"
                                            aria-labelledby="label_345 sublabel_345_day" /><span class="date-separate"
                                            aria-hidden="true"> -</span><label class="form-sub-label" for="day_345"
                                            id="sublabel_345_day" style="min-height:13px">Day</label></span><span
                                        class="form-sub-label-container" style="vertical-align:top"><input
                                            type="tel" class="form-textbox validate[required, limitDate]"
                                            id="year_345" name="q345_expirationDate[year]" size="4"
                                            data-maxlength="4" data-age="" maxLength="4" value=""
                                            required="" autoComplete="off"
                                            aria-labelledby="label_345 sublabel_345_year" /><label
                                            class="form-sub-label" for="year_345" id="sublabel_345_year"
                                            style="min-height:13px">Year</label></span></div><span
                                    class="form-sub-label-container" style="vertical-align:top"><input type="text"
                                        class="form-textbox validate[required, limitDate, validateLiteDate]"
                                        id="lite_mode_345" size="12" data-maxlength="12" maxLength="12"
                                        data-age="" value="" required="" data-format="mmddyyyy"
                                        data-seperator="-" placeholder="MM-DD-YYYY" data-placeholder="MM-DD-YYYY"
                                        autoComplete="off" aria-labelledby="label_345" /><img
                                        class="showAutoCalendar newDefaultTheme-dateIcon icon-liteMode"
                                        alt="Pick a Date" id="input_345_pick"
                                        src="https://cdn.jotfor.ms/images/calendar.png" data-component="datetime"
                                        aria-hidden="true" data-allow-time="No" data-version="v2" /><label
                                        class="form-sub-label is-empty" for="lite_mode_345" id="sublabel_345_litemode"
                                        style="min-height:13px"></label></span>
                            </div>
                        </div>
                    </li>
                    <li class="form-line jf-required form-field-hidden" style="display:none;"
                        data-type="control_radio" id="id_347">
                        <label class="form-label form-label-top" id="label_347" aria-hidden="false"> Insurance Type
                            Plan<span class="form-required">*</span> </label>
                        <div id="cid_347" class="form-input-wide jf-required" data-layout="full">
                            <div class="form-multiple-column" data-columncount="2" role="group"
                                aria-labelledby="label_347" data-component="radio"><span class="form-radio-item"><span
                                        class="dragger-item"></span><input type="radio" aria-describedby="label_347"
                                        class="form-radio validate[required]" id="input_347_0" name="q347_typeA347"
                                        value="HMO (Health Maintenance Organization)" required="" /><label
                                        id="label_input_347_0" for="input_347_0">HMO (Health Maintenance
                                        Organization)</label></span><span class="form-radio-item"><span
                                        class="dragger-item"></span><input type="radio" aria-describedby="label_347"
                                        class="form-radio validate[required]" id="input_347_1" name="q347_typeA347"
                                        value="PPO (Preferred Provider Organization)" required="" /><label
                                        id="label_input_347_1" for="input_347_1">PPO (Preferred Provider
                                        Organization)</label></span><span class="form-radio-item"
                                    style="clear:left"><span class="dragger-item"></span><input type="radio"
                                        aria-describedby="label_347" class="form-radio validate[required]"
                                        id="input_347_2" name="q347_typeA347"
                                        value="EPO (Exclusive Provider Organization)" required="" /><label
                                        id="label_input_347_2" for="input_347_2">EPO (Exclusive Provider
                                        Organization)</label></span><span class="form-radio-item"><span
                                        class="dragger-item"></span><input type="radio" aria-describedby="label_347"
                                        class="form-radio validate[required]" id="input_347_3" name="q347_typeA347"
                                        value="HDHP (High Deductible Health Plan)" required="" /><label
                                        id="label_input_347_3" for="input_347_3">HDHP (High Deductible Health
                                        Plan)</label></span><span class="form-radio-item formRadioOther"><input
                                        type="radio" class="form-radio-other form-radio validate[required]"
                                        name="q347_typeA347" id="other_347" value="other" tabindex="0"
                                        aria-label="Other" /><label id="label_other_347" style="text-indent:0"
                                        for="other_347">Other</label><span id="other_347_input"
                                        class="other-input-container" style="display:none"><input type="text"
                                            class="form-radio-other-input form-textbox" name="q347_typeA347[other]"
                                            data-otherhint="Other" size="15" id="input_347"
                                            data-placeholder="Please type another option here"
                                            placeholder="Please type another option here" /></span></span></div>
                        </div>
                    </li>
                    <li class="form-line form-line-column form-col-1 jf-required form-field-hidden"
                        style="display:none;" data-type="control_fullname" id="id_269"
                        data-compound-hint="First Name,Last Name"><label
                            class="form-label form-label-top form-label-auto" id="label_269" for="first_269"
                            aria-hidden="false"> Card
                            Holder's Name<span class="form-required">*</span> </label>
                        <div id="cid_269" class="form-input-wide jf-required" data-layout="full">
                            <div data-wrapper-react="true"><span class="form-sub-label-container"
                                    style="vertical-align:top" data-input-type="first"><input type="text"
                                        id="first_269" name="q269_cardHolders269[first]"
                                        class="form-textbox validate[required]" data-defaultvalue=""
                                        autoComplete="section-input_269 given-name" size="10"
                                        placeholder="First Name" data-component="first" aria-labelledby="label_269"
                                        required="" value="" /></span><span class="form-sub-label-container"
                                    style="vertical-align:top" data-input-type="last"><input type="text"
                                        id="last_269" name="q269_cardHolders269[last]"
                                        class="form-textbox validate[required]" data-defaultvalue=""
                                        autoComplete="section-input_269 family-name" size="15"
                                        placeholder="Last Name" data-component="last" aria-labelledby="label_269"
                                        required="" value="" /></span></div>
                        </div>
                    </li>
                    <li class="form-line form-line-column form-col-2 jf-required form-field-hidden"
                        style="display:none;" data-type="control_datetime" id="id_270"><label
                            class="form-label form-label-top form-label-auto" id="label_270" for="lite_mode_270"
                            aria-hidden="false"> Card Holder's Date of Birth<span class="form-required">*</span>
                        </label>
                        <div id="cid_270" class="form-input-wide jf-required" data-layout="half">
                            <div data-wrapper-react="true">
                                <div style="display:none"><span class="form-sub-label-container"
                                        style="vertical-align:top"><input type="tel"
                                            class="form-textbox validate[required, limitDate]" id="month_270"
                                            name="q270_dateOf308[month]" size="2" data-maxlength="2"
                                            data-age="" maxLength="2" value="" required=""
                                            autoComplete="off" aria-labelledby="label_270 sublabel_270_month" /><span
                                            class="date-separate" aria-hidden="true"> /</span><label
                                            class="form-sub-label" for="month_270" id="sublabel_270_month"
                                            style="min-height:13px">Month</label></span><span
                                        class="form-sub-label-container" style="vertical-align:top"><input
                                            type="tel" class="form-textbox validate[required, limitDate]"
                                            id="day_270" name="q270_dateOf308[day]" size="2"
                                            data-maxlength="2" data-age="" maxLength="2" value=""
                                            required="" autoComplete="off"
                                            aria-labelledby="label_270 sublabel_270_day" /><span class="date-separate"
                                            aria-hidden="true"> /</span><label class="form-sub-label" for="day_270"
                                            id="sublabel_270_day" style="min-height:13px">Day</label></span><span
                                        class="form-sub-label-container" style="vertical-align:top"><input
                                            type="tel" class="form-textbox validate[required, limitDate]"
                                            id="year_270" name="q270_dateOf308[year]" size="4"
                                            data-maxlength="4" data-age="" maxLength="4" value=""
                                            required="" autoComplete="off"
                                            aria-labelledby="label_270 sublabel_270_year" /><label
                                            class="form-sub-label" for="year_270" id="sublabel_270_year"
                                            style="min-height:13px">Year</label></span></div><span
                                    class="form-sub-label-container" style="vertical-align:top"><input type="text"
                                        class="form-textbox validate[required, limitDate, validateLiteDate]"
                                        id="lite_mode_270" size="12" data-maxlength="12" maxLength="12"
                                        data-age="" value="" required="" data-format="mmddyyyy"
                                        data-seperator="/" placeholder="MM/DD/YYYY" data-placeholder="MM/DD/YYYY"
                                        autoComplete="off" aria-labelledby="label_270" /><img
                                        class="showAutoCalendar newDefaultTheme-dateIcon icon-liteMode"
                                        alt="Pick a Date" id="input_270_pick"
                                        src="https://cdn.jotfor.ms/images/calendar.png" data-component="datetime"
                                        aria-hidden="true" data-allow-time="No" data-version="v2" /><label
                                        class="form-sub-label is-empty" for="lite_mode_270" id="sublabel_270_litemode"
                                        style="min-height:13px"></label></span>
                            </div>
                        </div>
                    </li>
                    <li class="form-line form-line-column form-col-3 jf-required form-field-hidden"
                        style="display:none;" data-type="control_phone" id="id_319"><label
                            class="form-label form-label-top form-label-auto" id="label_319" for="input_319_full">
                            Card Holder's Contact<span class="form-required">*</span> </label>
                        <div id="cid_319" class="form-input-wide jf-required" data-layout="half"> <span
                                class="form-sub-label-container" style="vertical-align:top"><input type="tel"
                                    id="input_319_full" name="q319_cardHolders319[full]" data-type="mask-number"
                                    class="mask-phone-number form-textbox validate[required, Fill Mask]"
                                    data-defaultvalue="" autoComplete="section-input_319 tel" style="width:310px"
                                    data-masked="true" placeholder="0000-000-0000" data-component="phone"
                                    aria-labelledby="label_319" required="" value="" /></span> </div>
                    </li>
                    <li class="form-line form-line-column form-col-4 jf-required form-field-hidden"
                        style="display:none;" data-type="control_email" id="id_320"><label
                            class="form-label form-label-top" id="label_320" for="input_320" aria-hidden="false">
                            Card Holder's Email<span class="form-required">*</span> </label>
                        <div id="cid_320" class="form-input-wide jf-required" data-layout="half"> <input
                                type="email" id="input_320" name="q320_cardHolders320"
                                class="form-textbox validate[required, Email]" data-defaultvalue=""
                                autoComplete="section-input_320 email" style="width:310px" size="310"
                                placeholder="e.g. example@example.com" data-component="email"
                                aria-labelledby="label_320" required="" value="" /> </div>
                    </li>
                    <li class="form-line jf-required form-field-hidden" style="display:none;"
                        data-type="control_address" id="id_316"
                        data-compound-hint="House No.,Street,Barangay,Municipality,,ZIP / Postal Code,,"><label
                            class="form-label form-label-top form-label-auto" id="label_316"
                            for="input_316_addr_line1" aria-hidden="false"> Card Holder's Address<span
                                class="form-required">*</span> </label>
                        <div id="cid_316" class="form-input-wide jf-required" data-layout="full">
                            <div summary="" class="form-address-table jsTest-addressField">
                                <div class="form-address-line-wrapper jsTest-address-line-wrapperField"><span
                                        class="form-address-line form-address-street-line jsTest-address-lineField"><span
                                            class="form-sub-label-container" style="vertical-align:top"><input
                                                type="text" id="input_316_addr_line1"
                                                name="q316_cardHolders[addr_line1]"
                                                class="form-textbox validate[required] form-address-line"
                                                data-defaultvalue="" autoComplete="section-input_316 address-line1"
                                                placeholder="House No." data-component="address_line_1"
                                                aria-labelledby="label_316" required=""
                                                value="" /></span></span>
                                </div>
                                <div class="form-address-line-wrapper jsTest-address-line-wrapperField"><span
                                        class="form-address-line form-address-street-line jsTest-address-lineField"><span
                                            class="form-sub-label-container" style="vertical-align:top"><input
                                                type="text" id="input_316_addr_line2"
                                                name="q316_cardHolders[addr_line2]"
                                                class="form-textbox form-address-line" data-defaultvalue=""
                                                autoComplete="section-input_316 address-line2" placeholder="Street"
                                                data-component="address_line_2" aria-labelledby="label_316"
                                                value="" /></span></span></div>
                                <div class="form-address-line-wrapper jsTest-address-line-wrapperField"><span
                                        class="form-address-line form-address-city-line jsTest-address-lineField "><span
                                            class="form-sub-label-container" style="vertical-align:top"><input
                                                type="text" id="input_316_city" name="q316_cardHolders[city]"
                                                class="form-textbox validate[required] form-address-city"
                                                data-defaultvalue="" autoComplete="section-input_316 address-level2"
                                                placeholder="Barangay" data-component="city"
                                                aria-labelledby="label_316" required=""
                                                value="" /></span></span><span
                                        class="form-address-line form-address-state-line jsTest-address-lineField "><span
                                            class="form-sub-label-container" style="vertical-align:top"><input
                                                type="text" id="input_316_state" name="q316_cardHolders[state]"
                                                class="form-textbox validate[required] form-address-state"
                                                data-defaultvalue="" autoComplete="section-input_316 address-level1"
                                                placeholder="Municipality" data-component="state"
                                                aria-labelledby="label_316" required=""
                                                value="" /></span></span></div>
                                <div class="form-address-line-wrapper jsTest-address-line-wrapperField"><span
                                        class="form-address-line form-address-zip-line jsTest-address-lineField "><span
                                            class="form-sub-label-container" style="vertical-align:top"><input
                                                type="text" id="input_316_postal" name="q316_cardHolders[postal]"
                                                class="form-textbox validate[required] form-address-postal"
                                                data-defaultvalue="" autoComplete="section-input_316 postal-code"
                                                placeholder="ZIP / Postal Code" data-component="zip"
                                                aria-labelledby="label_316" required=""
                                                value="" /></span></span></div>
                            </div>
                        </div>
                    </li>
                    <li class="form-line" data-type="control_button" id="id_349">
                        <div id="cid_349" class="form-input-wide" data-layout="full">
                            <div data-align="auto"
                                class="form-buttons-wrapper form-buttons-auto   jsTest-button-wrapperField"><button
                                    id="input_349" type="submit"
                                    class="form-submit-button form-submit-button-navy-700 submit-button jf-form-buttons jsTest-submitField"
                                    data-component="button" data-content="">Submit</button></div>
                        </div>
                    </li>
                    <li style="clear:both"></li>
                    <li style="display:none">Should be Empty: <input type="text" name="website" value=""
                            type="hidden" /></li>
                </ul>
            </div>
        </form>
        {{-- <div class="container-fluid">
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
                                        <div class="form-group">
                                            <label class="radio-inline">
                                                <input type="radio" name="optradio">Out-Patient</label>
                                            <label class="radio-inline">
                                                <input type="radio" name="optradio">In-Patient</label>
                                        </div>
                                        <div class="row form-material">
                                            <div class="col-lg-3 mb-2">
                                                <div class="form-group">
                                                    <label class="text-label">Patient Name <span
                                                            class="form-required text-danger">*</span></label>
                                                    <input type="text" name="firstName" class="form-control"
                                                        placeholder="First Name">
                                                </div>
                                            </div>
                                            <div class="col-lg-3 mb-2">
                                                <div class="form-group">
                                                    <label class="text-label">&#8203</label>
                                                    <input type="text" name="middleName" class="form-control"
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
                                                        class="form-required text-danger">*</span></label>
                                                <input type="text" class="form-control" name="dateOfBirth"
                                                    placeholder="2017-06-04" id="mdate">
                                            </div>
                                            <div class="col-lg-3 mb-4">
                                                <div class="form-group">
                                                    <label class="text-label">Sex <span
                                                            class="form-required text-danger">*</span></label>
                                                    <select class="custom-select form-control" id="" name="sex"
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
                                                    <label class="text-label">Civil Status <span
                                                            class="form-required text-danger">*</span></label>
                                                    <select class="custom-select form-control" id=""
                                                        name="civilStatus" data-component="dropdown" required=""
                                                        aria-label="Civil Status">
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
                                                            class="form-required text-danger">*</span></label>
                                                    <select class="custom-select form-control" id=""
                                                        name="employment" data-component="dropdown" required=""
                                                        aria-label="Employment">
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
                                                    <label class="text-label">Phone Number <span
                                                            class="form-required text-danger">*</span></label>
                                                    <div class="input-group">
                                                        <input type="tel" name="phoneNumber" class="form-control"
                                                            placeholder="(+63) 912-345-6780">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 mb-4">
                                                <div class="form-group">
                                                    <label class="text-label">Email Address <span
                                                            class="form-required text-danger">*</span></label>
                                                    <div class="input-group">
                                                        <input type="email" class="form-control" id="email"
                                                            placeholder="example@example.com">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 mb-2">
                                                <div class="form-group">
                                                    <label class="text-label">Religion <span
                                                            class="form-required text-danger">*</span></label>
                                                    <input type="text" name="religion" class="form-control"
                                                        placeholder="Religion">
                                                </div>
                                            </div>
                                            <div class="col-lg-3 mb-2">
                                                <div class="form-group">
                                                    <label class="text-label">Nationality <span
                                                            class="form-required text-danger">*</span></label>
                                                    <input type="text" name="nationality" class="form-control"
                                                        placeholder="Nationality">
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-4">
                                                <div class="form-group">
                                                    <label class="text-label">Permanent Address <span
                                                            class="form-required text-danger">*</span></label>
                                                    <input type="text" name="houseNumber" class="form-control"
                                                        placeholder="House No.">
                                                </div>
                                            </div>
                                            <div class="col-lg-3 mb-4">
                                                <div class="form-group">
                                                    <label class="text-label">&#8203</label>
                                                    <input type="text" name="street" class="form-control"
                                                        placeholder="Street">
                                                </div>
                                            </div>
                                            <div class="col-lg-3 mb-4">
                                                <div class="form-group">
                                                    <label class="text-label">&#8203</label>
                                                    <input type="text" name="barangay" class="form-control"
                                                        placeholder="Barangay">
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-4">
                                                <div class="form-group">
                                                    <label class="text-label">&#8203</label>
                                                    <input type="text" name="municipality" class="form-control"
                                                        placeholder="Municipality">
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-4">
                                                <div class="form-group">
                                                    <label class="text-label">&#8203</label>
                                                    <input type="text" name="zipCode" class="form-control"
                                                        placeholder="ZIP/Postal Code">
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <h4>Emergency Contact</h4>
                                    <section>
                                        <div class="row">
                                            <div class="col-lg-3 mb-2">
                                                <div class="form-group">
                                                    <label class="text-label">Emergency Contact Person <span
                                                            class="form-required text-danger">*</span></label>
                                                    <input type="text" name="firstName"
                                                        class="form-control form-control-lg" placeholder="First Name">
                                                </div>
                                            </div>
                                            <div class="col-lg-3 mb-2">
                                                <div class="form-group">
                                                    <label class="text-label">&#8203</label>
                                                    <input type="text" name="middleName"
                                                        class="form-control form-control-lg" placeholder="Middle Name">
                                                </div>
                                            </div>
                                            <div class="col-lg-3 mb-2">
                                                <div class="form-group">
                                                    <label class="text-label">&#8203</label>
                                                    <input type="text" name="lastName"
                                                        class="form-control form-control-lg" placeholder="Last Name">
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-2">
                                                <div class="form-group">
                                                    <label class="text-label">&#8203</label>
                                                    <input type="text" name="suffix"
                                                        class="form-control form-control-lg" placeholder="Ext.">
                                                </div>
                                            </div>
                                            <div class="col-lg-3 mb-2">
                                                <div class="form-group">
                                                    <label class="text-label">Relationship <span
                                                            class="form-required text-danger">*</span></label>
                                                    <input type="text" name="relationship"
                                                        class="form-control form-control-lg" placeholder="Relationship">
                                                </div>
                                            </div>
                                            <div class="col-lg-3 mb-4">
                                                <div class="form-group">
                                                    <label class="text-label">Primary Contact <span
                                                            class="form-required text-danger">*</span></label>
                                                    <div class="input-group">
                                                        <input type="text" name="primaryContact"
                                                            class="form-control form-control-lg"
                                                            placeholder="(+63) 912-345-6780">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 mb-4">
                                                <div class="form-group">
                                                    <label class="text-label">Secondary Contact </label>
                                                    <div class="input-group">
                                                        <input type="text" name="secondaryContact"
                                                            class="form-control form-control-lg"
                                                            placeholder="(+63) 912-345-6780">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 mb-4">
                                                <div class="form-group">
                                                    <label class="text-label">Email Address</label>
                                                    <div class="input-group">
                                                        <input type="email" class="form-control form-control-lg"
                                                            id="emial1" placeholder="example@example.com">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <h4>Health History</h4>
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
                                            <div class="col-xl-6">
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-username">Username
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" id="val-username"
                                                            name="val-username" placeholder="Enter a username..">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-email">Email <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" id="val-email"
                                                            name="val-email" placeholder="Your valid email..">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-password">Password
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="password" class="form-control" id="val-password"
                                                            name="val-password" placeholder="Choose a safe one..">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label"
                                                        for="val-confirm-password">Confirm Password <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="password" class="form-control"
                                                            id="val-confirm-password" name="val-confirm-password"
                                                            placeholder="..and confirm it!">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label"
                                                        for="val-suggestions">Suggestions <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <textarea class="form-control" id="val-suggestions" name="val-suggestions" rows="5"
                                                            placeholder="What would you like to see?"></textarea>
                                                    </div>
                                                </div>
                                            </div>
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
                                    <h4>Insurance Information</h4>
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
        </div> --}}
    </div>
@endsection
