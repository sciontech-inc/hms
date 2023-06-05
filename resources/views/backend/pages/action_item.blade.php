@extends('backend.master.index')

@section('title', 'FEATURES')

@section('breadcrumbs')
    <span>Features</span>
@endsection

@section('content')
<div class="main">
    <div class="row">
        <div class="col-12 text-center"><h1 class="application-title">FEATURES</h1></div>
        <div class="col-2 mb-4">
            <a class="btn btn-light action-menu" href="/dashboard"><img src="/images/action-items/Dashboards and Analytics.png" alt=""/> <span class="action-title">Dashboards and Analytics</span></a>
        </div>
        <div class="col-2 mb-4">
            <a class="btn btn-light action-menu" href="/hms/patients"><img src="/images/action-items/Patient Registration.png" alt=""/> <span class="action-title">Patient Registration</span></a>
        </div>
        <div class="col-2 mb-4">
            <a class="btn btn-light action-menu" href="/hms/appointment"><img src="/images/action-items/Appointment Schedule.png" alt=""/> <span class="action-title">Appointment Schedule</span></a>
        </div>
        <div class="col-2 mb-4">
            <a class="btn btn-light action-menu" href="#"><img src="/images/action-items/Hospital Management.png" alt=""/> <span class="action-title">Hospital Management</span></a>
        </div>
        <div class="col-2 mb-4">
            <a class="btn btn-light action-menu" href="#"><img src="/images/action-items/Emergency.png" alt=""/> <span class="action-title">Emergency</span></a>
        </div>
        <div class="col-2 mb-4">
            <a class="btn btn-light action-menu" href="#"><img src="/images/action-items/Facility.png" alt=""/> <span class="action-title">Facility</span></a>
        </div>
        <div class="col-2 mb-4">
            <a class="btn btn-light action-menu" href="#"><img src="/images/action-items/Admission.png" alt=""/> <span class="action-title">Admission and Discharge</span></a>
        </div>
        <div class="col-2 mb-4">
            <a class="btn btn-light action-menu" href="#"><img src="/images/action-items/Nurse Station.png" alt=""/> <span class="action-title">Nurse Station</span></a>
        </div>
        <div class="col-2 mb-4">
            <a class="btn btn-light action-menu" href="/hms/billing"><img src="/images/action-items/Billing and Collection.png" alt=""/> <span class="action-title">Billing & Collection</span></a>
        </div>
        <div class="col-2 mb-4">
            <a class="btn btn-light action-menu" href="#"><img src="/images/action-items/Insurance and Eclaim.png" alt=""/> <span class="action-title">Insurance and HMO</span></a>
        </div>
        <div class="col-2 mb-4">
            <a class="btn btn-light action-menu" href="#"><img src="/images/action-items/Laboratory.png" alt=""/> <span class="action-title">Laboratory</span></a>
        </div>
        <div class="col-2 mb-4">
            <a class="btn btn-light action-menu" href="#"><img src="/images/action-items/Blood Bank.png" alt=""/> <span class="action-title">Blood Bank</span></a>
        </div>
        <div class="col-2 mb-4">
            <a class="btn btn-light action-menu" href="#"><img src="/images/action-items/Radiology.png" alt=""/> <span class="action-title">Radiology</span></a>
        </div>
        <div class="col-2 mb-4">
            <a class="btn btn-light action-menu" href="#"><img src="/images/action-items/Linen and Laundry.png" alt=""/> <span class="action-title">Linen and Laundry</span></a>
        </div>
        <div class="col-2 mb-4">
            <a class="btn btn-light action-menu" href="#"><img src="/images/action-items/Mortuary Management.png" alt=""/> <span class="action-title">Mortuary Management</span></a>
        </div>
        <div class="col-2 mb-4">
            <a class="btn btn-light action-menu" href="#"><img src="/images/action-items/Feedback and Survey.png" alt=""/> <span class="action-title">Feedback and Survey</span></a>
        </div>
        <div class="col-2 mb-4">
            <a class="btn btn-light action-menu" href="#"><img src="/images/action-items/Inventory Management.png" alt=""/> <span class="action-title">Inventory Management</span></a>
        </div>
        <div class="col-2 mb-4">
            <a class="btn btn-light action-menu" href="#"><img src="/images/action-items/Medical Records.png" alt=""/> <span class="action-title">Medical Records</span></a>
        </div>
        <div class="col-2 mb-4">
            <a class="btn btn-light action-menu" href="#"><img src="/images/action-items/HRIS.png" alt=""/> <span class="action-title">HRIS</span></a>
        </div>
        <div class="col-2 mb-4">
            <a class="btn btn-light action-menu" href="#"><img src="/images/action-items/Pharmacy Management.png" alt=""/> <span class="action-title">Pharmacy Management</span></a>
        </div>
        <div class="col-2 mb-4">
            <a class="btn btn-light action-menu" href="#"><img src="/images/action-items/Philhealth eClaims.png" alt=""/> <span class="action-title">Philhealth eClaims</span></a>
        </div>
        <div class="col-2 mb-4">
            <a class="btn btn-light action-menu" href="#"><img src="/images/action-items/PACS.png" alt=""/> <span class="action-title">PACS</span></a>
        </div>
        <div class="col-2 mb-4">
            <a class="btn btn-light action-menu" href="#"><img src="/images/action-items/Reports.png" alt=""/> <span class="action-title">Reports</span></a>
        </div>
        <div class="col-2 mb-4">
            <a class="btn btn-light action-menu" href="#"><img src="/images/action-items/Settings and Maintenance.png" alt=""/> <span class="action-title">Settings and Maintenance</span></a>
        </div>
    </div>
</div>
@endsection

@section('chart-js')

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    $(function() {
        scion.centralized_button(true, true, true, true);
        $('body').delegate('.action-menu', 'click', function() {
            
        });
    });
</script>
@endsection

@section('styles')
<style>
.col-2.mb-4 {
    margin: 0 auto !important;
}
.action-menu .action-title {
    font-size: 16px !important;
    display: block;
    font-weight: bold;
    color: #1d267d;
}
h1.application-title {
    text-align: center;
    font-weight: bold;
    color: #014878;
    font-size: 50px;
    margin-bottom: 30px;
}
.action-menu {
    width: 100%;
    transition: .3s;
}
.action-menu:hover {
    transform: scale(1.1);
}
.action-menu img {
    width: 100%;
    padding: 10px 0;
}
.action-menu .action-title {
    font-size: 12px;
    display: block;
    font-weight: bold;
    color: #1d267d;
}
.action-menu {
    background: 0px !important;
    border: 0px;
    padding: 0px;
}
</style>
@endsection