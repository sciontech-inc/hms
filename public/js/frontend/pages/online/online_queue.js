$(function() {
    modal_content = 'online_queue';
    module_url = '/online/online_queue';
    module_type = 'custom';
    page_title = "ONLINE QUEUE";

    scion.centralized_button(false, true, true, true);
    scion.create.table(
        'online_queue_table',  
        module_url + '/get', 
        [
            { data: "id", title:"<input type='checkbox' class='multi-checkbox' onclick='scion.table.checkAll()'/>", render: function(data, type, row, meta) {
                var html = "";
                html += '<input type="checkbox" class="single-checkbox" value="'+row.id+'" onclick="scion.table.checkOne()"/>';
                html += '<a href="#" class="align-middle edit" onclick="scion.record.edit('+"'/online/"+modal_content+"/edit/', "+ row.id +')"><i class="fas fa-pen"></i></a>';
                return html;
            }},
            { data: "fullname", title: "FULL NAME" },
            { data: "birthdate", title: "DATE OF BIRTH" },
            { data: "email", title: "EMAIL" },
            { data: "relationship", title: "RELATIONSHIP" },
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
    $('#online_queue_table').DataTable().draw();
    scion.create.sc_modal('online_queue_form').hide('all', modalHideFunction)
}

function error() {}

function delete_success() {
    $('#online_queue_table').DataTable().draw();
}

function delete_error() {}

function generateData() {
    form_data = {
        _token: _token,
        fullname: $('#fullname').val(),
        sex: $('#sex').val(),
        birthdate: $('#birthdate').val(),
        contact_no: $('#contact_no').val(),
        email: $('#email').val(),
        relationship: $('#relationship').val(),
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