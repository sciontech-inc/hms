$(function() {
    modal_content = 'online_payment';
    module_url = '/online/online_payment';
    module_type = 'custom';
    page_title = "ONLINE PAYMENT";

    scion.centralized_button(false, true, true, true);
    scion.create.table(
        'online_payment_table',  
        module_url + '/get', 
        [
            { data: "id", title:"<input type='checkbox' class='multi-checkbox' onclick='scion.table.checkAll()'/>", render: function(data, type, row, meta) {
                var html = "";
                html += '<input type="checkbox" class="single-checkbox" value="'+row.id+'" onclick="scion.table.checkOne()"/>';
                html += '<a href="#" class="align-middle edit" onclick="scion.record.edit('+"'/online/"+modal_content+"/edit/', "+ row.id +')"><i class="fas fa-pen"></i></a>';
                return html;
            }},
            { data: "invoice_number", title: "INVOICE NO." },
            { data: "payment_date", title: "PAYMENT DATE" },
            { data: "amount", title: "AMOUNT" },
            { data: "payment_type", title: "PAYMENT TYPE" },
            { data: "reference_no", title: "REFERENCE NO" },
            { data: "status", title: "STATUS", render: function(data, type, row, meta) {
                var html = "";
                if(row.status === 1) {
                    html = '<i class="fas fa-check text-success"></i>';
                }
                else {
                    html = '<i class="fas fa-times text-danger"></i>';
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
    $('#online_payment_table').DataTable().draw();
    scion.create.sc_modal('online_payment_form').hide('all', modalHideFunction)
}

function error() {}

function delete_success() {
    $('#online_payment_table').DataTable().draw();
}

function delete_error() {}

function generateData() {
    form_data = {
        _token: _token,
        invoice_number: $('#invoice_number').val(),
        contact_no: $('#contact_no').val(),
        email: $('#email').val(),
        payment_date: $('#payment_date').val(),
        payment_type: $('#payment_type').val(),
        amount: $('#amount').val(),
        reference_no: $('#reference_no').val(),
       
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