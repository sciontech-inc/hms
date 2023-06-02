<div id="allergies_tab" class="form-tab">
    <h5>ALLERGIES</h5>
    <div style="padding: 1em;"></div>
    <div class="row">
        <div class="col-6">
            <div class="form-group allergen">
                <label>ALLERGEN <span class="required">*</span></label>
                <input type="text" class="form-control" name="allergen" id="allergen"/>
            </div>
        </div>
        <div class="col-6">
            <div class="form-group reaction">
                <label>REACTION <span class="required">*</span></label>
                <input type="text" class="form-control" name="reaction" id="reaction"/>
            </div>
        </div>
        <div class="col-6">
            <div class="form-group severity">
                <label>SEVERITY <span class="required">*</span></label>
                <input type="text" class="form-control" name="severity" id="severity"/>
            </div>
        </div>
        <div class="col-6">
            <div class="form-group prognosis">
                <label>DATE OF ONSET</label>
                <input type="date" class="form-control" name="date_of_onset" id="date_of_onset"/>
            </div>
        </div>
        <div class="col-6">
            <div class="form-group treatment">
                <label>TREATMENT <span class="required">*</span></label>
                <textarea type="text" class="form-control" name="treatment" id="treatment"></textarea>
            </div>
        </div>
        <div class="col-6">
            <div class="form-group duration">
                <label>DURATION <span class="required">*</span></label>
                <input type="text" class="form-control" name="duration" id="duration"/>
            </div>
        </div>
        <div class="col-6">
            <div class="form-group source_of_information">
                <label>SOURCE OF INFORMATION <span class="required">*</span></label>
                <input type="text" class="form-control" name="source_of_information" id="source_of_information"/>
            </div>
        </div>
        <div class="col-6">
            <div class="form-group known_cross_reactives">
                <label>KNOWN CROSS-REACTIVES <span class="required">*</span></label>
                <input type="text" class="form-control" name="known_cross_reactives" id="known_cross_reactives"/>
            </div>
        </div>
        <div class="col-6">
            <div class="form-group current_management_plan">
                <label>CURRENT MANAGEMENT PLAN <span class="required">*</span></label>
                <textarea type="text" class="form-control" name="current_management_plan" id="current_management_plan"></textarea>
            </div>
        </div>
        <div class="col-6">
            <div class="form-group medications_to_avoid">
                <label>MEDICATIONS TO AVOID <span class="required">*</span></label>
                <input type="text" class="form-control" name="medications_to_avoid" id="medications_to_avoid"/>
            </div>
        </div>
        <div class="col-6">
            <div class="form-group severity_of_reaction_to_each_medication">
                <label>SEVERITY OF REACTION TO EACH MEDICATION<span class="required">*</span></label>
                <textarea type="text" class="form-control" name="severity_of_reaction_to_each_medication" id="severity_of_reaction_to_each_medication"></textarea>
            </div>
        </div>
        <div class="col-6">
            <div class="form-group anaphylaxis">
                <label>ANAPHYLAXIS <span class="required">*</span></label>
                <textarea type="text" class="form-control" name="anaphylaxis" id="anaphylaxis"></textarea>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group allergy_testing">
                <label>ALLERGY TESTING <span class="required">*</span></label>
                <input type="text" class="form-control" name="allergy_testing" id="allergy_testing"/>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group other_relevant_medical_history">
                <label>OTHER RELEVANT MEDICAL HISTORY <span class="required">*</span></label>
                <textarea type="text" class="form-control" name="other_relevant_medical_history" id="other_relevant_medical_history"></textarea>
            </div>
        </div>
    </div>
    <hr>
     <!-- <div class="educational-background-table">
        <div class="row">
            <div class="col-12">
                <table id="work_history_table" class="table table-striped" style="width:100%">
                </table>
            </div>
        </div>
    </div> -->
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
