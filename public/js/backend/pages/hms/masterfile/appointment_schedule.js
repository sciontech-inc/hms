$(function() {
    module_content = 'appointment';
    modal_content = 'appointment';
    module_url = '/hms/appointment';
    module_url_2 = '/hris/appointment';
    tab_active = 'general';
    page_title = "";
    actions = 'save';
    module_type = 'custom';

    scion.centralized_button(false, true, true, true);
    scion.action.tab(tab_active);
});

// DEFAULT FUNCTION
function success(record) {
    switch(actions) {
        case 'save':
            record_id = record.id;
            $('#employee_no').val(record.employee_no);
            actions = 'update';

            $('.tab-list-menu-item ').removeAttr('disabled');

            break;


        case 'update':
            switch(module_content) {
                case 'employment-requirements':
                    break;
            }
            break;
    }
}

function error() {}

function delete_success() {

    switch(module_content) {
        case 'employee-information':
            var form_id = $('.form-record')[0].id;
            $('#'+form_id)[0].reset();
            actions = 'save';
            scion.centralized_button(true, false, true, true);

            break;
    }

}

function delete_error() {}

function generateData() {
    switch(module_content) {
        case '201-file':
            form_data = {
                _token: _token,
                firstname: $('#firstname').val(),
            };
            break;
    }

    return form_data;
}

function generateDeleteItems() {
    switch(module_content) {
        case '201-file':
            delete_data = [record_id];
            break;
    }
}

// EXTRA FUNCTION
function general_func() {
    modal_content = 'appointment';
    module_content = 'appointment';
    module_url = '/hms/appointment';
    module_type = 'transaction';

    if(record_id !== '') {
        actions = 'update';
    }

    scion.centralized_button(false, true, true, true);
}

function billing_history_func() {
    module_content = 'appointment';
    module_url = '/hms/appointment';
    actions = 'update';
    module_type = 'sub_transaction';
    scion.centralized_button(true, true, true, true);
}

function modalShowFunction() {
    scion.centralized_button(true, false, true, true);
}

function modalHideFunction() {
    scion.centralized_button(false, true, true, true);
}
