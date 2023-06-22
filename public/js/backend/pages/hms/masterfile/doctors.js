$(function() {
    module_content = 'doctors';
    module_url = '/hms/doctors';
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
            $('#doctor_id').val(record.doctor_id);
            actions = 'update';

            $('.tab-list-menu-item ').removeAttr('disabled');

            break;

        case 'update':

            switch(module_content) {
                case 'patient-insurance':
                    $('#patient_insurance_table').DataTable().draw();
                    break;
               
    }
            
            break;
    }
}

function error() {}

function delete_success() {

    switch(module_content) {
        case 'doctors':
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
                sex: $('#sex').val(),
                date_of_birth: $('#date_of_birth').val(),
                nationality: $('#nationality').val(),
                contact_no: $('#contact_no').val(),
                email: $('#email').val(),
                address_line_1: $('#address_line_1').val(),
                address_line_2: $('#address_line_2').val(),
                city: $('#city').val(),
                province: $('#province').val(),
                zip_code: $('#zip_code').val(),
                country: $('#country').val(),
                address_line_1_2: $('#address_line_1_2').val(),
                address_line_2_2: $('#address_line_2_2').val(),
                city_2: $('#city_2').val(),
                province_2: $('#province_2').val(),
                zip_code_2: $('#zip_code_2').val(),
                country_2: $('#country_2').val(),
                language_spoken: $('#language_spoken').val(),
                emergency_fullname: $('#emergency_fullname').val(),
                emergency_contact_no: $('#emergency_contact_no').val(),
                emergency_relationship: $('#emergency_relationship').val(),
                medical_license_no: $('#medical_license_no').val(),
                medical_license_expiry_date: $('#medical_license_expiry_date').val(),
                medical_school: $('#medical_school').val(),
                graduation_year: $('#graduation_year').val(),
                residency_training : $('#residency_training').val(),
                fellowship_training : $('#fellowship_training').val(),
                remarks: $('#remarks').val(),
                status: $('#status').val(),
                profile_img: ($('#profile_img').val() !== ''?cropzeeGetImage('profile_img'):'')
            };
                break;
            
    }

    return form_data;
}

function generateDeleteItems() {
    switch(module_content) {
        case 'doctors':
            delete_data = [record_id];
            break;
    }
}

// EXTRA FUNCTION
function general_func() {
    module_content = 'doctors';
    module_url = '/hms/doctors';
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
            { data: "id", title:"<input type='checkbox' class='multi-checkbox' onclick='scion.table.checkAll()'/>", render: function(data, type, row, meta) {
                var html = "";
                html += '<input type="checkbox" class="single-checkbox" value="'+row.id+'" onclick="scion.table.checkOne()"/>';
                return html;
            }},
            { data: "provider", title: "PROVIDER" },
            { data: "type", title: "TYPE" },
            { data: "policy_no", title: "POLICY NO" },
            { data: "group_policy_no", title: "GROUP POLICY NO" },
            { data: "insurance_notes", title: "NOTES" },
        ], 'Bfrtip', []
    );
}
