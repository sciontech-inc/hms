$(function() {
    modal_content = 'vital_signs';
    module_url = '/ehr/vital_signs';
    module_type = 'custom';
    page_title = "Vital Signs";

    scion.centralized_button(false, true, true, true);
    scion.create.table(
        'vital_signs_table',  
        module_url + '/get', 
        [
            { data: "id", title:"<input type='checkbox' class='multi-checkbox' onclick='scion.table.checkAll()'/>", render: function(data, type, row, meta) {
                var html = "";
                html += '<input type="checkbox" class="single-checkbox" value="'+row.id+'" onclick="scion.table.checkOne()"/>';
                html += '<a href="#" class="align-middle edit" onclick="scion.record.edit('+"'/ehr/"+modal_content+"/edit/', "+ row.id +')"><i class="fas fa-pen"></i></a>';
                return html;
            }},
            { data: "patient_name", title: "PATIENT" },
            { data: "patient_type", title: "PATIENT TYPE" },
            { data: "date", title: "DATE" },
            { data: "time", title: "TIME" },
            
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
    $('#vital_signs_table').DataTable().draw();
    scion.create.sc_modal('vital_signs_form').hide('all', modalHideFunction)
}

function error() {}

function delete_success() {
    $('#vital_signs_table').DataTable().draw();
}

function delete_error() {}

function generateData() {
    form_data = {
        _token: _token,
        patient_name: $('#patient_name').val(),
        sex: $('#sex').val(),
        patient_type: $('#patient_type').val(),
        date: $('#date').val(),
        time: $('#time').val(),
        blood_pressure: $('#blood_pressure').val(),
        temperature: $('#temperature').val(),
        pulse_rate: $('#pulse_rate').val(),
        respiratory_rate: $('#respiratory_rate').val(),
        oxygen_saturation: $('#oxygen_saturation').val(),
        weight: $('#weight').val(),
        height: $('#height').val(),
        bmi: $('#bmi').val(),
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