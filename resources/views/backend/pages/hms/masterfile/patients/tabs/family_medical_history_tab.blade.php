<div id="family_medical_history_tab" class="form-tab">
    <h5>FAMILY MEDICAL HISTORY</h5>
    <div style="padding: 1em;"></div>
    <div class="family-medical-history-table">
        <div class="row">
            <div class="col-12">
                <table id="family_medical_history_table" class="table table-striped" style="width:100%">
                </table>
            </div>
        </div>
    </div>
    <hr>
    {{-- MODAL --}}
    @section('sc-modal')
    <div class="sc-modal-content" id="family_medical_history_form">
        <div class="sc-modal-dialog">
            <div class="sc-modal-header">
                <span class="sc-title-bar"></span>
                <span class="sc-close" onclick="scion.create.sc_modal('family_medical_history_form').hide('all', modalHideFunction)"><i class="fas fa-times"></i></span>
            </div>
            <div class="sc-modal-body">
                <form id="familymedicalhistoryForm" method="post" class="form-record">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group relationship">
                                <label>RELATIONSHIP</label>
                                <input type="text" class="form-control" name="relationship" id="relationship"/>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group medical_condition">
                                <label>MEDICAL CONDITION <span class="required">*</span></label>
                                <input type="text" class="form-control" name="medical_condition" id="medical_condition"/>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group age_at_diagnosis">
                                <label>AGE AT DIAGNOSIS <span class="required">*</span></label>
                                <input type="number" class="form-control" name="age_at_diagnosis" id="age_at_diagnosis"/>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group age_at_death">
                                <label>AGE AT DEATH <span class="required">*</span></label>
                                <input type="number" class="form-control" name="age_at_death" id="age_at_death"/>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group cause_of_death">
                                <label>CAUSE OF DEATH <span class="required">*</span></label>
                                <input type="text" class="form-control" name="cause_of_death" id="cause_of_death"/>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group other_relevant_medical_history">
                                <label>OTHER RELEVANT MEDICAL HISTORY <span class="required">*</span></label>
                                <textarea type="text" class="form-control" name="other_relevant_medical_history" id="other_relevant_medical_history"></textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group family_history_of_specific_conditions">
                                <label>FAMILY HISTORY OF SPECIFIC CONDITIONS <span class="required">*</span></label>
                                <textarea type="text" class="form-control" name="family_history_of_specific_conditions" id="family_history_of_specific_conditions"></textarea>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group ethnicity">
                                <label>ETHNICITY <span class="required">*</span></label>
                                <input type="text" class="form-control" name="ethnicity" id="ethnicity"/>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group lifestyle_factors">
                                <label>LIFESTYLE FACTORS <span class="required">*</span></label>
                                <input type="text" class="form-control" name="lifestyle_factors" id="lifestyle_factors"/>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group other_family_members_affected">
                                <label>OTHER FAMILY MEMBERS AFFECTED <span class="required">*</span></label>
                                <input type="text" class="form-control" name="other_family_members_affected" id="other_family_members_affected"/>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group street_2">
                                <label>REMARKS <span class="required">*</span></label>
                                <textarea type="text" class="form-control" name="remarks" id="remarks"></textarea>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endsection   
</div>


@section('styles')
<style>
    .btn-file {
        position: relative;
        overflow: hidden;
    }
    .btn-file input[type=file] {
        position: absolute;
        top: 0;
        right: 0;
        min-width: 100%;
        min-height: 100%;
        font-size: 100px;
        text-align: right;
        filter: alpha(opacity=0);
        opacity: 0;
        outline: none;
        cursor: inherit;
        display: block;
    }
    .form-control {
        font-size: 12px;
    }
    .main {
        overflow-x: hidden;
    }
    .card-header {
        background: #e9e9e9;
    }
    h5.card-title {
        color: #3282b8;
        margin-bottom: 0px;
    }
    h5.title {
        font-size: 12px;
        color: gray;
    }
    p.section-title {
        font-size: 12px;
        color: #b6b6b6;
        margin-bottom: 0px;
    }
    p.notif-title {
        font-weight: bold;
        color: #e02828;
        font-size: 13px;
        margin-bottom: 0px;
    }
    p.notif-title-green {
        font-weight: bold;
        color: #28e04a;
        font-size: 13px;
        margin-bottom: 0px;
    }
    p.notif-description {
        font-size: 10px;
        color: #b6b6b6;
    }
    p.section-desc {
        font-weight: bold;
        color: #6eafdb;
    }
    label.section-label {
        font-weight: bold;
    }
    .payroll-title {
        color: #b6b6b6;
        margin-bottom: 0px !important;
    }
    .payroll-date {
        color: #6eafdb;
        font-weight: bold;
    }
    .employment-status {
        color: #b6b6b6;
        font-size: 12px;
    }
    .job-title {
        font-weight: bold;
        color: #6eafdb;
        margin-bottom: 0px !important;
    }
    .account-balance {
        font-weight: bold;
        font-size: 20px;
    }
    table {
        border-collapse: collapse;
        width: 100%;
        font-size: 10px;
    }

    td, th {
        padding: 5px;
    }
    th {
        color: #6eafdb;
        font-weight: bold;
    }
    table.dtl tr:nth-child(even) {
        background: #efefef;
    }
    table.dtl td, th {
        /* border: 1px solid #dddddd; */
        text-align: left;
        padding: 6px;
    }
    table.wks tr:nth-child(even) {
        background: #e7f5ff;
    }
    table.wks td, th {
        /* border: 1px solid #dddddd; */
        text-align: left;
        padding: 6px;
    }
  </style>
@endsection
