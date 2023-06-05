@extends('backend.master.index')

@section('title', 'RADIOLOGY PROCEDURE')

@section('breadcrumbs')
    <span>TRANSACTIONS</span> / <span class="highlight">RADIOLOGY PROCEDURE</span>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">RADIOLOGY PROCEDURE: TRANSACTION SCREEN</h5>
            </div>
            @include('backend.partial.flash-message')
            <div class="col-12">
                <div class="card-body">
                    <table id="radiology_procedure_table" class="table table-striped" style="width:100%"> </table>
                </div>
            </div>
        </div>
    </div>
</div>

@section('sc-modal')
@parent
<div class="sc-modal-content" id="radiology_procedure_form">
    <div class="sc-modal-dialog">
        <div class="sc-modal-header">
            <span class="sc-title-bar"></span>
            <span class="sc-close" onclick="scion.create.sc_modal('radiology_procedure_form').hide('all', modalHideFunction)"><i class="fas fa-times"></i></span>
        </div>
        <div class="sc-modal-body">
            <form method="post" id="radiologyProcedureForm" class="form-record">
                <div class="row">
                    <div class="form-group col-md-12 patient_name">
                        <label>PATIENT NAME</label>
                        <input type="text" class="form-control" id="patient_name" name="patient_name"/>
                    </div>
                    <div class="form-group col-md-6 procedure_type">
                        <label>PROCEDURE TYPE</label>
                        <input type="text" class="form-control" id="procedure_type" name="procedure_type"/>
                    </div>
                    <div class="form-group col-md-6 ordering_physician">
                        <label>ORDERING PHYSICIAN</label>
                        <input type="text" class="form-control" id="ordering_physician" name="ordering_physician"/>
                    </div>
                    <div class="form-group col-md-6 date">
                        <label>DATE</label>
                        <input type="date" class="form-control" id="date" name="date"/>
                    </div>
                    <div class="form-group col-md-6 time">
                        <label>TIME</label>
                        <input type="time" class="form-control" id="time" name="time"/>
                    </div>
                    <div class="form-group col-md-12 notes">
                        <label>NOTES</label>
                        <input type="text" class="form-control" id="notes" name="notes"/>
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
    <script src="/js/backend/pages/hms/radiology/radiology_procedure.js"></script>
@endsection