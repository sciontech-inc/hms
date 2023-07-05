$(function() {
    modal_content = 'suppliers';
    module_url = '/maintenance/suppliers';
    module_type = 'custom';
    page_title = "Suppliers";

    scion.centralized_button(false, true, true, true);
    scion.create.table(
        'suppliers_table',  
        module_url + '/get', 
        [
            { data: "id", title:"<input type='checkbox' class='multi-checkbox' onclick='scion.table.checkAll()'/>", render: function(data, type, row, meta) {
                var html = "";
                html += '<input type="checkbox" class="single-checkbox" value="'+row.id+'" onclick="scion.table.checkOne()"/>';
                html += '<a href="#" class="align-middle edit" onclick="scion.record.edit('+"'/supplies_inventory/"+modal_content+"/edit/', "+ row.id +')"><i class="fas fa-pen"></i></a>';
                return html;
            }},
            { data: "supplier_name", title: "NAME" },
            { data: "contact_person", title: "CONTACT PERSON" },
            { data: "supplier_contact_no", title: "CONTACT NO" },
            { data: "supplier_email", title: "EMAIL" },
           
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
    $('#suppliers_table').DataTable().draw();
    scion.create.sc_modal('suppliers_form').hide('all', modalHideFunction)
}

function error() {}

function delete_success() {
    $('#suppliers_table').DataTable().draw();
}

function delete_error() {}

function generateData() {
    form_data = {
        _token: _token,
        supplier_name: $('#supplier_name').val(),
        contact_person: $('#contact_person').val(),
        payment_terms: $('#payment_terms').val(),
        preferred_supplier: $('#preferred_supplier').val(),
        street_no: $('#street_no').val(),
        barangay: $('#barangay').val(),
        city: $('#city').val(),
        province: $('#province').val(),
        country: $('#country').val(),
        zip_code: $('#zip_code').val(),
        supplier_contact_no: $('#supplier_contact_no').val(),
        supplier_email: $('#supplier_email').val(),
        note: $('#note').val(),


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