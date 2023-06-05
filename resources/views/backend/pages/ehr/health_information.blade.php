@extends('backend.master.index')

@section('title', 'HEALTH INFORMATION')

@section('breadcrumbs')
    <span>EHR</span> / <span class="highlight">HEALTH INFORMATION</span>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">HEALTH INFORMATION: CREATE REFERRAL</h5>
            </div>
            @include('backend.partial.flash-message')
            <div class="col-12">
                <div class="card-body">
                    <table id="health_information_table" class="table table-striped" style="width:100%"> </table>
                </div>
            </div>
        </div>
    </div>
</div>

@section('sc-modal')
@parent
<div class="sc-modal-content" id="health_information_form">
    <div class="sc-modal-dialog">
        <div class="sc-modal-header">
            <span class="sc-title-bar"></span>
            <span class="sc-close" onclick="scion.create.sc_modal('health_information_form').hide('all', modalHideFunction)"><i class="fas fa-times"></i></span>
        </div>
        <div class="sc-modal-body">
            <form method="post" id="healthInformationForm" class="form-record">
                <div class="row">
                    <div class="form-group col-md-12 patient_name">
                        <label>PATIENT NAME</label>
                        <input type="text" class="form-control" id="patient_name" name="patient_name" placeholder="PATIENT NAME"/>
                    </div>
                    <div class="form-group col-md-12 referred_date">
                        <label>REFERRED DATE</label>
                        <input type="date" class="form-control" id="referred_date" name="referred_date"/>
                    </div>
                    <div class="form-group col-md-12 referred_to">
                        <label>REFERRED TO</label>
                        <input type="text" class="form-control" id="referred_to" name="referred_to" placeholder="REFERRED TO"/>
                    </div>
                    <div class="form-group col-md-12 notes">
                        <label>NOTES</label>
                        <textarea class="form-control" name="notes" id="notes" cols="2" rows="5"></textarea>
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
    <script src="/js/backend/pages/hms/ehr/health_information.js"></script>
@endsection