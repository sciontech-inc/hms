<div id="procedures_undertaken_tab" class="form-tab">
    <h5>PROCEDURES UNDERTAKEN</h5>
    <div style="padding: 1em;"></div>
    <div class="procedures-undertaken-table">
        <div class="row">
            <div class="col-12">
                <table id="procedures_undertaken_table" class="table table-striped" style="width:100%">
                </table>
            </div>
        </div>
    </div>
    <hr>
    {{-- MODAL --}}
    @section('sc-modal')
    <div class="sc-modal-content" id="procedures_undertaken_form">
        <div class="sc-modal-dialog">
            <div class="sc-modal-header">
                <span class="sc-title-bar"></span>
                <span class="sc-close" onclick="scion.create.sc_modal('procedures_undertaken_form').hide('all', modalHideFunction)"><i class="fas fa-times"></i></span>
            </div>
            <div class="sc-modal-body">
                <form id="procedurestakenForm" method="post" class="form-record">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group procedure_date">
                                <label>DATE OF PROCEDURE</label>
                                <input type="date" class="form-control" name="procedure_date" id="procedure_date"/>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group procedure_name">
                                <label>PROCEDURE NAME <span class="required">*</span></label>
                                <input type="text" class="form-control" name="procedure_name" id="procedure_name"/>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group procedure_description">
                                <label>PROCEDURE DESCRIPTION <span class="required">*</span></label>
                                <textarea type="text" class="form-control" name="procedure_description" id="procedure_description"></textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group reason">
                                <label>REASON <span class="required">*</span></label>
                                <input type="text" class="form-control" name="reason" id="reason"/>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group result">
                                <label>RESULTS OF THE PROCEDURE <span class="required">*</span></label>
                                <input type="text" class="form-control" name="result" id="result"/>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group preprocedure_preparation">
                                <label>PRE-PROCEDURE PREPARATION<span class="required">*</span></label>
                                <textarea type="text" class="form-control" name="preprocedure_preparation" id="preprocedure_preparation"></textarea>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group postprocedure_preparation">
                                <label>POST-PROCEDURE PREPARATION <span class="required">*</span></label>
                                <textarea type="text" class="form-control" name="postprocedure_preparation" id="postprocedure_preparation"></textarea>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group complications">
                                <label>COMPLICATIONS <span class="required">*</span></label>
                                <input type="text" class="form-control" name="complications" id="complications"/>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group sedation_used">
                                <label>SEDATION USED <span class="required">*</span></label>
                                <input type="text" class="form-control" name="sedation_used" id="sedation_used"/>
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
