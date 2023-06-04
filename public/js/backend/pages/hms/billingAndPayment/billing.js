$(function() {
    module_content = 'billing';
    modal_content = 'billing';
    module_url = '/hms/billing';
    module_url_2 = '/hris/billing';
    tab_active = 'general';
    page_title = "";
    actions = 'save';
    module_type = 'custom';

    general_func();
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
    modal_content = 'billing';
    module_content = 'billing';
    module_url = '/hms/billing';
    module_type = 'custom';


    scion.centralized_button(true, true, true, true);

    if ($.fn.DataTable.isDataTable('#family_medical_history_table')) {
        $('#family_medical_history_table').DataTable().destroy();
    }

    scion.create.table(
        'general_table',
        module_url + '/get',
        [
            { data: "invoice_number", title: "INVOICE NO." },
            { data: "insurance_claim_no", title: "INSURANCE CLAIM" },
            { data: "total", title: "TOTAL" },
            { data: "paid", title: "PAID" },
            { data: "balance", title: "BALANCE" },
            { data: "billing_status", title: "BILLING STATUS" },
        ], 'Bfrtip', []
    );

    scion.centralized_button(false, true, true, true);
}

function contact_addresses_func() {
    module_content = 'contact_addresses';
    module_url = '/hms/contact-addresses';
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
