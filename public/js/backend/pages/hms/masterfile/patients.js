$(function() {
    module_content = 'patients';
    module_url = '/hms/patients';
    module_url_2 = '/hris/employee-information';
    tab_active = 'general';
    page_title = "";
    actions = 'save';
    module_type = 'transaction';

    scion.centralized_button(true, false, true, true);
    scion.action.tab(tab_active);

    $("#profile_img").cropzee({
        allowedInputs: ['png','jpg','jpeg']
    });
});



// DEFAULT FUNCTION
function success(record) {
    switch(actions) {
        case 'save':
            record_id = record.id;
            $('#patient_id').val(record.patient_id);
            actions = 'update';

            $('.tab-list-menu-item ').removeAttr('disabled');

            break;

        case 'update':

            switch(module_content) {
                case 'patient-insurance':
                    $('#patient_insurance_table').DataTable().draw();
                    break;
                case 'family-information':
                    $('#family_information_table').DataTable().draw();
                    break;
                case 'medical-case':
                    $('#medical_case_table').DataTable().draw();
                    break;
                case 'medicine-taken':
                    $('#medicine_taken_table').DataTable().draw();
                    break;
            }
            
            break;
    }
}

function error() {}

function delete_success() {

    switch(module_content) {
        case 'patients':
            var form_id = $('.form-record')[0].id;
            $('#'+form_id)[0].reset();
            actions = 'save';
            scion.centralized_button(true, false, true, true);

            break;
     
    }

}

function delete_error() {}

function generateData() {
    switch(module_content) {
        case 'patients':
            form_data = {
                _token: _token,
                firstname: $('#firstname').val(),
                middlename: $('#middlename').val(),
                lastname: $('#lastname').val(),
                suffix: $('#suffix').val(),
                birthdate: $('#birthdate').val(),
                sex: $('#sex').val(),
                citizenship: $('#citizenship').val(),
                email: $('#email').val(),
                birthplace: $('#birthplace').val(),
                marital_status: $('#marital_status').val(),
                body_marks: $('#body_marks').val(),
                nationality: $('#nationality').val(),
                religion: $('#religion').val(),
                blood_type: $('#blood_type').val(),
                occupation: $('#occupation').val(),
                remarks: $('#remarks').val(),
                referred_by: $('#referred_by').val(),
                contact_number_1: $('#contact_number_1').val(),
                contact_number_2: $('#contact_number_2').val(),
                street_no: $('#street_no').val(),
                barangay: $('#barangay').val(),
                city: $('#city').val(),
                province: $('#province').val(),
                country : $('#country').val(),
                zip_code : $('#zip_code').val(),
                street_no_2: $('#street_no_2').val(),
                barangay_2: $('#barangay_2').val(),
                city_2: $('#city_2').val(),
                province_2: $('#province_2').val(),
                country_2 : $('#country_2').val(),
                zip_code_2 : $('#zip_code_2').val(),
                status: $('#status').val(),
                profile_img: ($('#profile_img').val() !== ''?cropzeeGetImage('profile_img'):'')
            };
                break;
            case 'patient-insurance':
                form_data = {
                    _token: _token,
                    patient_id: record_id,
                    provider: $('#provider').val(),
                    type: $('#type').val(),
                    policy_no: $('#policy_no').val(),
                    group_policy_no: $('#group_policy_no').val(),
                    insurance_notes: $('#insurance_notes').val(),
            };
                break;
            case 'family-information':
                form_data = {
                    _token: _token,
                    patient_id: record_id,
                    family_fullname: $('#family_fullname').val(),
                    family_birthdate: $('#family_birthdate').val(),
                    family_relationship: $('#family_relationship').val(),
                    family_sex: $('#family_sex').val(),
                    family_citizenship: $('#family_citizenship').val(),
                    family_address: $('#family_address').val(),
                    family_contact_no: $('#family_contact_no').val(),
                    family_email: $('#family_email').val(),
                    family_remarks	: $('#family_remarks').val(),
            };
                break;
            case 'medical-case':
                form_data = {
                    _token: _token,
                    patient_id: record_id,
                    date_recorded: $('#date_recorded').val(),
                    chief_complaint: $('#chief_complaint').val(),
                    diagnostic_tests: $('#diagnostic_tests').val(),
                    diagnosis: $('#diagnosis').val(),
                    prognosis: $('#prognosis').val(),
                    physician_notes: $('#physician_notes').val(),
                    nursing_notes: $('#nursing_notes').val(),
                    discharge_summary: $('#discharge_summary').val(),
                    medical_case_remarks: $('#medical_case_remarks').val(),
                };
                    break;
            case 'medicine-taken':
                form_data = {
                    _token: _token,
                    patient_id: record_id,
                    medicine_name: $('#medicine_name').val(),
                    medicine_doses: $('#medicine_doses').val(),
                    routes_of_administration: $('#routes_of_administration').val(),
                    medicine_type: $('#medicine_type').val(),
                    medicine_duration: $('#medicine_duration').val(),
                    medicine_reason: $('#medicine_reason').val(),
                    medicine_compliance: $('#medicine_compliance').val(),
                    medicine_remarks: $('#medicine_remarks').val(),
                };
                    break;
    }

    return form_data;
}

