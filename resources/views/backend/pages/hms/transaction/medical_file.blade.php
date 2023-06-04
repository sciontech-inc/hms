@extends('backend.master.index')

@section('title', 'PATIENT MEDICAL FILE')

@section('breadcrumbs')
    <span>TRANSACTION</span> / <span class="highlight">MEDICAL FILE</span>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">PATIENT MEDICAL FILE: UPLOAD A FILE</h5>
            </div>
            @include('backend.partial.flash-message')
            <div class="col-12">
                <div class="card-body">
                    <table id="medical_file_table" class="table table-striped" style="width:100%"> </table>
                </div>
            </div>
        </div>
    </div>
</div>

@section('sc-modal')
@parent
<div class="sc-modal-content" id="medical_file_form">
    <div class="sc-modal-dialog">
        <div class="sc-modal-header">
            <span class="sc-title-bar"></span>
            <span class="sc-close" onclick="scion.create.sc_modal('medical_file_form').hide('all', modalHideFunction)"><i class="fas fa-times"></i></span>
        </div>
        <div class="sc-modal-body">
            <form method="post" id="medicalFileForm" class="form-record">
                <div class="row">
                    <div class="form-group col-md-12 filename">
                        <label>FILE NAME</label>
                        <input type="text" class="form-control" id="filename" name="filename" placeholder="FILE NAME"/>
                    </div>
                    <div class="form-group col-md-12 file">
                        <label>MEDICAL FILE</label>
                        <input id="file" type="file" name="profile_img" class="form-control">
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
    <script src="/js/backend/pages/transaction/medical_file.js"></script>
@endsection