$(function() {
    modal_content = 'benefits';
    module_url = '/payroll/benefits';
    module_type = 'custom';
    page_title = "Benefits";

    scion.centralized_button(false, true, true, true);
    scion.create.table(
        'benefits_table',  
        module_url + '/get', 
        [
            { data: "id", title:"<input type='checkbox' class='multi-checkbox' onclick='scion.table.checkAll()'/>", render: function(data, type, row, meta) {
                var html = "";
                html += '<input type="checkbox" class="single-checkbox" value="'+row.id+'" onclick="scion.table.checkOne()"/>';
                html += '<a href="#" class="align-middle edit" onclick="scion.record.edit('+"'/payroll/benefits/edit/', "+ row.id +')"><i class="fas fa-pen"></i></a>';
                return html;
            }},
            { data: "DT_RowIndex", title:"#" },
            { data: "benefits", title: "BENEFITS" },
            { data: "description", title: "DESCRIPTION" },
            { data: "account", title: "ACCOUNT" },
            { data: "type", title: "TYPE", render: function(data, type, row, meta) {
                var html = "";
                if(row.type === 'government_mandated') {
                    html = '<span class="government stats">GOVERNMENT MANDATED BENEFITS</span>';
                }
                else {
                    html = '<span class="other stats">OTHER COMPANY BENEFITS</span>';
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
    $('#benefits_table').DataTable().draw();
    scion.create.sc_modal('benefits_form').hide('all', modalHideFunction);
}

function error() {}

function delete_success() {
    $('#benefits_table').DataTable().draw();
}

function delete_error() {}

function generateData() {
    form_data = {
        _token: _token,
        benefits: $('#benefits').val(),
        description: $('#description').val(),
        account: $('input#account').val(),
        type: $('#type').val()
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