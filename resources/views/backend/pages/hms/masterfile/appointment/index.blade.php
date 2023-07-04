@extends('backend.master.index')

@section('title', 'SET AN APPOINTMENT')

@section('styles')
<style>
    .sc-modal-dialog {
        max-width: 980px !important;
        background: #fff;
        top: 20px;
        position: relative;
        margin: auto;
        border-radius: 9px;
    }
</style>
@endsection
@section('breadcrumbs')
    <span>APPOINTMENT</span> / <span class="highlight">SET AN APPOINTMENT</span>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">APPOINTMENT NOTES: CREATE APPOINTMENT</h5>
            </div>
            @include('backend.partial.flash-message')
            <div class="col-12">
                <div class="card-body">
                    <table id="set_appointment_table" class="table table-striped" style="width:100%"> </table>
                </div>
            </div>
        </div>
    </div>
</div>

@section('sc-modal')
@parent
<div class="sc-modal-content" id="set_appointment_form">
    <div class="sc-modal-dialog">
        <div class="sc-modal-header">
            <span class="sc-title-bar"></span>
            <span class="sc-close" onclick="scion.create.sc_modal('set_appointment_form').hide('all', modalHideFunction)"><i class="fas fa-times"></i></span>
        </div>
        <div class="sc-modal-body">
            <form method="post" id="specializedNotesForm" class="form-record">
                <div class="row">
                    <div class="form-group col-md-12 patient_id">
                        <label>PATIENT NAME</label>
                        @include('backend.partial.component.lookup', [
                            'label' => "PATIENTS",
                            'placeholder' => '<NEW>',
                            'id' => "patient_id",
                            'title' => "PATIENT RECORD",
                            'url' => "/hms/set_appointment/patient/get",
                            'data' => array(
                                array('data' => "DT_RowIndex", 'title' => "#"),
                                array('data' => "patient_id", 'title' => "Patient ID"),
                                array('data' => "firstname", 'title' => "First Name"),
                                array('data' => "middlename", 'title' => "Middle Name"),
                                array('data' => "lastname", 'title' => "Last Name"),
                                array('data' => "sex", 'title' => "Sex"),
                            ),
                            'disable' => true,
                            'lookup_module' => 'patient-information',
                            'modal_type'=> 'all',
                            'lookup_type' => 'main'
                        ])
                    </div>
                    <div class="form-group col-md-6 appointment_type">
                        <label>APPOINTMENT TYPE</label>
                        <select class="form-control" name="appointment_type" id="appointment_type">
                            <option value="GENERAL CHECK UP">GENERAL CHECK UP</option>
                            <option value="CONSULTATION">CONSULTATION</option>
                            <option value="FOLLOW-UP">FOLLOW-UP</option>
                            <option value="SPECIFIC MEDICAL PROCEDURE">SPECIFIC MEDICAL PROCEDURE</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6 appointment_staff">
                        <label>DOCTOR/NURSE/HEALTCARE PROVIDER</label>
                        <select class="form-control" name="appointment_staff" id="appointment_staff">
                            <option value="1">DR. JOSHUA OPINION</option>
                            <option value="0">DR. JETRO MACALIPAY</option>
                            <option value="0">DR. JUDE MUEGO</option>
                            <option value="0">DR. ARVIN OLIVAS</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6 appointment_date">
                        <label>APPOINTMENT DATE</label>
                        <input type="date" class="form-control" id="appointment_date" name="appointment_date"/>
                    </div>
                    <div class="form-group col-md-6 appointment_time">
                        <label>APPOINTMENT TIME</label>
                        <input type="time" class="form-control" id="appointment_time" name="appointment_time"/>
                    </div>
                    <div class="form-group col-md-6 appointment_status">
                        <label>APPOINTMENT STATUS</label>
                        <select class="form-control" name="appointment_status" id="appointment_status">
                            <option value="SCHEDULED">SCHEDULED</option>
                            <option value="CONFIRMED">CONFIRMED</option>
                            <option value="CANCELLED">CANCELLED</option>
                            <option value="RESCHEDULED">RESCHEDULED</option>
                            <option value="COMPLETED">COMPLETED</option>
                            <option value="NO-SHOW">NO-SHOW</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6 appointment_notification_preferences">
                        <label>NOTIFICATION PREFERENCES</label>
                        <select class="form-control" name="appointment_notification_preferences" id="appointment_notification_preferences">
                            <option value="SMS">SMS</option>
                            <option value="PHONE CALL">PHONE CALL</option>
                            <option value="EMAIL">EMAIL</option>
                            <option value="SOCIAL MEDIA">SOCIAL MEDIA</option>
                            <option value="OTHER">OTHER</option>
                        </select>
                    </div>
                    <div class="form-group col-md-12 appointment_remarks">
                        <label>REMARKS</label>
                        <textarea class="form-control" name="appointment_remarks" id="appointment_remarks" cols="10" rows="3" placeholder="REMARKS, NOTES OR COMMENTS"></textarea>
                    </div>
                    <div class="form-group col-md-6 appointment_location">
                        <label>ROOM/LOCATION</label>
                        <input type="text" class="form-control" id="appointment_location" name="appointment_location" placeholder="ROOM OR LOCATION"/>
                    </div>
                    <div class="form-group col-md-6 appointment_confirmation">
                        <label>CONFIRMATION</label>
                        <select class="form-control" name="appointment_confirmation" id="appointment_confirmation">
                            <option value="UNCONFIRMED">UNCONFIRMED</option>
                            <option value="CONFIRMED">CONFIRMED</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6 appointment_next_appointment">
                        <label>NEXT APPOINTMENT</label>
                        <input type="date" class="form-control" id="appointment_next_appointment" name="appointment_next_appointment"/>
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
    <script src="/js/backend/pages/hms/masterfile/appointment_schedule.js"></script>
   
@endsection