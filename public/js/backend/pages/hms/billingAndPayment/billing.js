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

    if ($.fn.DataTable.isDataTable('#general_table')) {
        $('#general_table').DataTable().destroy();
    }

    scion.create.table(
        'general_table',
        module_url + '/get',
        [
            { data: "id", title:"<input type='checkbox' class='multi-checkbox' onclick='scion.table.checkAll()'/>", render: function(data, type, row, meta) {
                var html = "";
                html += '<input type="checkbox" class="single-checkbox" value="'+row.id+'" onclick="scion.table.checkOne()"/>';
                html += '<a href="#" class="align-middle edit" onclick="scion.record.edit('+"'/hms/"+modal_content+"/edit/', "+ row.id +')"><i class="fas fa-pen"></i></a>';
                html += '<a href="#" class="align-middle edit" onclick="billing_detail('+ row.id +')"><i class="fas fa-tasks"></i></a>';
                return html;
            }},
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

function billing_history_func() {
    module_content = 'billing';
    module_url = '/hms/billing';
    module_type = 'sub_transaction';

    if ($.fn.DataTable.isDataTable('#billing_history_table')) {
        $('#billing_history_table').DataTable().destroy();
    }

    scion.create.table(
        'billing_history_table',
        module_url + '/get',
        [
            { data: "id", title:"<input type='checkbox' class='multi-checkbox' onclick='scion.table.checkAll()'/>", render: function(data, type, row, meta) {
                var html = "";
                html += '<input type="checkbox" class="single-checkbox" value="'+row.id+'" onclick="scion.table.checkOne()"/>';
                html += '<a href="#" class="align-middle edit" onclick="scion.record.edit('+"'/payroll/"+modal_content+"/edit/', "+ row.id +')"><i class="fas fa-pen"></i></a>';
                html += '<a href="#" class="align-middle edit" onclick="billing_detail('+ row.id +')"><i class="fas fa-tasks"></i></a>';
                return html;
            }},
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

function billing_detail(id)
{
    if ($.fn.DataTable.isDataTable('#billing_detail_table')) {
        $('#billing_detail_table').DataTable().destroy();
    }

    scion.create.table(
        'billing_detail_table',
        module_url + '/billing_detail/get/' + id,
        [
            { data: "id", title:"<input type='checkbox' class='multi-checkbox' onclick='scion.table.checkAll()'/>", render: function(data, type, row, meta) {
                var html = "";
                html += '<input type="checkbox" class="single-checkbox" value="'+row.id+'" onclick="scion.table.checkOne()"/>';
                html += '<a href="#" class="align-middle edit" onclick="scion.record.edit('+"'/hms/"+modal_content+"/edit/', "+ row.id +')"><i class="fas fa-pen"></i></a>';
                return html;
            }},
            { data: "service_description", title: "SERVICE DESCRIPTION" },
            { data: "date_of_service", title: "DATE" },
            { data: "quantity", title: "QUANTITY" },
            { data: "unit_price", title: "UNIT PRICE" },
            { data: "total_amount", title: "TOTAL AMOUNT" },
        ], 'Bfrtip', []
    );
}

function modalShowFunction() {
    scion.centralized_button(true, false, true, true);
}

function modalHideFunction() {
    scion.centralized_button(false, true, true, true);
}
