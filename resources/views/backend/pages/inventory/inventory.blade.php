@extends('backend.master.index')

@section('title', 'INVENTORY')

@section('breadcrumbs')
    <span>TRANSACTIONS</span> / <span class="highlight">INVENTORY</span>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">INVENTORY: TRANSACTION SCREEN</h5>
            </div>
            @include('backend.partial.flash-message')
            <div class="col-12">
                <div class="card-body">
                    <table id="inventory_table" class="table table-striped" style="width:100%"> </table>
                </div>
            </div>
        </div>
    </div>
</div>

@section('sc-modal')
@parent
<div class="sc-modal-content" id="inventory_form">
    <div class="sc-modal-dialog">
        <div class="sc-modal-header">
            <span class="sc-title-bar"></span>
            <span class="sc-close" onclick="scion.create.sc_modal('inventory_form').hide('all', modalHideFunction)"><i class="fas fa-times"></i></span>
        </div>
        <div class="sc-modal-body">
            <form method="post" id="inventoryForm" class="form-record">
                <div class="row">
                    <div class="form-group col-md-12 item_name">
                        <label>ITEM NAME</label>
                        <input type="text" class="form-control" id="item_name" name="item_name"/>
                    </div>
                    <div class="form-group col-md-6 description">
                        <label>DESCRIPTION</label>
                        <input type="text" class="form-control" id="description" name="description"/>
                    </div>
                    <div class="form-group col-md-6 category">
                        <label>CATEGORY</label>
                        <input type="text" class="form-control" id="category" name="category"/>
                    </div>
                    <div class="form-group col-md-6 stock">
                        <label>STOCK</label>
                        <input type="text" class="form-control" id="stock" name="stock"/>
                    </div>
                    <div class="form-group col-md-6 unit_price">
                        <label>UNIT PRICE</label>
                        <input type="number" class="form-control" id="unit_price" name="unit_price"/>
                    </div>
                    <div class="form-group col-md-6 manufacturer">
                        <label>MANUFACTURER</label>
                        <input type="text" class="form-control" id="manufacturer" name="manufacturer"/>
                    </div>
                    <div class="form-group col-md-6 expiry_date">
                        <label>EXPIRY DATE</label>
                        <input type="date" class="form-control" id="expiry_date" name="expiry_date"/>
                    </div>
                    <div class="form-group col-md-6 reorder_level">
                        <label>REORDER LEVEL</label>
                        <input type="text" class="form-control" id="reorder_level" name="reorder_level"/>
                    </div>
                    <div class="form-group col-md-6 location">
                        <label>LOCATION</label>
                        <input type="text" class="form-control" id="location" name="location"/>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@endsection

@section('scripts')
    <script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="/js/backend/pages/hms/inventory/inventory.js"></script>
@endsection