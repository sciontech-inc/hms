$(function() {
    modal_content = 'online_appointment';
    module_url = '/online/appointment';
    module_type = 'custom';
    page_title = "ONLINE APPOINTMENT";

    scion.centralized_button(false, true, true, true);
    scion.create.table(
        'online_appointment_table',  
        module_url + '/get', 
        [
            { data: "id", title:"<input type='checkbox' class='multi-checkbox' onclick='scion.table.checkAll()'/>", render: function(data, type, row, meta) {
                var html = "";
                html += '<input type="checkbox" class="single-checkbox" value="'+row.id+'" onclick="scion.table.checkOne()"/>';
                html += '<a href="#" class="align-middle edit" onclick="scion.record.edit('+"'/online/"+modal_content+"/edit/', "+ row.id +')"><i class="fas fa-pen"></i></a>';
                return html;
            }},
            { data: "date", title: "DATE" },
            { data: "time", title: "TIME" },
            { data: "reason", title: "REASON" },
            { data: "status", title: "STATUS", render: function(data, type, row, meta) {
                var html = "";
                if(row.status === 1) {
                    html = '<i class="fas fa-check text-success"></i>';
                }
                else {
                    html = '<i class="fas fa-times text-danger"></i>';
                }
                return html;
            }}
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
    $('#online_appointment_table').DataTable().draw();
    scion.create.sc_modal('online_appointment_form').hide('all', modalHideFunction)
}

function error() {}

function delete_success() {
    $('#online_appointment_table').DataTable().draw();
}

function delete_error() {}

function generateData() {
    form_data = {
        _token: _token,
        firstname: $('#firstname').val(),
        middlename: $('#middlename').val(),
        lastname: $('#lastname').val(),
        sex: $('#sex').val(),
        birthdate: $('#birthdate').val(),
        contact_no: $('#contact_no').val(),
        email: $('#email').val(),
        address: $('#address').val(),
        date: $('#date').val(),
        time: $('#time').val(),
        reason: $('#reason').val(),
        medical_history: $('#medical_history').val(),
        preferred_doctor: $('#preferred_doctor').val(),
        status: $('#status').val(),

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