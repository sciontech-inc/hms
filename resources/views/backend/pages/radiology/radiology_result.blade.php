@extends('backend.master.index')

@section('title', 'RADIOLOGY RESULT')

@section('breadcrumbs')
    <span>TRANSACTIONS</span> / <span class="highlight">RADIOLOGY RESULT</span>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">RADIOLOGY RESULT: TRANSACTION SCREEN</h5>
            </div>
            @include('backend.partial.flash-message')
            <div class="col-12">
                <div class="card-body">
                    <table id="radiology_result_table" class="table table-striped" style="width:100%"> </table>
                </div>
            </div>
        </div>
    </div>
</div>

@section('sc-modal')
@parent
<div class="sc-modal-content" id="radiology_result_form">
    <div class="sc-modal-dialog">
        <div class="sc-modal-header">
            <span class="sc-title-bar"></span>
            <span class="sc-close" onclick="scion.create.sc_modal('radiology_result_form').hide('all', modalHideFunction)"><i class="fas fa-times"></i></span>
        </div>
        <div class="sc-modal-body">
            <form method="post" id="radiologyResultForm" class="form-record">
                <div class="row">
                    <div class="form-group col-md-12 procedure_id">
                        <label>PROCEDURE ID</label>
                        <input type="text" class="form-control" id="procedure_id" name="procedure_id"/>
                    </div>
                    <div class="form-group col-md-12 radiologist">
                        <label>RADIOLOGIST</label>
                        <input type="text" class="form-control" id="radiologist" name="radiologist"/>
                    </div>
                    <div class="form-group col-md-12 report_date">
                        <label>REPORT DATE</label>
                        <input type="date" class="form-control" id="report_date" name="report_date"/>
                    </div>
                    <div class="form-group col-md-12 report_findings">
                        <label>REPORT FINDINGS</label>
                        <textarea class="form-control" name="report_findings" id="report_findings" rows="2"></textarea>
                    </div>
                    <div class="form-group col-md-12 conclusion">
                        <label>CONCLUSION</label>
                        <textarea class="form-control" name="conclusion" id="conclusion" rows="2"></textarea>
                    </div>
                    <div class="form-group col-md-12 recommendation">
                        <label>RECOMMENDATION</label>
                        <textarea class="form-control" name="recommendation" id="recommendation" rows="2"></textarea>
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
    <script src="/js/backend/pages/hms/radiology/radiology_result.js"></script>
@endsection