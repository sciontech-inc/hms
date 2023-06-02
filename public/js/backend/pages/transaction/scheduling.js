var emp_id = null;
var date_selected = null;

$(function() {
    modal_content = 'scheduling';
    module_url = '/payroll/scheduling';
    module_type = 'custom';
    page_title = "Scheduling";

    const today = new Date();

    $('#date-filter').val(moment(today).format('YYYY-MM-DD'));

    scion.centralized_button(true, true, true, true);
    
    scion.create.table(
        'employee_table',  
        module_url + '/get', 
        [
            { data: "firstname", title:"EMPLOYEE", render: function(data, type, row, meta) {
                return "<div class='employee_info'><img src='/images/payroll/employee-information/"+row.profile_img+"'/>" + row.firstname + " " + (row.middlename !== null && row.middlename !== ""?row.middlename + " ":"") + row.lastname + (row.suffix !== null && row.suffix !== ""?" " + row.suffix:"") + "</div>";
            }},
            { data: "sun", title:"SUNDAY", width:'150px', render: function(data, type, row, meta) {
                var tag = "";
                if(row.sun !== null) {
                    if(row.sun.split('|')[2] === "0") {
                        tag = "<div class='time-set'><span class='time-range'>"+row.sun.split('|')[0]+"</span><span class='assignment'>"+row.sun.split('|')[1]+"</span></div>";
                    }
                    else {
                        tag = "<div class='time-set off'><span class='time-range'>"+row.sun.split('|')[3]+"</span></div>";
                    }
                }
                else {
                    tag = '<button class="add-schedule" onclick="addSchedule(1, '+row.id+')"><i class="fas fa-plus"></i></button>'
                }
                return tag;
            }},
            { data: "mon", title:"MONDAY", width:'150px', render: function(data, type, row, meta) {
                var tag = "";
                if(row.mon !== null) {
                    if(row.mon.split('|')[2] === "0") {
                        tag = "<div class='time-set'><span class='time-range'>"+row.mon.split('|')[0]+"</span><span class='assignment'>"+row.mon.split('|')[1]+"</span></div>";
                    }
                    else {
                        tag = "<div class='time-set off'><span class='time-range'>"+row.mon.split('|')[3]+"</span></div>";
                    }
                }
                else {
                    tag = '<button class="add-schedule" onclick="addSchedule(2, '+row.id+')"><i class="fas fa-plus"></i></button>'
                }
                return tag;
            }},
            { data: "tue", title:"TUESDAY", width:'150px', render: function(data, type, row, meta) {
                var tag = "";
                if(row.tue !== null) {
                    if(row.tue.split('|')[2] === "0") {
                        tag = "<div class='time-set'><span class='time-range'>"+row.tue.split('|')[0]+"</span><span class='assignment'>"+row.tue.split('|')[1]+"</span></div>";
                    }
                    else {
                        tag = "<div class='time-set off'><span class='time-range'>"+row.tue.split('|')[3]+"</span></div>";
                    }
                }
                else {
                    tag = '<button class="add-schedule" onclick="addSchedule(3, '+row.id+')"><i class="fas fa-plus"></i></button>'
                }
                return tag;
            }},
            { data: "wed", title:"WEDNESDAY", width:'150px', render: function(data, type, row, meta) {
                var tag = "";
                if(row.wed !== null) {
                    if(row.wed.split('|')[2] === "0") {
                        tag = "<div class='time-set'><span class='time-range'>"+row.wed.split('|')[0]+"</span><span class='assignment'>"+row.wed.split('|')[1]+"</span></div>";
                    }
                    else {
                        tag = "<div class='time-set off'><span class='time-range'>"+row.wed.split('|')[3]+"</span></div>";
                    }
                }
                else {
                    tag = '<button class="add-schedule" onclick="addSchedule(4, '+row.id+')"><i class="fas fa-plus"></i></button>'
                }
                return tag;
            }},
            { data: "thu", title:"THURSDAY", width:'150px', render: function(data, type, row, meta) {
                var tag = "";
                if(row.thu !== null) {
                    if(row.thu.split('|')[2] === "0") {
                        tag = "<div class='time-set'><span class='time-range'>"+row.thu.split('|')[0]+"</span><span class='assignment'>"+row.thu.split('|')[1]+"</span></div>";
                    }
                    else {
                        tag = "<div class='time-set off'><span class='time-range'>"+row.thu.split('|')[3]+"</span></div>";
                    }
                }
                else {
                    tag = '<button class="add-schedule" onclick="addSchedule(5, '+row.id+')"><i class="fas fa-plus"></i></button>'
                }
                return tag;
            }},
            { data: "fri", title:"FRIDAY", width:'150px', render: function(data, type, row, meta) {
                var tag = "";
                if(row.fri !== null) {
                    if(row.fri.split('|')[2] === "0") {
                        tag = "<div class='time-set'><span class='time-range'>"+row.fri.split('|')[0]+"</span><span class='assignment'>"+row.fri.split('|')[1]+"</span></div>";
                    }
                    else {
                        tag = "<div class='time-set off'><span class='time-range'>"+row.fri.split('|')[3]+"</span></div>";
                    }
                }
                else {
                    tag = '<button class="add-schedule" onclick="addSchedule(6, '+row.id+')"><i class="fas fa-plus"></i></button>'
                }
                return tag;
            }},
            { data: "sat", title:"SATURDAY", width:'150px', render: function(data, type, row, meta) {
                var tag = "";
                if(row.sat !== null) {
                    if(row.sat.split('|')[2] === "0") {
                        tag = "<div class='time-set'><span class='time-range'>"+row.sat.split('|')[0]+"</span><span class='assignment'>"+row.sat.split('|')[1]+"</span></div>";
                    }
                    else {
                        tag = "<div class='time-set off'><span class='time-range'>"+row.sat.split('|')[3]+"</span></div>";
                    }
                }
                else {
                    tag = '<button class="add-schedule" onclick="addSchedule(7, '+row.id+')"><i class="fas fa-plus"></i></button>'
                }
                return tag;
            }},
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
    $('#employee_table').DataTable().draw();
    scion.create.sc_modal('scheduling_form').hide('all', modalHideFunction);
}

function error() {}

function delete_success() {
    $('#earnings_table').DataTable().draw();
}

function delete_error() {}

function generateData() {
    form_data = {
        _token: _token,
        employee_id: emp_id,
        date: date_selected,
        start_time: $('#start_time').val(),
        end_time: $('#end_time').val(),
        type: $('#type').val(),
        work_assignment_id: $('#work_assignment_id').val(),
        earning_id: $('#earning_id').val(),
        details:'',
        type_description:'',
        status:$('#status').val(),
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

function subFunction(property) {
    $('.employee-name span').text(selected_data[property].firstname + ' ' + (selected_data[property].middlename === '' || selected_data[property].middlename === null?'':selected_data[property].middlename + ' ') + selected_data[property].lastname + (selected_data[property].suffix === '' || selected_data[property].suffix === null?'':' ' + selected_data[property].suffix));
    $('.employee-email span').text(selected_data[property].email);
    $('.employee-picture').attr('style', 'background:url(/images/payroll/employee-information/' + selected_data[property].profile_img+')no-repeat;');
}

function addSchedule(dayOfWeek, id) {
    emp_id = id;
    date_selected = scion.getDateRange($('#date-filter').val(), dayOfWeek);
    scion.record.new();
    $('#date').val(date_selected);
}

function selectType(val) {
    if(val === "1") {
        $('.start_time, .end_time').css('display', 'none');
    }
    else {
        $('.start_time, .end_time').css('display', 'block');
    }
}