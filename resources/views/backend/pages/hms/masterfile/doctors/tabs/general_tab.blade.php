
<div id="general_tab" class="form-tab">
    <h3>GENERAL TAB</h3>
    <div class="row">
        <div class="col-12">
            <div class="form-group">
                <div class="employee-picture">
                    <label>DOCTOR PICTURE</label>
                    <div id="" onclick="$('#profile_img').click()">
                        <img src="/images/hms/doctor/default.png" alt="" width="200px" id="viewer" class="image-previewer" data-cropzee="profile_img">
                    </div>
                    <input id="profile_img" type="file" name="profile_img" class="form-control" onchange="scion.fileView(event)" style="display:none;">
                    <button class="btn btn-primary" type="button" onclick="$('#profile_img').click()" style="width:100%;">Select Photo</button>
                </div>
            </div>
        </div>
        <div class="col-6">
        <div class="form-group">
                @include('backend.partial.component.lookup', [
                    'label' => "DOCTOR ID",
                    'placeholder' => '<NEW>',
                    'id' => "doctor_id",
                    'title' => "DOCTOR ID",
                    'url' => "/hms/doctors/get",
                    'data' => array(
                        array('data' => "DT_RowIndex", 'title' => "#"),
                        array('data' => "doctor_id", 'title' => "Patient ID"),
                        array('data' => "firstname", 'title' => "First Name"),
                        array('data' => "email", 'title' => "Email"),
                    ),
                    'disable' => true,
                    'lookup_module' => 'doctors',
                    'modal_type'=> 'all',
                    'lookup_type' => 'main'
                ])
            </div>
        </div>
        <div class="col-6">
            <div class="form-group status">
                <label>STATUS <span class="required">*</span></label>
                <select name="status" id="status" class="form-control">
                    <option value="1">Active</option>
                    <option value="0">In-active</option>
                </select>
            </div>
        </div>
        <div class="col-3">
            <div class="form-group firstname">
                <label>FIRST NAME <span class="required">*</span></label>
                <input type="text" class="form-control" name="firstname" id="firstname"/>
            </div>
        </div>
        <div class="col-3">
            <div class="form-group middlename">
                <label>MIDDLE NAME</label>
                <input type="text" class="form-control" name="middlename" id="middlename"/>
            </div>
        </div>
        <div class="col-3">
            <div class="form-group lastname">
                <label>LAST NAME <span class="required">*</span></label>
                <input type="text" class="form-control" name="lastname" id="lastname"/>
            </div>
        </div>
        <div class="col-3">
            <div class="form-group suffix">
                <label>SUFFIX</label>
                <input type="text" class="form-control" name="suffix" id="suffix"/>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group email">
                <label>EMAIL ADDRESS <span class="required">*</span></label>
                <input type="email" class="form-control" name="email" id="email"/>
            </div>
        </div>
        <div class="col-4">
            <div class="form-group sex">
                <label>SEX <span class="required">*</span></label>
                <select name="sex" id="sex" class="form-control">
                    <option value="MALE">MALE</option>
                    <option value="FEMALE">FEMALE</option>
                </select>
            </div>
        </div>
        <div class="col-4">
            <div class="form-group date_of_birth">
                <label>BIRTHDATE <span class="required">*</span></label>
                <input type="date" class="form-control" name="date_of_birth" id="date_of_birth"/>
            </div>
        </div>
        <div class="col-4">
            <div class="form-group nationality">
                <label>NATIONALITY <span class="required">*</span></label>
                <input type="text" class="form-control" name="nationality" id="nationality"/>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group language_spoken">
                <label>LANGUAGE SPOKEN</label>
                <input type="text" class="form-control" name="contact_no" id="contact_no"/>
            </div>
        </div>
        <div class="col-6">
            <div class="form-group medical_license_no">
                <label>MEDICAL LICENSE NO.</label>
                <input type="text" class="form-control" name="medical_license_no" id="medical_license_no"/>
            </div>
        </div>
        <div class="col-6">
            <div class="form-group medical_license_expiry_date">
                <label>MEDICAL LICENSE EXPIRY DATE</label>
                <input type="date" class="form-control" name="medical_license_expiry_date" id="medical_license_expiry_date"/>
            </div>
        </div>
        <div class="col-6">
            <div class="form-group medical_school">
                <label>MEDICAL SCHOOL</label>
                <input type="text" class="form-control" name="medical_school" id="medical_school"/>
            </div>
        </div>
        <div class="col-6">
            <div class="form-group graduation_year">
                <label>YEAR GRADUATED</label>
                <input type="text" class="form-control" name="graduation_year" id="graduation_year"/>
            </div>
        </div>
        <div class="col-6">
            <div class="form-group residency_training">
                <label>RESIDENCY TRAINING</label>
                <input type="text" class="form-control" name="residency_training" id="residency_training"/>
            </div>
        </div>
        <div class="col-6">
            <div class="form-group fellowship_training">
                <label>FELLOWSHIP TRAINING</label>
                <input type="text" class="form-control" name="fellowship_training" id="fellowship_training"/>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group referred_by">
                <label>REMARKS</label>
                <textarea name="remarks" id="remarks" rows="3" class="form-control"></textarea>
            </div>
        </div>

        <hr>
        <div class="col-12">
            <label for="contact-address">EMERGENCY CONTACT</label>
        </div>
        <div class="col-12">
            <div class="form-group emergency_fullname">
                <label>EMERGENCY CONTACT NAME <span class="required">*</span></label>
                <input type="text" class="form-control" name="emergency_fullname" id="emergency_fullname"/>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group emergency_contact_no">
                <label>EMERGENCY CONTACT NO.</label>
                <input type="text" class="form-control" name="emergency_contact_no" id="emergency_contact_no"/>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group emergency_relationship">
                <label>EMERGENCY RELATIONSHIP</label>
                <input type="text" class="form-control" name="emergency_relationship" id="emergency_relationship"/>
            </div>
        </div>

        <hr>
        <div class="col-12">
            <label for="contact-address">CONTACT AND ADDRESSES</label>
        </div>
        <div class="col-6">
            <div class="form-group contact_number_1">
                <label>CONTACT NUMBER 1 <span class="required">*</span></label>
                <input type="text" class="form-control" name="contact_number_1" id="contact_number_1"/>
            </div>
        </div>
        <div class="col-6">
            <div class="form-group contact_number_2">
                <label>CONTACT NUMBER 2</label>
                <input type="text" class="form-control" name="contact_number_2" id="contact_number_2"/>
            </div>
        </div>
        <h3 class="col-12 form-title">ADDRESS 1</h3>
        <div class="col-4">
            <div class="form-group address_line_1">
                <label>ADDRESS LINE 1 <span class="required">*</span></label>
                <input type="text" class="form-control" name="address_line_1" id="address_line_1"/>
            </div>
        </div>
        <div class="col-4">
            <div class="form-group address_line_2">
                <label>ADDRESS LINE 1 <span class="required">*</span></label>
                <input type="text" class="form-control" name="address_line_2" id="address_line_2"/>
            </div>
        </div>
        <div class="col-4">
            <div class="form-group city">
                <label>CITY <span class="required">*</span></label>
                <input type="text" class="form-control" name="city" id="city"/>
            </div>
        </div>
        <div class="col-4">
            <div class="form-group province">
                <label>PROVINCE <span class="required">*</span></label>
                <input type="text" class="form-control" name="province" id="province"/>
            </div>
        </div>
        <div class="col-4">
            <div class="form-group country">
                <label>COUNTRY <span class="required">*</span></label>
                <input type="text" class="form-control" name="country" id="country"/>
            </div>
        </div>
        <div class="col-4">
            <div class="form-group zip_code">
                <label>ZIP CODE <span class="required">*</span></label>
                <input type="text" class="form-control" name="zip_code" id="zip_code"/>
            </div>
        </div>

        <h3 class="col-12 form-title">ADDRESS 2</h3>
        <div class="col-4">
            <div class="form-group address_line_1_2">
                <label>ADDRESS LINE 1 <span class="required">*</span></label>
                <input type="text" class="form-control" name="address_line_1_2" id="address_line_1_2"/>
            </div>
        </div>
        <div class="col-4">
            <div class="form-group address_line_2_2">
                <label>ADDRESS LINE 1 <span class="required">*</span></label>
                <input type="text" class="form-control" name="address_line_2" id="address_line_2_2"/>
            </div>
        </div>
        <div class="col-4">
            <div class="form-group city_2">
                <label>CITY <span class="required">*</span></label>
                <input type="text" class="form-control" name="city_2" id="city_2"/>
            </div>
        </div>
        <div class="col-4">
            <div class="form-group province_2">
                <label>PROVINCE <span class="required">*</span></label>
                <input type="text" class="form-control" name="province_2" id="province_2"/>
            </div>
        </div>
        <div class="col-4">
            <div class="form-group country_2">
                <label>COUNTRY <span class="required">*</span></label>
                <input type="text" class="form-control" name="country_2" id="country_2"/>
            </div>
        </div>
        <div class="col-4">
            <div class="form-group zip_code_2">
                <label>ZIP CODE <span class="required">*</span></label>
                <input type="text" class="form-control" name="zip_code_2" id="zip_code_2"/>
            </div>
        </div>
    </div>
</div>
