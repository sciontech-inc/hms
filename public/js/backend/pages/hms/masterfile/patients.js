$(function() {
    module_content = 'patients';
    module_url = '/hms/patients';
    module_url_2 = '/hris/patients';
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
            $('#employee_no').val(record.employee_no);
            actions = 'update';

            $('.tab-list-menu-item ').removeAttr('disabled');

            break;


        case 'update':
            switch(module_content) {
                case 'employment-requirements':
                    break;
                case 'educational-background':
                    $('#educational_background_table').DataTable().draw();
                    break;
                case 'work-history':
                    $('#work_history_table').DataTable().draw();
                    break;
                case 'performance-records':
                    $('#performance_record_table').DataTable().draw();
                    break;
                case 'movement':
                    $('#movement_table').DataTable().draw();
                    break;
                case 'health-records':
                    $('#health_table').DataTable().draw();
                    break;
            }
            break;
    }
}

function error() {}

function delete_success() {

    switch(module_content) {
        case 'employee-information':
            var form_id = $('.form-record')[0].id;
            $('#'+form_id)[0].reset();
            actions = 'save';
            scion.centralized_button(true, false, true, true);

            break;
        case 'employment':
            $('#classes_id').val('');
            $('#position_id').val('');
            $('#department_id').val('');
            $('#employment_date').val('');
            $('#tax_rate').val('');

            actions = 'update';
            scion.centralized_button(false, false, false, true);
            break;

        case 'compensation':
            $('#government_mandated_benefits_table').DataTable().draw();
            $('#other_company_benefits_amount_table').DataTable().draw();
            scion.centralized_button(true, false, true, true);

            break;
    }

}

function delete_error() {}

function generateData() {
    switch(module_content) {
        case '201-file':
            form_data = {
                _token: _token,
                firstname: $('#firstname').val(),
                middlename: $('#middlename').val(),
                lastname: $('#lastname').val(),
                suffix: $('#suffix').val(),
                birthdate: $('#birthdate').val(),
                gender: $('#gender').val(),
                citizenship: $('#citizenship').val(),
                phone1: $('#phone1').val(),
                phone2: $('#phone2').val(),
                street_1: $('#street_1').val(),
                barangay_1: $('#barangay_1').val(),
                city_1: $('#city_1').val(),
                province_1: $('#province_1').val(),
                country_1: $('#country_1').val(),
                zip_1: $('#zip_1').val(),
                street_2: $('#street_2').val(),
                barangay_2: $('#barangay_2').val(),
                city_2: $('#city_2').val(),
                province_2: $('#province_2').val(),
                country_2: $('#country_2').val(),
                zip_2: $('#zip_2').val(),
                emergency_name: $('#emergency_name').val(),
                emergency_no: $('#emergency_no').val(),
                email : $('#email').val(),
                bank_account : $('#bank_account').val(),
                tin_number : $('#tin_number').val(),
                sss_number : $('#sss_number').val(),
                pagibig_number : $('#pagibig_number').val(),
                philhealth_number : $('#philhealth_number').val(),
                status: $('#status').val(),
                profile_img: ($('#profile_img').val() !== ''?cropzeeGetImage('profile_img'):'')
            };
            break;
        case 'employment-requirements':
            form_data = {
                _token: _token,
                employee_id: record_id,
                bank_name: $('#bank_name').val(),
                account_name: $('#account_name').val(),
                account_no: $('#account_no').val(),
            };
            break;
        case 'educational-background':
            form_data = {
                _token: _token,
                employee_id: record_id,
                educational_attainment: $('#educational_attainment').val(),
                course: $('#course').val(),
                school_year: $('#school_year').val(),
                school: $('#school').val(),
            };
            break;

        case 'work-history':
            form_data = {
                _token: _token,
                employee_id: record_id,
                company: $('#company').val(),
                position: $('#position').val(),
                date_hired: $('#date_hired').val(),
                date_of_resignation: $('#date_of_resignation').val(),
                remarks: $('#remarks').val(),
            };
            break;

        case 'performance-records':
            form_data = {
                _token: _token,
                employee_id: record_id,
                evaluation_date: $('#evaluation_date').val(),
                employee_position: $('#employee_position').val(),
                evaluation_officer: $('#evaluation_officer').val(),
                rating: $('#rating').val(),
            };
            break;

        case 'movement':
            form_data = {
                _token: _token,
                employee_id: record_id,
                filed_by: $('#filed_by').val(),
                changes: $('#changes').val(),
                effective_date: $('#effective_date').val(),
                movement_status: $('#movement_status').val(),
            };
            break;

        case 'health-records':
            form_data = {
                _token: _token,
                employee_id: record_id,
                date: $('#date').val(),
                description: $('#description').val(),
                attending_physician: $('#attending_physician').val(),
                diagnosis: $('#diagnosis').val(),
                test_result: $('#test_result').val(),
                note: $('#note').val(),
            };
            break;
    }

    return form_data;
}

function generateDeleteItems() {
    switch(module_content) {
        case '201-file':
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

function contact_addresses_func() {
    module_content = 'contact_addresses';
    module_url = '/hms/contact-addresses';
    actions = 'update';
    module_type = 'sub_transaction';
    scion.centralized_button(true, true, true, true);
}

function family_information_func() {
    module_content = 'family_information';
    module_url = '/hms/family-information';
    actions = 'update';
    module_type = 'sub_transaction';
    scion.centralized_button(true, true, true, true);
}

function medical_cases_func() {
    module_content = 'medical_cases';
    module_url = '/hms/medical-cases';
    actions = 'update';
    module_type = 'sub_transaction';
    scion.centralized_button(true, true, true, true);
}

function drugs_medicine_taken_func() {
    module_content = 'drugs_medicine_taken';
    module_url = '/hms/drugs-medicine-taken';
    actions = 'update';
    module_type = 'sub_transaction';
    scion.centralized_button(true, true, true, true);
}

function procedures_undertaken_func() {
    module_content = 'procedures_undertaken';
    module_url = '/hms/procedures-undertaken';
    actions = 'update';
    module_type = 'sub_transaction';
    scion.centralized_button(true, true, true, true);
}

function allergies_func() {
    module_content = 'allergies';
    module_url = '/hms/allergies';
    actions = 'update';
    module_type = 'sub_transaction';
    scion.centralized_button(true, true, true, true);
}

function family_medical_history_func() {
    module_content = 'family_medical_history';
    module_url = '/hms/family-medical-history';
    actions = 'update';
    module_type = 'sub_transaction';
    scion.centralized_button(true, true, true, true);
}

function social_history_func() {
    module_content = 'social_history';
    module_url = '/hms/social-history';
    actions = 'update';
    module_type = 'sub_transaction';
    scion.centralized_button(true, true, true, true);
}

function other_information_func() {
    module_content = 'other_information';
    module_url = '/hms/other-information';
    actions = 'update';
    module_type = 'sub_transaction';
    scion.centralized_button(true, true, true, true);
}