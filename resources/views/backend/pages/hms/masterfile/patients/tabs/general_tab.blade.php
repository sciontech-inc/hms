
<div id="general_tab" class="form-tab">
    <h3>GENERAL TAB</h3>
    <div class="row">
        <div class="col-12">
            <div class="form-group">
                <div class="employee-picture">
                    <label>PATIENT PICTURE</label>
                    <div id="" onclick="$('#profile_img').click()">
                        <img src="/images/payroll/201-file/default.png" alt="" width="200px" id="viewer" class="image-previewer" data-cropzee="profile_img">
                    </div>
                    <input id="profile_img" type="file" name="profile_img" class="form-control" onchange="scion.fileView(event)" style="display:none;">
                    <button class="btn btn-primary" type="button" onclick="$('#profile_img').click()" style="width:100%;">Select Photo</button>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <div class="form-group patient_id">
                    <label>PATIENT ID <span class="required">*</span></label>
                    <input type="text" class="form-control" name="patient_id" id="patient_id"/>
                </div>
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
        <div class="col-4">
            <div class="form-group birthdate">
                <label>BIRTHDATE <span class="required">*</span></label>
                <input type="date" class="form-control" name="birthdate" id="birthdate"/>
            </div>
        </div>
        <div class="col-4">
            <div class="form-group gender">
                <label>GENDER <span class="required">*</span></label>
                <select name="gender" id="gender" class="form-control">
                    <option value="male">MALE</option>
                    <option value="female">FEMALE</option>
                </select>
            </div>
        </div>
        <div class="col-4">
            <div class="form-group citizenship">
                <label>CITIZENSHIP <span class="required">*</span></label>
                <input type="text" class="form-control" name="citizenship" id="citizenship"/>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group email">
                <label>EMAIL ADDRESS</label>
                <input type="email" class="form-control" name="email" id="email"/>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group email">
                <label>BIRTH PLACE</label>
                <input type="text" class="form-control" name="birthplace" id="birthplace"/>
            </div>
        </div>

        <div class="col-6">
             <div class="form-group marital_status">
                <label>MARITAL STATUS <span class="required">*</span></label>
                <select name="marital_status" id="marital_status" class="form-control">
                    <option value="SINGLE">SINGLE</option>
                    <option value="MARRIED">MARRIED</option>
                    <option value="DIVORCED">DIVORCED</option>
                    <option value="SEPARATED">SEPARATED</option>
                    <option value="WIDOWED">WIDOWED</option>
                </select>
            </div>
        </div>
        <div class="col-6">
            <div class="form-group body_marks">
                <label>BODY MARKS</label>
                <input type="text" class="form-control" name="body_marks" id="body_marks"/>
            </div>
        </div>
        <div class="col-6">
            <div class="form-group nationality">
                <label>NATIONALITY</label>
                <input type="text" class="form-control" name="nationality" id="nationality"/>
            </div>
        </div>
        <div class="col-6">
            <div class="form-group religion">
                <label>RELIGION</label>
                <input type="text" class="form-control" name="religion" id="religion"/>
            </div>
        </div>
        <div class="col-6">
            <div class="form-group nationality">
                <label>BLOOD TYPE</label>
                <input type="text" class="form-control" name="blood_type" id="blood_type"/>
            </div>
        </div>
        <div class="col-6">
            <div class="form-group religion">
                <label>OCCUPATION</label>
                <input type="text" class="form-control" name="occupation" id="occupation"/>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group referred_by">
                <label>REFERRED BY</label>
                <input type="text" class="form-control" name="referred_by" id="referred_by"/>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group referred_by">
                <label>REFERRED BY</label>
                <input type="text" class="form-control" name="referred_by" id="referred_by"/>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group referred_by">
                <label>REFERRED BY</label>
                <input type="text" class="form-control" name="referred_by" id="referred_by"/>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group referred_by">
                <label>REFERRED BY</label>
                <input type="text" class="form-control" name="referred_by" id="referred_by"/>
            </div>
        </div>
    </div>
</div>
