
<div id="general_tab" class="form-tab">
    <h3>BILLING</h3>
    <div class="row">
        <div class="col-12">
            <table id="general_table" class="table table-striped" style="width:100%"></table>
            <hr style="border-top:1px dashed black">
        <div class="row">
            <div class="col-md-3">
                <span class="hdr-title">PATIENT NAME :</span> <span class="hdr-detail">001</span>
            </div>
            <div class="col-md-3">
                <span class="hdr-title">ADMISSION NO. :</span> <span class="hdr-detail">001</span>
            </div>
            <div class="col-md-3">
                <span class="hdr-title">INVOICE NO. :</span> <span class="hdr-detail">001</span>
            </div>
            <div class="col-md-3">
                <span class="hdr-title">INSURANCE CLAIM :</span> <span class="hdr-detail"></span>
            </div>
            <div class="col-md-3">
                <span class="hdr-title">TOTAL :</span> <span class="hdr-detail"></span>
            </div>
            <div class="col-md-3">
                <span class="hdr-title">PAID :</span> <span class="hdr-detail"></span>
            </div>
            <div class="col-md-3">
                <span class="hdr-title">BALANCE :</span> <span class="hdr-detail"></span>
            </div>
            <div class="col-md-3">
                <span class="hdr-title">STATUS: </span> <span class="hdr-detail"></span>
            </div>
        </div>
        <hr>
        <h5>BILLING DETAILS</h5>
        <table id="billing_detail_table" class="table table-striped" style="width:100%"></table>
        </div>
    </div>
</div>


@section('sc-modal')
@parent
<div class="sc-modal-content" id="billing_form">
    <div class="sc-modal-dialog sc-xl">
        <div class="sc-modal-header">
            <span class="sc-title-bar"></span>
            <span class="sc-close" onclick="scion.create.sc_modal('billing_form').hide('all', modalHideFunction)"><i class="fas fa-times"></i></span>
        </div>
        <div class="sc-modal-body">
            <form method="post" id="workAssignmentsForm" class="form-record">
                <div class="row">
                    <div class="form-group col-md-12 title">
                        <label>PATIENT NAME</label>
                        @include('backend.partial.component.lookup', [
                            'label' => "ADMISSION",
                            'placeholder' => '<NEW>',
                            'id' => "admission_id",
                            'title' => "ADMISSION RECORD",
                            'url' => "/hms/billing/admission/get",
                            'data' => array(
                                array('data' => "DT_RowIndex", 'title' => "#"),
                                array('data' => "admission_no", 'title' => "Admission Number"),
                                array('data' => "admission_date", 'title' => "Admission Date"),
                                array('data' => "admission_time", 'title' => "Admission Time"),
                                array('data' => "room_no", 'title' => "Room No."),
                                array('data' => "bed_no", 'title' => "Bed No."),
                                array('data' => "nurse_station", 'title' => "Nurse Station"),
                                array('data' => "admission_type", 'title' => "Admission Type"),
                            ),
                            'disable' => true,
                            'lookup_module' => 'admission-information',
                            'modal_type'=> 'all',
                            'lookup_type' => 'main'
                        ])
                    </div>
                    <div class="form-group col-md-6 title">
                        <label>INVOICE NUMBER</label>
                        <input type="text" class="form-control" id="invoice_number" name="invoice_number" placeholder="INVOICE NUMBER"/>
                    </div>
                    <div class="form-group col-md-6 status">
                        <label>BILLING STATUS</label>
                        <select class="form-control" name="billing_status" id="billing_status">
                            <option value="PENDING">PENDING</option>
                            <option value="INSURANCE CLAIM">INSURANCE CLAIM</option>
                            <option value="PAID IN FULL">PAID IN FULL</option>
                            <option value="PARTIALLY PAID">PARTIALLY PAID</option>
                        </select>
                    </div>
                    <div class="form-group col-md-12 title">
                        <label>INSURANCE CLAIM NO</label>
                        <input type="text" class="form-control" id="insurance_claim_no" name="insurance_claim_no" placeholder="INSURANCE CLAIM NO"/>
                    </div>
                    <div class="form-group col-md-12 title">
                        <label>REMARKS</label>
                        <textarea type="text" class="form-control" name="remarks" id="remarks" cols="30" rows="3" placeholder="REMARKS"></textarea>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
