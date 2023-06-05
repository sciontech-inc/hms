$(function() {
    modal_content = 'radiology_result';
    module_url = '/hms/radiology_result';
    module_type = 'custom';
    page_title = "Radiology Result";

    scion.centralized_button(false, true, true, true);
    scion.create.table(
        'radiology_result_table',  
        module_url + '/get', 
        [
            { data: "id", title:"<input type='checkbox' class='multi-checkbox' onclick='scion.table.checkAll()'/>", render: function(data, type, row, meta) {
                var html = "";
                html += '<input type="checkbox" class="single-checkbox" value="'+row.id+'" onclick="scion.table.checkOne()"/>';
                html += '<a href="#" class="align-middle edit" onclick="scion.record.edit('+"'/hms/"+modal_content+"/edit/', "+ row.id +')"><i class="fas fa-pen"></i></a>';
                return html;
            }},
            { data: "procedure_id", title: "PROCEDURE ID" },
            { data: "radiologist", title: "RADIOLOGIST" },
            { data: "report_date", title: "REPORT DATE" },
            { data: "report_findings", title: "REPORT FINDINGS" },
            { data: "conclusion", title: "CONCLUSION" },
            { data: "recommendation", title: "RECOMMENDATION" },
           
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
    $('#radiology_result_table').DataTable().draw();
    scion.create.sc_modal('radiology_result_form').hide('all', modalHideFunction)
}

function error() {}

function delete_success() {
    $('#radiology_result_table').DataTable().draw();
}

function delete_error() {}

function generateData() {
    form_data = {
        _token: _token,
        procedure_id: $('#procedure_id').val(),
        radiologist: $('#radiologist').val(),
        report_date: $('#report_date').val(),
        report_findings: $('#report_findings').val(),
        conclusion: $('#conclusion').val(),
        recommendation: $('#recommendation').val(),

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