$(function() {
    modal_content = 'medical_file';
    module_url = '/hms/medical_file';
    module_type = 'custom';
    page_title = "Medical File";

    scion.centralized_button(true, true, true, true);
    scion.create.table(
        'medical_file_table',  
        module_url + '/get', 
        [
            { data: "id", title:"<input type='checkbox' class='multi-checkbox' onclick='scion.table.checkAll()'/>", render: function(data, type, row, meta) {
                var html = "";
                html += '<input type="checkbox" class="single-checkbox" value="'+row.id+'" onclick="scion.table.checkOne()"/>';
                html += '<a href="#" class="align-middle edit" onclick="scion.record.edit('+"'/hms/"+modal_content+"/edit/', "+ row.id +')"><i class="fas fa-pen"></i></a>';
                return html;
            }},
            { data: "filename", title: "FILE NAME" },
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
    $('#medical_file_table').DataTable().draw();
    scion.create.sc_modal('medical_file_form').hide('all', modalHideFunction)
}

function error() {}

function delete_success() {
    $('#medical_file_table').DataTable().draw();
}

function delete_error() {}

function generateData() {
    form_data = {
        _token: _token,
        filename: $('#filename').val(),
        file: $('#file').val()
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