$(function() {
    modal_content = 'inventory';
    module_url = '/hms/inventory';
    module_type = 'custom';
    page_title = "Inventory";

    scion.centralized_button(false, true, true, true);
    scion.create.table(
        'inventory_table',  
        module_url + '/get', 
        [
            { data: "id", title:"<input type='checkbox' class='multi-checkbox' onclick='scion.table.checkAll()'/>", render: function(data, type, row, meta) {
                var html = "";
                html += '<input type="checkbox" class="single-checkbox" value="'+row.id+'" onclick="scion.table.checkOne()"/>';
                html += '<a href="#" class="align-middle edit" onclick="scion.record.edit('+"'/hms/"+modal_content+"/edit/', "+ row.id +')"><i class="fas fa-pen"></i></a>';
                return html;
            }},
            { data: "item_name", title: "ITEM NAME" },
            { data: "description", title: "DESCRIPTION" },
            { data: "category", title: "CATEGORY" },
            { data: "stock", title: "STOCK" },
            { data: "unit_price", title: "UNIT PRICE" },
            { data: "expiry_date", title: "EXPIRY DATE" },
            { data: "reorder_level", title: "REORDER LEVEL" },

           
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
    $('#inventory_table').DataTable().draw();
    scion.create.sc_modal('inventory_form').hide('all', modalHideFunction)
}

function error() {}

function delete_success() {
    $('#inventory_table').DataTable().draw();
}

function delete_error() {}

function generateData() {
    form_data = {
        _token: _token,
        item_name: $('#item_name').val(),
        description: $('#description').val(),
        category: $('#category').val(),
        stock: $('#stock').val(),
        unit_price: $('#unit_price').val(),
        manufacturer: $('#manufacturer').val(),
        expiry_date: $('#expiry_date').val(),
        reorder_level: $('#reorder_level').val(),
        location: $('#location').val(),

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