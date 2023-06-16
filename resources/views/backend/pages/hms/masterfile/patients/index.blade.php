@extends('backend.master.index')

@section('title', 'PATIENTS')

@section('breadcrumbs')
    <span>MASTERFILE</span>  /  <span class="highlight">PATIENT LIST</span>
@endsection

@section('left-content')
    @include('backend.partial.component.tab_list', [
        'id'=>'patients',
        'data'=>array(
            array('id'=>'general', 'title'=>'GENERAL', 'icon'=>' fas fa-file-alt', 'active'=>true, 'disabled'=>false, 'function'=>true),
            array('id'=>'patient_insurance', 'title'=>'INSURANCE', 'icon'=>' fas fa-clipboard-list', 'active'=>false, 'disabled'=>true, 'function'=>true),
            array('id'=>'family_information', 'title'=>'FAMILY INFORMATION', 'icon'=>' fas fa-users', 'active'=>false, 'disabled'=>true, 'function'=>true),
            array('id'=>'medical_cases', 'title'=>'MEDICAL CASES', 'icon'=>' fas fa-briefcase-medical', 'active'=>false, 'disabled'=>true, 'function'=>true),
            array('id'=>'medicine_taken', 'title'=>'DRUGS & MEDICINE TAKEN', 'icon'=>' fas fa-prescription', 'active'=>false, 'disabled'=>true, 'function'=>true),
            array('id'=>'procedures_undertaken', 'title'=>'PROCEDURES UNDERTAKEN', 'icon'=>' fas fa-procedures', 'active'=>false, 'disabled'=>true, 'function'=>true),
            array('id'=>'patient_allergies', 'title'=>'ALLERGIES', 'icon'=>' fas fa-allergies', 'active'=>false, 'disabled'=>true, 'function'=>true),
            array('id'=>'progress_consultation', 'title'=>'PROGRESS NOTES & CONSULTATION', 'icon'=>' fas fa-notes-medical', 'active'=>false, 'disabled'=>true, 'function'=>true),
            array('id'=>'vital_measurement', 'title'=>'VITAL SIGNS & MEASUREMENTS', 'icon'=>' fas fa-file-medical-alt', 'active'=>false, 'disabled'=>true, 'function'=>true),
            array('id'=>'family_medical_history', 'title'=>'FAMILY MEDICAL HISTORY', 'icon'=>' fas fa-user-clock', 'active'=>false, 'disabled'=>true, 'function'=>true),
            array('id'=>'social_history', 'title'=>'SOCIAL HISTORY', 'icon'=>' fas fa-user-friends', 'active'=>false, 'disabled'=>true, 'function'=>true),
            array('id'=>'other_information', 'title'=>'OTHER INFORMATION', 'icon'=>' fas fa-exclamation-circle', 'active'=>false, 'disabled'=>true, 'function'=>true),
            array('id'=>'document', 'title'=>'DOCUMENTS', 'icon'=>' fas fa-file-alt', 'active'=>false, 'disabled'=>true, 'function'=>true),
        )
    ])
@endsection


@section('content')
<div class="row" style="height:100%;">
    <div class="col-12" style="height:100%;">
        <div class="tab" style="height:100%;">
            <div class="tab-content">
                <form class="form-record" method="post" id="patientsForm">
                    @include('backend.pages.hms.masterfile.patients.tabs.general_tab')
                    @include('backend.pages.hms.masterfile.patients.tabs.insurance_tab')
                    @include('backend.pages.hms.masterfile.patients.tabs.family_information_tab')
                    @include('backend.pages.hms.masterfile.patients.tabs.medical_cases_tab')
                    @include('backend.pages.hms.masterfile.patients.tabs.medicine_taken_tab')
                    @include('backend.pages.hms.masterfile.patients.tabs.procedures_undertaken_tab')
                    @include('backend.pages.hms.masterfile.patients.tabs.patient_allergies_tab')
                    @include('backend.pages.hms.masterfile.patients.tabs.progress_consultation_tab')
                    @include('backend.pages.hms.masterfile.patients.tabs.vital_measurement_tab')
                    @include('backend.pages.hms.masterfile.patients.tabs.family_medical_history_tab')
                    @include('backend.pages.hms.masterfile.patients.tabs.social_history_tab')
                    @include('backend.pages.hms.masterfile.patients.tabs.other_information_tab')
                    @include('backend.pages.hms.masterfile.patients.tabs.document_tab')
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('right-content')
<div class="row">
    <div class="col-md-12">
        <!-- <div class="card">
            <div class="card-header">
                <h5 class="card-title"><span>Juan Dela Cruz</span></h5>
                <h5 class="card-title"><span style="color: gray; font-size: 10px;">REGISTERED NURSE</span></h5>
            </div>
            <div class="col-12">
                <div class="card-body" style="padding: 0px !important;">
                    <div style="padding: 1em;"></div>
                    <img src="/images/hris/employee-information/employee-photo.png"  style="width: 100%;" alt="">
                    <div style="padding: 1em;"></div>
                    <table>
                        <tr>
                            <td>EMPLOYEE TYPE:</td>
                            <td>REGULAR</td>
                        </tr>
                        <tr>
                            <td>DATE HIRED:</td>
                            <td>01/01/2022</td>
                        </tr>
                        <tr>
                            <td>MONTHLY SALARY:</td>
                            <td>PHP 20,000.00</td>
                        </tr>

                    </table>
                    <div style="padding: 1em;"></div>
                </div>
            </div>
        </div> -->
    </div>
</div>
@endsection

@section('scripts')
<script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="/js/backend/pages/hms/masterfile/patients.js"></script>
@endsection
