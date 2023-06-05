$(function() {
    modal_content = 'health_information';
    module_url = '/ehr/health_information';
    module_type = 'custom';
    page_title = "Health Information";

    scion.centralized_button(false, true, true, true);
    scion.create.table(
        'health_information_table',  
        module_url + '/get', 
        [
            { data: "id", title:"<input type='checkbox' class='multi-checkbox' onclick='scion.table.checkAll()'/>", render: function(data, type, row, meta) {
                var html = "";
                html += '<input type="checkbox" class="single-checkbox" value="'+row.id+'" onclick="scion.table.checkOne()"/>';
                html += '<a href="#" class="align-middle edit" onclick="scion.record.edit('+"'/ehr/"+modal_content+"/edit/', "+ row.id +')"><i class="fas fa-pen"></i></a>';
                return html;
            }},
            { data: "patient_name", title: "PATIENT" },
            { data: "referred_to", title: "REFERRED TO" },
            { data: "referred_date", title: "REFERRED DATE" },
            { data: "status", title: "STATUS", render: function(data, type, row, meta) {
                var html = "";
                if(row.status == 1) {
                    html = '<i class="fas fa-check text-success"></i>';
                }
                else if(row.status == 0) {
                    html = '<i class="fas fa-clock text-warning"></i>';
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
    $('#health_information_table').DataTable().draw();
    scion.create.sc_modal('health_information_form').hide('all', modalHideFunction)
}

function error() {}

function delete_success() {
    $('#health_information_table').DataTable().draw();
}

function delete_error() {}

function generateData() {
    form_data = {
        _token: _token,
        patient_name: $('#patient_name').val(),
        referred_to: $('#referred_to').val(),
        referred_date: $('#referred_date').val(),
        notes: $('#notes').val(),
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