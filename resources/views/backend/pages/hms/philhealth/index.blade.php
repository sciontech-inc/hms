@extends('backend.master.index')

@section('title', 'PHILHEALTH CLAIMS')

@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/4.0.13/css/froala_editor.pkgd.min.css">
<style>
    .sc-modal-dialog {
        max-width: 980px !important;
        background: #fff;
        top: 20px;
        position: relative;
        margin: auto;
        border-radius: 9px;
    }
</style>
@endsection
@section('breadcrumbs')
    <span>HMS</span> / <span class="highlight">PHILHEALTH CLAIMS</span>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">PHILHEALTH CLAIMS: CREATE REQUEST</h5>
            </div>
            @include('backend.partial.flash-message')
            <div class="col-12">
                <div class="card-body">
                    <table id="philhealth_claims_table" class="table table-striped" style="width:100%"> </table>
                </div>
            </div>
        </div>
    </div>
</div>

@section('sc-modal')
@parent
<div class="sc-modal-content" id="philhealth_claims_form">
    <div class="sc-modal-dialog">
        <div class="sc-modal-header">
            <span class="sc-title-bar"></span>
            <span class="sc-close" onclick="scion.create.sc_modal('philhealth_claims_form').hide('all', modalHideFunction)"><i class="fas fa-times"></i></span>
        </div>
        <div class="sc-modal-body">
            <form method="post" id="philhealthclaimsForm" class="form-record">
                <div class="row">
                    <div class="form-group col-md-12 patient_id">
                        <label>PATIENT NAME</label>
                        @include('backend.partial.component.lookup', [
                            'label' => "PATIENTS",
                            'placeholder' => '<NEW>',
                            'id' => "patient_id",
                            'title' => "PATIENT RECORD",
                            'url' => "/hms/philhealth_claims/patient/get",
                            'data' => array(
                                array('data' => "DT_RowIndex", 'title' => "#"),
                                array('data' => "patient_id", 'title' => "Patient ID"),
                                array('data' => "firstname", 'title' => "First Name"),
                                array('data' => "middlename", 'title' => "Middle Name"),
                                array('data' => "lastname", 'title' => "Last Name"),
                                array('data' => "sex", 'title' => "Sex"),
                            ),
                            'disable' => true,
                            'lookup_module' => 'philhealth-claims',
                            'modal_type'=> 'all',
                            'lookup_type' => 'main'
                        ])
                    </div>
                    <div class="form-group col-md-6 total_amount_actual">
                        <label>TOTAL AMOUNT ACTUAL</label>
                        <input type="number" class="form-control" id="total_amount_actual" name="total_amount_actual"/>
                    </div>
                    <div class="form-group col-md-6 total_amount_claimed">
                        <label>TOTAL AMOUNT CLAIMED</label>
                        <input type="number" class="form-control" id="total_amount_claimed" name="total_amount_claimed"/>
                    </div>
                    <div class="form-group col-md-6 admission_date">
                        <label>ADMISSION DATE</label>
                        <input type="date" class="form-control" id="admission_date" name="admission_date"/>
                    </div>
                    <div class="form-group col-md-6 discharge_date">
                        <label>DISCHARGE DATE</label>
                        <input type="date" class="form-control" id="discharge_date" name="discharge_date"/>
                    </div>
                    <div class="col-md-12">
                    <hr>
                    <h5 class="card-title">MEMBER INFORMATION</h5>

                    </div>
                    <div class="form-group col-md-12 member_id">
                        <label>MEMBER ID</label>
                        <input type="text" class="form-control" id="member_id" name="member_id" placeholder="MEMBER ID"/>
                    </div>
                    <div class="form-group col-md-3 member_firstname">
                        <label>MEMBER FIRST NAME</label>
                        <input type="text" class="form-control" id="member_firstname" name="member_firstname" placeholder="FIRST NAME"/>
                    </div> 
                    <div class="form-group col-md-3 member_middlename">
                        <label>MEMBER MIDDLE NAME</label>
                        <input type="text" class="form-control" id="member_middlename" name="member_middlename" placeholder="MIDDLE NAME"/>
                    </div> 
                    <div class="form-group col-md-3 member_lastname">
                        <label>MEMBER LAST NAME</label>
                        <input type="text" class="form-control" id="member_lastname" name="member_lastname" placeholder="LAST NAME"/>
                    </div> 
                    <div class="form-group col-md-3 member_suffix">
                        <label>MEMBER SUFFIX</label>
                        <input type="text" class="form-control" id="member_suffix" name="member_suffix" placeholder="SUFFIX"/>
                    </div> 
                    <div class="form-group col-md-6 member_birthdate">
                        <label>MEMBER BIRTH DATE</label>
                        <input type="date" class="form-control" id="member_birthdate" name="member_birthdate"/>
                    </div> 
                    <div class="form-group col-md-6 member_sex">
                        <label>SEX</label>
                        <select class="form-control" name="member_sex" id="member_sex">
                            <option value="MALE">MALE</option>
                            <option value="FEMALE">FEMALE</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6 member_mobile_no">
                        <label>MEMBER MOBILE NO</label>
                        <input type="number" class="form-control" id="member_mobile_no" name="member_mobile_no" placeholder="MOBILE NO"/>
                    </div> 
                    <div class="form-group col-md-6 member_email">
                        <label>MEMBER EMAIL ADDRESS</label>
                        <input type="email" class="form-control" id="member_email" name="member_email" placeholder="EMAIL ADDRESS"/>
                    </div> 
                    <div class="form-group col-md-4 member_street">
                        <label>MEMBER STREET</label>
                        <input type="text" class="form-control" id="member_street" name="member_street" placeholder="STREET"/>
                    </div> 
                    <div class="form-group col-md-4 member_barangay">
                        <label>MEMBER BARANGAY</label>
                        <input type="text" class="form-control" id="member_barangay" name="member_barangay" placeholder="BARANGAY"/>
                    </div> 
                    <div class="form-group col-md-4 member_city">
                        <label>MEMBER CITY</label>
                        <input type="text" class="form-control" id="member_city" name="member_city" placeholder="CITY"/>
                    </div> 
                    <div class="form-group col-md-6 member_province">
                        <label>MEMBER PROVINCE</label>
                        <input type="text" class="form-control" id="member_province" name="member_province" placeholder="PROVINCE"/>
                    </div> 
                    <div class="form-group col-md-6 member_zip_code">
                        <label>MEMBER ZIP CODE</label>
                        <input type="text" class="form-control" id="member_zip_code" name="member_zip_code" placeholder="ZIP CODE"/>
                    </div> 
                    <div class="form-group col-md-4 membership_type">
                        <label>MEMBERSHIP TYPE</label>
                        <input type="text" class="form-control" id="membership_type" name="membership_type" placeholder="MEMBERSHIP TYPE"/>
                    </div> 
                    <div class="form-group col-md-4 employer_id">
                        <label>EMPLOYER ID</label>
                        <input type="text" class="form-control" id="employer_id" name="employer_id" placeholder="EMPLOYER ID"/>
                    </div> 
                    <div class="form-group col-md-4 employer_name">
                        <label>EMPLOYER NAME</label>
                        <input type="text" class="form-control" id="employer_name" name="employer_name" placeholder="EMPLOYER NAME"/>
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
    <script src="/js/backend/pages/hms/philhealth/philhealth_claims.js"></script>
    <script>
       
    </script>
@endsection