$(function() {
    modal_content = 'specialized_notes';
    module_url = '/ehr/specialized_notes';
    module_type = 'custom';
    page_title = "Specialized Notes";

    scion.centralized_button(false, true, true, true);
    scion.create.table(
        'specialized_notes_table',  
        module_url + '/get', 
        [
            { data: "id", title:"<input type='checkbox' class='multi-checkbox' onclick='scion.table.checkAll()'/>", render: function(data, type, row, meta) {
                var html = "";
                html += '<input type="checkbox" class="single-checkbox" value="'+row.id+'" onclick="scion.table.checkOne()"/>';
                html += '<a href="#" class="align-middle edit" onclick="scion.record.edit('+"'/ehr/"+modal_content+"/edit/', "+ row.id +')"><i class="fas fa-pen"></i></a>';
                return html;
            }},
            { data: "patient_name", title: "PATIENT" },
            { data: "note_title", title: "NOTE TITLE" },
            { data: "date", title: "DATE" },
            { data: "note_type", title: "NOTE TYPE" },
            { data: "note_group", title: "NOTE GROUP" },
           
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
    $('#specialized_notes_table').DataTable().draw();
    scion.create.sc_modal('specialized_notes_form').hide('all', modalHideFunction)
}

function error() {}

function delete_success() {
    $('#specialized_notes_table').DataTable().draw();
}

function delete_error() {}

function generateData() {
    form_data = {
        _token: _token,
        patient_name: $('#patient_name').val(),
        note_title: $('#note_title').val(),
        date: $('#date').val(),
        note_type: $('#note_type').val(),
        note_group: $('#note_group').val(),
        note_description: $('#note_description').html(),

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