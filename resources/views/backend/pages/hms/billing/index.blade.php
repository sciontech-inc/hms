@extends('backend.master.index')

@section('title', 'BILLING')

@section('style')

@endsection

@section('breadcrumbs')
    <span>TRANSACTION/BILLING AND PAYMENT</span>  /  <span class="highlight">BILLING</span>
@endsection

@section('left-content')
    @include('backend.partial.component.tab_list', [
        'id'=>'billings',
        'data'=>array(
            array('id'=>'general', 'title'=>'GENERAL', 'icon'=>' fas fa-file-alt', 'active'=>true, 'disabled'=>false, 'function'=>true),
            array('id'=>'billing_history', 'title'=>'BILLING HISTORY', 'icon'=>' fas fa-mobile-alt', 'active'=>false, 'disabled'=>false, 'function'=>true),
            array('id'=>'insurance', 'title'=>'INSURANCE MANAGEMENT', 'icon'=>' fas fa-mobile-alt', 'active'=>false, 'disabled'=>false, 'function'=>true),
            array('id'=>'payment_history', 'title'=>'PAYMENT RECORDS', 'icon'=>' fas fa-money-bill', 'active'=>false, 'disabled'=>false, 'function'=>true),
            array('id'=>'report_summary', 'title'=>'REPORT AND SUMMARY', 'icon'=>' fas fa-clipboard-list', 'active'=>false, 'disabled'=>false, 'function'=>true),
        )
    ])
@endsection
<style>
    .hdr-title {
        font-size: 13px;
        color: #3282b8;
        font-weight: bold;
    }
    .hdr-detail {
        float: right;
    }
</style>
@section('content')
<div class="row" style="height:100%;">
    <div class="col-12" style="height:100%;">
        <div class="tab" style="height:100%;">
            <div class="tab-content">
                <form class="form-record" method="post" id="employeeInformation">
                    @include('backend.pages.hms.billing.tabs.general_tab')
                    @include('backend.pages.hms.billing.tabs.billing_history')
                    @include('backend.pages.hms.billing.tabs.insurance')
                    @include('backend.pages.hms.billing.tabs.payment')
                    @include('backend.pages.hms.billing.tabs.report_summary')
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('right-content')
<div class="row">
    <div class="col-md-12">
    </div>
</div>
@endsection

@section('scripts')
<script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="/js/backend/pages/hms/billingAndPayment/billing.js"></script>
@endsection
