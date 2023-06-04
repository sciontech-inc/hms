@extends('frontend.master.index')

@section('title', 'ONLINE PAYMENT')

@section('styles')
<style>
.sc-modal-dialog {
    max-width: 860px;
    background: #fff;
    top: 20px;
    position: relative;
    margin: auto;
    border-radius: 9px;
}
label {
  cursor: pointer;
  filter: grayscale(100%);
}

label:hover {
  filter: grayscale(0);
}
input[type="radio"]:checked + label {
  filter: grayscale(0);
}
</style>
@endsection

@section('breadcrumbs')
    <span>MedIQ Online</span> / <span class="highlight">ONLINE PAYMENT</span>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">ONLINE PAYMENT: CREATE PAYMENT</h5>
            </div>
            @include('frontend.partial.flash-message')
            <div class="col-12">
                <div class="card-body">
                    <table id="online_payment_table" class="table table-striped" style="width:100%"> </table>
                </div>
            </div>
        </div>
    </div>
</div>
@section('sc-modal')
@parent
<div class="sc-modal-content bd-example-modal-lg" id="online_payment_form">
    <div class="sc-modal-dialog modal-lg">
        <div class="sc-modal-header">
            <span class="sc-title-bar"></span>
            <span class="sc-close" onclick="scion.create.sc_modal('online_payment_form').hide('all', modalHideFunction)"><i class="fas fa-times"></i></span>
        </div>
        <div class="sc-modal-body">
            <form method="post" id="onlinePaymentForm" class="form-record">
            <ul>
                <li><a href="#validation-step-1">INVOICE DETAILS<br /><small></small></a></li>
                <li><a href="#validation-step-2">PAYMENT DETAILS<br /><small></small></a></li>
            </ul>
            <div>
                <div id="validation-step-1">
                    <div class="form-group col-md-12 invoice_number">
                        <label>INVOICE NUMBER</label>
                        <input type="text" class="form-control" id="invoice_number" name="invoice_number" placeholder="INVOICE NUMBER"/>
                    </div>
                    <div class="form-group col-md-12 contact_no">
                        <label>CONTACT NO</label>
                        <input type="number" class="form-control" id="contact_no" name="contact_no" placeholder="CONTACT NO"/>
                    </div>
                    <div class="form-group col-md-12 email">
                        <label>EMAIL</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="EMAIL"/>
                    </div>
                </div>
                <div id="validation-step-2">
                    <div class="form-group col-md-12 amount">
                        <label>AMOUNT</label>
                        <input type="number" class="form-control" id="amount" name="amount" placeholder="AMOUNT"/>
                    </div>
                    <div class="form-group col-md-12 payment_type">
                        <fieldset>
                        <label>SELECT PAYMENT METHOD</label> <br>
                            <input type="text" id="payment_type" style="display: none;">
                            <input type="radio" name="payment_type" class="sr-only" id="gcash"  value="GCASH">
                            <label for="gcash">
                                <img src="/images/gcash.png" alt="GCASH">
                            </label>
                            <input type="radio" name="payment_type" class="sr-only" id="maya"  value="MAYA">
                            <label for="maya">
                                <img src="/images/maya.png" alt="MAYA">
                            </label>
                            <input type="radio" name="payment_type" class="sr-only" id="bdo"  value="BDO">
                            <label for="bdo">
                                <img src="/images/bdo.png" alt="BDO">
                            </label>
                            <input type="radio" name="payment_type" class="sr-only" id="bpi"  value="BPI">
                            <label for="bpi">
                                <img src="/images/bpi.png" alt="BPI">
                            </label>
                            <input type="radio" name="payment_type" class="sr-only" id="union_bank"  value="UNION BANK">
                            <label for="ub">
                                <img src="/images/ub.png" alt="UNION BANK">
                            </label>
                            <input type="radio" name="payment_type" class="sr-only" id="other"  value="CREDIT/DEBIT CARD / PAYPAL">
                            <label for="other">
                                <img src="/images/other.png" alt="CREDIT/DEBIT CARD / PAYPAL">
                            </label>
                        </fieldset>
                    </div>
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
    <script src="/js/frontend/pages/online/online_payment.js"></script>

    <script>
        $(function() {
            $('input[type=radio][name=payment_type]').change(function() {
                if (this.value == 'GCASH') {
                   $('#payment_type').val('GCASH');
                }
                else if (this.value == 'MAYA') {
                    $('#payment_type').val('MAYA');

                }
                else if (this.value == 'BDO') {
                    $('#payment_type').val('BDO');

                }
                else if (this.value == 'BPI') {
                    $('#payment_type').val('BPI');

                }
                else if (this.value == 'UNION BANK') {
                    $('#payment_type').val('UNION BANK');

                }
                else if (this.value == 'CREDIT/DEBIT CARD / PAYPAL') {
                    $('#payment_type').val('CREDIT/DEBIT CARD / PAYPAL');

                }
            });
        });
		$(function() {
			$("#smartwizard-default-primary").smartWizard({
				theme: "default",
				showStepURLhash: false
			});
			$("#smartwizard-default-success").smartWizard({
				theme: "default",
				showStepURLhash: false
			});
			$("#smartwizard-default-danger").smartWizard({
				theme: "default",
				showStepURLhash: false
			});
			$("#smartwizard-default-warning").smartWizard({
				theme: "default",
				showStepURLhash: false
			});
			$("#smartwizard-arrows-primary").smartWizard({
				theme: "arrows",
				showStepURLhash: false
			});
			$("#smartwizard-arrows-success").smartWizard({
				theme: "arrows",
				showStepURLhash: false
			});
			$("#smartwizard-arrows-danger").smartWizard({
				theme: "arrows",
				showStepURLhash: false
			});
			$("#smartwizard-arrows-warning").smartWizard({
				theme: "arrows",
				showStepURLhash: false
			});
			// Validation
			var $validationForm = $("#onlinePaymentForm");
			$validationForm.validate({
				errorPlacement: function errorPlacement(error, element) {
					$(element).parents(".form-group").append(
						error.addClass("invalid-feedback small d-block")
					)
				},
				highlight: function(element) {
					$(element).addClass("is-invalid");
				},
				unhighlight: function(element) {
					$(element).removeClass("is-invalid");
				},
				rules: {
					"wizard-confirm": {
						equalTo: "input[name=\"wizard-password\"]"
					}
				}
			});
			$validationForm
				.smartWizard({
					autoAdjustHeight: false,
					backButtonSupport: false,
					useURLhash: false,
					showStepURLhash: false,
					toolbarSettings: {
					}
				})
				
			$validationForm.find(".btn-submit").on("click", function() {
				if (!$validationForm.valid()) {
					return;
				}
				alert("Great! The form is valid and ready to submit.");
				return false;
			});
		});
	</script>
@endsection

