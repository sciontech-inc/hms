$(function() {
    modal_content = 'video_conference';
    module_url = '/ehr/video_conference';
    module_type = 'custom';
    page_title = "Video Conference";

    scion.centralized_button(false, true, true, true);
    scion.create.table(
        'video_conference_table',  
        module_url + '/get', 
        [
            { data: "id", title:"<input type='checkbox' class='multi-checkbox' onclick='scion.table.checkAll()'/>", render: function(data, type, row, meta) {
                var html = "";
                html += '<input type="checkbox" class="single-checkbox" value="'+row.id+'" onclick="scion.table.checkOne()"/>';
                html += '<a href="#" class="align-middle edit" onclick="scion.record.edit('+"'/ehr/"+modal_content+"/edit/', "+ row.id +')"><i class="fas fa-pen"></i></a>';
                return html;
            }},
            { data: "topic", title: "TOPIC" },
            { data: "agenda", title: "AGENDA" },
            { data: "duration", title: "DURATION" },
            { data: "participant_email",  title: "PARTICIPANT EMAIL" },
            { data: "date",  title: "DATE" },
            { data: "time",  title: "TIME" },
            { title:"START MEETING", render: function(data, type, row, meta) {

                var html = "";

                html += '<a href="'+row.meeting_link+'" target="_blank"><button class="btn btn-primary fas fa-video"></button></a>'
                return html
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
    $('#video_conference_table').DataTable().draw();
    scion.create.sc_modal('video_conference_form').hide('all', modalHideFunction)
}

function error() {}

function delete_success() {
    $('#video_conference_table').DataTable().draw();
}

function delete_error() {}

function generateData() {
    form_data = {
        _token: _token,
        topic: $('#topic').val(),
        agenda: $('#agenda').val(),
        duration: $('#duration').val(),
        participant_email: $('#participant_email').val(),
        date: $('#date').val(),
        time: $('#time').val(),
        meeting_link: $('#meeting_link').val(),

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