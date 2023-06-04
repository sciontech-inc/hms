@extends('backend.master.index')

@section('title', 'APPOINTMENT SCHEDULE')

@section('breadcrumbs')
    <span>APPOINTMENT MANAGEMENT</span> / <span class="highlight">APPOINTMENT SCHEDULE</span>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">APPOINTMENT: VIEWING OF SCHEDULE</h5>
            </div>
            @include('backend.partial.flash-message')
            <div class="col-12">
                <div class="card-body">
                    <div id='calendar'></div>
                </div>
            </div>
        </div>
    </div>
</div>

@section('sc-modal')
@parent
<div class="sc-modal-content" id="appointment_form">
    <div class="sc-modal-dialog sc-xl">
        <div class="sc-modal-header">
            <span class="sc-title-bar"></span>
            <span class="sc-close" onclick="scion.create.sc_modal('appointment_form').hide('all', modalHideFunction)"><i class="fas fa-times"></i></span>
        </div>
        <div class="sc-modal-body">
            <form method="post" id="workAssignmentsForm" class="form-record">
                <div class="row">
                    <div class="form-group col-md-12 title">
                        <label>PATIENT NAME</label>
                        <input type="text" class="form-control" id="patient_name" name="patient_name" placeholder="PATIENT NAME"/>
                    </div>
                    <div class="form-group col-md-6 title">
                        <label>APPOINTMENT DATE</label>
                        <input type="date" class="form-control" id="appointment_date" name="appointment_date"/>
                    </div>
                    <div class="form-group col-md-6 title">
                        <label>APPOINTMENT TIME</label>
                        <input type="time" class="form-control" id="appointment_time" name="appointment_time"/>
                    </div>
                    <div class="form-group col-md-6 status">
                        <label>DOCTOR/NURSE/HEALTCARE PROVIDER</label>
                        <select class="form-control" name="employee" id="employee">
                            <option value="1">DR. JOSHUA OPINION</option>
                            <option value="0">DR. JETRO MACALIPAY</option>
                            <option value="0">DR. JUDE MUEGO</option>
                            <option value="0">DR. ARVIN OLIVAS</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6 status">
                        <label>APPOINTMENT TYPE</label>
                        <select class="form-control" name="appointment_type" id="appointment_type">
                            <option value="GENERAL CHECK UP">GENERAL CHECK UP</option>
                            <option value="CONSULTATION">CONSULTATION</option>
                            <option value="FOLLOW-UP">FOLLOW-UP</option>
                            <option value="SPECIFIC MEDICAL PROCEDURE">SPECIFIC MEDICAL PROCEDURE</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6 status">
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
                    <div class="form-group col-md-6 status">
                        <label>NOTIFICATION PREFERENCES</label>
                        <select class="form-control" name="notification_preferences" id="notification_preferences">
                            <option value="SMS">SMS</option>
                            <option value="PHONE CALL">PHONE CALL</option>
                            <option value="EMAIL">EMAIL</option>
                            <option value="SOCIAL MEDIA">SOCIAL MEDIA</option>
                            <option value="OTHER">OTHER</option>
                        </select>
                    </div>
                    <div class="form-group col-md-12 title">
                        <label>REMARKS</label>
                        <textarea class="form-control" name="remarks" id="remarks" cols="10" rows="3" placeholder="REMARKS, NOTES OR COMMENTS"></textarea>
                    </div>
                    <div class="form-group col-md-6 title">
                        <label>ROOM/LOCATION</label>
                        <input type="text" class="form-control" id="room" name="room" placeholder="ROOM OR LOCATION"/>
                    </div>
                    <div class="form-group col-md-6 title">
                        <label>DURATION</label>
                        <input type="text" class="form-control" id="duration" name="duration" placeholder="DURATION"/>
                    </div>
                    <div class="form-group col-md-6 status">
                        <label>CONFIRMATION</label>
                        <select class="form-control" name="confirmation" id="confirmation">
                            <option value="UNCONFIRMED">UNCONFIRMED</option>
                            <option value="CONFIRMED">CONFIRMED</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6 title">
                        <label>NEXT APPOINTMENT</label>
                        <input type="date" class="form-control" id="next_appointment" name="next_appointment"/>
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

    <script>
        $(document).ready(function () {
    var SITEURL = "{{ url('/') }}";

    $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    var calendar = $('#calendar').fullCalendar({
                        editable: false,
                        header:{
                            left:'prev,next today',
                            center:'title',
                            right:'month,agendaWeek,agendaDay'
                        },
                        events: SITEURL + "/calendar",
                        displayEventTime: true,

                        eventRender: function (event, element, view) {
                            if (event.allDay === 'true') {
                                    event.allDay = true;
                            } else {
                                    event.allDay = false;
                            }
                        },
                        selectable: true,
                        selectHelper: true,
                    });

    });
    </script>
@endsection
