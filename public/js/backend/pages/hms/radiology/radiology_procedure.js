$(function() {
    modal_content = 'radiology_procedure';
    module_url = '/hms/radiology_procedure';
    module_type = 'custom';
    page_title = "Radiology Procedure";

    scion.centralized_button(false, true, true, true);
    scion.create.table(
        'radiology_procedure_table',  
        module_url + '/get', 
        [
            { data: "id", title:"<input type='checkbox' class='multi-checkbox' onclick='scion.table.checkAll()'/>", render: function(data, type, row, meta) {
                var html = "";
                html += '<input type="checkbox" class="single-checkbox" value="'+row.id+'" onclick="scion.table.checkOne()"/>';
                html += '<a href="#" class="align-middle edit" onclick="scion.record.edit('+"'/hms/"+modal_content+"/edit/', "+ row.id +')"><i class="fas fa-pen"></i></a>';
                return html;
            }},
            { data: "patient_name", title: "PATIENT NAME" },
            { data: "procedure_type", title: "PROCEDURE TYPE" },
            { data: "ordering_physician", title: "ORDERING PHYSICIAN" },
            { data: "date", title: "DATE" },
            { data: "time", title: "TIME" },
            { data: "notes", title: "NOTES" },
           
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
    $('#radiology_procedure_table').DataTable().draw();
    scion.create.sc_modal('radiology_procedure_form').hide('all', modalHideFunction)
}

function error() {}

function delete_success() {
    $('#radiology_procedure_table').DataTable().draw();
}

function delete_error() {}

function generateData() {
    form_data = {
        _token: _token,
        patient_name: $('#patient_name').val(),
        procedure_type: $('#procedure_type').val(),
        ordering_physician: $('#ordering_physician').val(),
        date: $('#date').val(),
        time: $('#time').val(),
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