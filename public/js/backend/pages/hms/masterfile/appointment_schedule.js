$(function() {
    modal_content = 'set_appointment';
    module_url = '/hms/set_appointment';
    module_type = 'custom';
    page_title = "Set Appointment";

    scion.centralized_button(false, true, true, true);
    scion.create.table(
        'set_appointment_table',  
        module_url + '/get', 
        [
            { data: "id", title:"<input type='checkbox' class='multi-checkbox' onclick='scion.table.checkAll()'/>", render: function(data, type, row, meta) {
                var html = "";
                html += '<input type="checkbox" class="single-checkbox" value="'+row.id+'" onclick="scion.table.checkOne()"/>';
                html += '<a href="#" class="align-middle edit" onclick="scion.record.edit('+"'/ehr/"+modal_content+"/edit/', "+ row.id +')"><i class="fas fa-pen"></i></a>';
                return html;
            }},
            { data: "appointment_staff", title: "DOCTOR NAME" },
            { data: "patient_id", title: "PATIENT NAME" },
            { data: "appointment_date", title: "DATE" },
            { data: "appointment_time", title: "TIME" },
            { data: "appoitnment_status", title: "STATUS" },
           
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
    $('#set_appointment_table').DataTable().draw();
    scion.create.sc_modal('set_appointment_form').hide('all', modalHideFunction)
}

function error() {}

function delete_success() {
    $('#set_appointment_table').DataTable().draw();
}

function delete_error() {}

function generateData() {
    form_data = {
        _token: _token,
        patient_id: $('#patient_id').val(),
        appointment_type: $('#appointment_type').val(),
        appointment_staff: $('#appointment_staff').val(),
        appointment_date: $('#appointment_date').val(),
        appointment_time: $('#appointment_time').val(),
        appointment_status: $('#appointment_status').val(),
        appointment_notification_preference: $('#appointment_notification_preference').val(),
        appointment_remarks: $('#appointment_remarks').val(),
        appointment_location: $('#appointment_location').val(),
        appointment_confirmation: $('#appointment_confirmation').val(),
        appointment_next_appointment: $('#appointment_next_appointment').val(),

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