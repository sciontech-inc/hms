
<div id="insurance_tab" class="form-tab">
    <h3>INSURANCE MANAGEMENT</h3>
    <div class="row">
        <div class="col-12">
            <table id="insurance_table" class="table table-striped" style="width:100%">
            </table>
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

<div class="sc-modal-content" id="insurance_form">
    <div class="sc-modal-dialog sc-xl">
        <div class="sc-modal-header">
            <span class="sc-title-bar"></span>
            <span class="sc-close" onclick="scion.create.sc_modal('insurance_form').hide('all', modalHideFunction)"><i class="fas fa-times"></i></span>
        </div>
        <div class="sc-modal-body">
            <form method="post" id="workAssignmentsForm" class="form-record">
                <div class="row">
                    <div class="form-group col-md-12 title">
                        @include('backend.partial.component.lookup', [
                            'label' => "BILLING ID",
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
                        <label>INSURANCE ID</label>
                        <input type="text" class="form-control" id="insurance_id" name="insurance_id" placeholder="INSURANCE ID"/>
                    </div>
                    <div class="form-group col-md-6 title">
                        <label>INSURANCE PROVIDER</label>
                        <input type="text" class="form-control" id="insurance_provider" name="insurance_provider" placeholder="INSURANCE PROVIDER"/>
                    </div>
                    <div class="form-group col-md-6 title">
                        <label>POLICY NUMBER</label>
                        <input type="text" class="form-control" id="policy_number" name="policy_number" placeholder="POLICY NUMBER"/>
                    </div>
                    <div class="form-group col-md-6 status">
                        <label>POLICY TYPE</label>
                        <select class="form-control" name="policy_type" id="policy_type">
                            <option value="HEALTH INSURANCE">HEALTH INSURANCE</option>
                            <option value="DENTAL INSURANCE">DENTAL INSURANCE</option>
                            <option value="VISION INSURANCE">VISION INSURANCE</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6 title">
                        <label>START DATE</label>
                        <input type="date" class="form-control" id="start_date" name="start_date"/>
                    </div>
                    <div class="form-group col-md-6 title">
                        <label>END DATE</label>
                        <input type="date" class="form-control" id="end_date" name="end_date"/>
                    </div>
                    <div class="form-group col-md-12 title">
                        <label>COVERAGE DETAILS</label>
                        <textarea type="text" class="form-control" name="coverage_details" id="coverage_details" cols="30" rows="3" placeholder="COVERAGE DETAILS"></textarea>
                    </div>
                    <div class="form-group col-md-6 title">
                        <label>ELEGIBILITY VERIFICATION DATE</label>
                        <input type="date" class="form-control" id="eligibility_verification_date" name="eligibility_verification_date"/>
                    </div>
                    <div class="form-group col-md-6 status">
                        <label>ELIGIBILITY STATUS</label>
                        <select class="form-control" name="policy_type" id="policy_type">
                            <option value="PENDING">PENDING</option>
                            <option value="ACTIVE">ACTIVE</option>
                            <option value="INACTIVE">INACTIVE</option>
                        </select>
                    </div>
                    <div class="form-group col-md-12 title">
                        <label>VERIFICATION NOTE</label>
                        <textarea type="text" class="form-control" name="verification_note" id="verification_note" cols="30" rows="3" placeholder="VERIFICATION NOTE"></textarea>
                    </div>
                    <div class="form-group col-md-6 title">
                        <label>CLAIM NUMBER</label>
                        <input type="number" class="form-control" id="claim_number" name="claim_number" placeholder="CLAIM NUMBER"/>
                    </div>
                    <div class="form-group col-md-6 title">
                        <label>SERVICE CODE</label>
                        <input type="text" class="form-control" id="service_code" name="service_code" placeholder="SERVICE CODE"/>
                    </div>
                    <div class="form-group col-md-6 title">
                        <label>DIAGNOSTIC CODE</label>
                        <input type="text" class="form-control" id="diagnostic_code" name="diagnostic_code" placeholder="DIAGNOSTIC CODE"/>
                    </div>
                    <div class="form-group col-md-6 title">
                        <label>CLAIM SUBMISSION DATE</label>
                        <input type="date" class="form-control" id="claim_submission_date" name="claim_submission_date"/>
                    </div>
                    <div class="form-group col-md-6 status">
                        <label>CLAIM STATUS</label>
                        <select class="form-control" name="policy_type" id="policy_type">
                            <option value="PENDING">PENDING</option>
                            <option value="APPROVED">APPROVED</option>
                            <option value="DENIED">DENIED</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6 title">
                        <label>REIMBURSEMENT AMOUNT</label>
                        <input type="number" class="form-control" id="reimbursement_amount" name="reimbursement_amount" placeholder="REIMBURSEMENT AMOUNT"/>
                    </div>
                    <div class="form-group col-md-12 title">
                        <label>DENIAL NOTE</label>
                        <textarea type="text" class="form-control" name="denial_reason" id="denial_reason" cols="30" rows="3" placeholder="DENIAL REASON"></textarea>
                    </div>
                    <div class="form-group col-md-12 title">
                        <label>RESUBMISSION NOTE</label>
                        <textarea type="text" class="form-control" name="resubmission_note" id="resubmission_note" cols="30" rows="3" placeholder="RESUBMISSION NOTE"></textarea>
                    </div>
                    <div class="form-group col-md-12 title">
                        <label>PAYMENT INFORMATION</label>
                        <textarea type="text" class="form-control" name="payment_information" id="payment_information" cols="30" rows="3" placeholder="PAYMENT INFORMATION"></textarea>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