function generateDeleteItems() {
    switch(module_content) {
        case 'patients':
            delete_data = [record_id];
            break;
    }
}

// EXTRA FUNCTION
function general_func() {
    module_content = 'patients';
    module_url = '/hms/patients';
    module_type = 'transaction';

    if(record_id !== '') {
        actions = 'update';
    }

    scion.centralized_button(true, false, true, true);
}


function modalShowFunction() {
    scion.centralized_button(true, false, true, true);
}

function modalHideFunction() {
    scion.centralized_button(false, true, true, true);
}

function patient_insurance_func() {
    module_content = 'patient-insurance';
    module_url = '/hms/patient-insurance';
    actions = 'update';
    module_type = 'sub_transaction';
    scion.centralized_button(true, false, true, true);

    if ($.fn.DataTable.isDataTable('#patient_insurance_table')) {
        $('#patient_insurance_table').DataTable().destroy();
    }

    scion.create.table(
        'patient_insurance_table',
        module_url + '/get/' + record_id,
        [
            { data: "provider", title: "PROVIDER" },
            { data: "type", title: "TYPE" },
            { data: "policy_no", title: "POLICY NO" },
            { data: "group_policy_no", title: "GROUP POLICY NO" },
            { data: "insurance_notes", title: "NOTES" },
        ], 'Bfrtip', []
    );
}

function family_information_func() {
    module_content = 'family-information';
    module_url = '/hms/family-information';
    actions = 'update';
    module_type = 'sub_transaction';
    scion.centralized_button(true, false, true, true);

    if ($.fn.DataTable.isDataTable('#family_information_table')) {
        $('#family_information_table').DataTable().destroy();
    }

    scion.create.table(
        'family_information_table',
        module_url + '/get/' + record_id,
        [
            { data: "family_fullname", title: "FULL NAME" },
            { data: "family_birthdate", title: "BIRTHDATE" },
            { data: "family_relationship", title: "RELATIONSHIP" },
            { data: "family_contact_no", title: "CONTACT NO" },
        ], 'Bfrtip', []
    );
}

function medical_cases_func() {
    module_content = 'medical-cases';
    module_url = '/hms/medical-cases';
    actions = 'update';
    module_type = 'sub_transaction';
    scion.centralized_button(true, false, true, true);

    if ($.fn.DataTable.isDataTable('#medical_cases_table')) {
        $('#medical_cases_table').DataTable().destroy();
    }

    scion.create.table(
        'medical_cases_table',
        module_url + '/get/' + record_id,
        [
            { data: "date_recorded", title: "DATE RECORDED" },
            { data: "chief_complaint", title: "CHIEF COMPLAINT" },
            { data: "diagnosis", title: "DIAGNOSIS" },
            { data: "prognosis", title: "PROGNOSIS" },
            { data: "discharge_summary", title: "DISCHARGE SUMMARY" },

        ], 'Bfrtip', []
    );
}

function medicine_taken_func() {
    module_content = 'medicine-taken';
    module_url = '/hms/medicine-taken';
    actions = 'update';
    module_type = 'sub_transaction';
    scion.centralized_button(true, false, true, true);

    if ($.fn.DataTable.isDataTable('#medicine_taken_table')) {
        $('#medicine_taken_table').DataTable().destroy();
    }

    scion.create.table(
        'medicine_taken_table',
        module_url + '/get/' + record_id,
        [
            { data: "medicine_name", title: "MEDICINE NAME" },
            { data: "medicine_doses", title: "MEDICINE DOSES" },
            { data: "medicine_type", title: "MEDICINE TYPE" },
            { data: "medicine_duration", title: "MEDICINE DURATION" },
            { data: "medicine_reason", title: "MEDICINE REASON" },

        ], 'Bfrtip', []
    );
}