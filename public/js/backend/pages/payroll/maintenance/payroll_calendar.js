$(function() {
    modal_content = 'payroll_calendar';
    module_url = '/payroll/payroll_calendar';
    module_type = 'custom';
    page_title = "Payroll Calendar";

    scion.centralized_button(false, true, true, true);
    scion.create.table(
        'payroll_calendar_table',  
        module_url + '/get', 
        [
            { data: "id", title:"<input type='checkbox' class='multi-checkbox' onclick='scion.table.checkAll()'/>", render: function(data, type, row, meta) {
                var html = "";
                html += '<input type="checkbox" class="single-checkbox" value="'+row.id+'" onclick="scion.table.checkOne()"/>';
                html += '<a href="#" class="align-middle edit" onclick="scion.record.edit('+"'/payroll/payroll_calendar/edit/', "+ row.id +')"><i class="fas fa-pen"></i></a>';
                return html;
            }},
            { data: "DT_RowIndex", title:"#" },
            { data: "name", title: "NAME" },
            { data: "calendar_type", title: "CALENDAR TYPE" },
            { data: "details.start_date", title: "START DATE" },
            { data: "details.first_payment", title: "FIRST PAYMENT" },
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
    $('#payroll_calendar_table').DataTable().draw();
    scion.create.sc_modal('payroll_calendar_form').hide('all', modalHideFunction);
}

function error() {}

function delete_success() {
    $('#payroll_calendar_table').DataTable().draw();
}

function delete_error() {}

function generateData() {
    form_data = {
        _token: _token,
        name: $('#name').val(),
        calendar_type: $('#calendar_type').val(),
        frequency: $('input[name="frequency"]:checked').val()!==undefined?$('input[name="frequency"]:checked').val():'',
        set_as_default: $('#set_as_default').val(),
        start_date: $('#start_date').val(),
        first_payment: $('#first_payment').val(),
        start_of_week: $('#start_of_week').val(),
        end_of_week: $('#end_of_week').val(),
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

// OTHER FUNCTION
function calendarType() {
    $('.frequency').css('display', 'none');
    $('#first_payment').attr('readonly', true);
    $('#start_of_week').attr('readonly', true);
    $('#end_of_week').attr('readonly', true);
    switch($('#calendar_type').val()) {
        case 'weekly':
            if($('#start_date').val() !== '') {
                getEndWeek();
            }
            break;
        case 'twice_monthly':
            if($('#start_date').val() !== '') {
                getEndWeek();
            }
            break;
        case 'monthly':
            if($('#start_date').val() !== '') {
                getEndWeek();
            }
            break;
        case 'custom':
            $('.frequency').css('display', 'block');
            $('#first_payment').removeAttr('readonly');
            $('#start_of_week').removeAttr('readonly');
            $('#end_of_week').removeAttr('readonly');
            break;
    }
}

function getEndWeek() {
    
    if($('#calendar_type').val() !== '') {
        $.post('/payroll/global/getdatesanddays', {'_token': _token, date: $('#start_date').val(), 'calendar_type': $('#calendar_type').val()}).done(function(response) {
            $('#first_payment').val(response.first_payment);
            $('#start_of_week').val(response.start_of_week);
            $('#end_of_week').val(response.end_of_week);
        });
    }
}