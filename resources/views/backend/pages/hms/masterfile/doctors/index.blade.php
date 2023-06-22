@extends('backend.master.index')

@section('title', 'DOCTORS')

@section('breadcrumbs')
    <span>MASTERFILE</span>  /  <span class="highlight">DOCTOR LIST</span>
@endsection

@section('left-content')
    @include('backend.partial.component.tab_list', [
        'id'=>'doctors',
        'data'=>array(
            array('id'=>'general', 'title'=>'GENERAL', 'icon'=>' fas fa-file-alt', 'active'=>true, 'disabled'=>false, 'function'=>true),
            array('id'=>'qualifications_specialization', 'title'=>'QUALIFICATIONS & SPECIALIZATION', 'icon'=>' fas fa-certificate', 'active'=>true, 'disabled'=>false, 'function'=>true),
            array('id'=>'work_experience', 'title'=>'WORK EXPERIENCE', 'icon'=>' fas fa-suitcase', 'active'=>true, 'disabled'=>false, 'function'=>true),
            array('id'=>'licensing_credentials', 'title'=>'LICENSING & CREDENTIALS', 'icon'=>' fas fa-clipboard-list', 'active'=>true, 'disabled'=>false, 'function'=>true),
            array('id'=>'professional_memberships', 'title'=>'PROFESSIONAL MEMBERSHIPS', 'icon'=>' fas fa-address-card', 'active'=>true, 'disabled'=>false, 'function'=>true),
            array('id'=>'clinicial_expertise', 'title'=>'CLINICAL INTERESTS & EXPERTISE', 'icon'=>' fas fa-star', 'active'=>true, 'disabled'=>false, 'function'=>true),

           
        )
    ])
@endsection


@section('content')
<div class="row" style="height:100%;">
    <div class="col-12" style="height:100%;">
        <div class="tab" style="height:100%;">
            <div class="tab-content">
                <form class="form-record" method="post" id="doctorsForm">
                    @include('backend.pages.hms.masterfile.doctors.tabs.general_tab')
                    @include('backend.pages.hms.masterfile.doctors.tabs.general_tab')
                    @include('backend.pages.hms.masterfile.doctors.tabs.general_tab')
                    @include('backend.pages.hms.masterfile.doctors.tabs.general_tab')
                    @include('backend.pages.hms.masterfile.doctors.tabs.general_tab')
                    @include('backend.pages.hms.masterfile.doctors.tabs.general_tab')
                    @include('backend.pages.hms.masterfile.doctors.tabs.general_tab')

             
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
<script src="/js/backend/pages/hms/masterfile/doctors.js"></script>
@endsection
