$(function() {
    modal_content = 'philhealth_claims';
    module_url = '/hms/philhealth_claims';
    module_type = 'custom';
    page_title = "PhilHealth Claims";

    scion.centralized_button(false, true, true, true);
    scion.create.table(
        'philhealth_claims_table',  
        module_url + '/get', 
        [
            { data: "id", title:"<input type='checkbox' class='multi-checkbox' onclick='scion.table.checkAll()'/>", render: function(data, type, row, meta) {
                var html = "";
                html += '<input type="checkbox" class="single-checkbox" value="'+row.id+'" onclick="scion.table.checkOne()"/>';
                html += '<a href="#" class="align-middle edit" onclick="scion.record.edit('+"'/hms/"+modal_content+"/edit/', "+ row.id +')"><i class="fas fa-pen"></i></a>';
                return html;
            }},
            { data: "patient_id", title: "PATIENT ID" },
            { data: "member_id", title: "MEMBER ID" },
            { data: "status", title: "STATUS" },
            { data: "admission_date", title: "ADMISSION DATE" },
            { data: "discharge_date", title: "DISCHARGE DATE" },
            { data: "total_amount_actual", title: "TOTAL AMOUNT ACTUAL" },
            { data: "total_amount_claimed", title: "TOTAL AMOUNT CLAIMED" },
           
        ]
    );

});

function success() {
    switch(actions) {
        case 'save':
            break;
        case 'update':
            break;
    }
    $('#philhealth_claims_table').DataTable().draw();
    scion.create.sc_modal('philhealth_claims_form').hide('all', modalHideFunction)
}

function error() {}

function delete_success() {
    $('#philhealth_claims_table').DataTable().draw();
}

function delete_error() {}

function generateData() {
    form_data = {
        _token: _token,
        patient_id: $('#patient_id').val(),
        total_amount_actual: $('#total_amount_actual').val(),
        total_amount_claimed: $('#total_amount_claimed').val(),
        admission_date: $('#admission_date').val(),
        discharge_date: $('#discharge_date').val(),
        member_id: $('#member_id').val(),
        member_lastname: $('#member_id').val(),
        member_firstname: $('#member_id').val(),
        member_middlename: $('#member_id').val(),
        member_suffix: $('#member_id').val(),
        member_birthdate: $('#member_id').val(),
        member_phone_no: $('#member_id').val(),
        member_mobile_no: $('#member_id').val(),
        member_gender: $('#member_id').val(),
        member_email: $('#member_id').val(),
        member_street: $('#member_id').val(),
        member_barangay: $('#member_id').val(),
        member_city: $('#member_id').val(),
        member_province: $('#member_id').val(),
        member_zip_code: $('#member_id').val(),
        membership_type: $('#member_id').val(),
        employer_id: $('#member_id').val(),
        employer_name: $('#member_id').val(),
    
    };

    return form_data;
}

function generateDeleteItems(){}


function modalShowFunction() {
    scion.centralized_button(true, false, true, true);
}

function modalHideFunction() {
    scion.centralized_button(false, true, true, true);
}