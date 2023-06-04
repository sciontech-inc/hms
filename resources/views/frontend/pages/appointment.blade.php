@extends('frontend.master.index')

@section('title', 'ONLINE APPOINTMENT')

@section('breadcrumbs')
    <span>MedIQ Online</span> / <span class="highlight">ONLINE APPOINTMENT</span>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">ONLINE APPOINTMENT: CREATE APPOINTMENT</h5>
            </div>
            @include('frontend.partial.flash-message')
            <div class="col-12">
                <div class="card-body">
                    <table id="online_appointment_table" class="table table-striped" style="width:100%"> </table>
                </div>
            </div>
        </div>
    </div>
</div>

@section('sc-modal')
@parent
<div class="sc-modal-content" id="online_appointment_form">
    <div class="sc-modal-dialog">
        <div class="sc-modal-header">
            <span class="sc-title-bar"></span>
            <span class="sc-close" onclick="scion.create.sc_modal('online_appointment_form').hide('all', modalHideFunction)"><i class="fas fa-times"></i></span>
        </div>
        <div class="sc-modal-body">
            <form method="post" id="onlineAppointmentForm" class="form-record">
                <div class="row">
                    <div class="form-group col-md-12 firstname">
                        <label>FIRST NAME</label>
                        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="FIRST NAME"/>
                    </div>
                    <div class="form-group col-md-12 middlename">
                        <label>MIDDLE NAME</label>
                        <input type="text" class="form-control" id="middlename" name="middlename" placeholder="MIDDLE NAME"/>
                    </div>
                    <div class="form-group col-md-12 lastname">
                        <label>LAST NAME</label>
                        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="LAST NAME"/>
                    </div>
                    <div class="form-group col-md-12 sex">
                        <label>SEX</label>
                        <select class="form-control" name="sex" id="sex">
                            <option value="MALE">MALE</option>
                            <option value="FEMALE">FEMALE</option>
                        </select>
                    </div>
                    <div class="form-group col-md-12 birthdate">
                        <label>DATE OF BIRTH</label>
                        <input type="date" class="form-control" id="birthdate" name="birthdate"/>
                    </div>
                    <div class="form-group col-md-12 contact_no">
                        <label>CONTACT NO.</label>
                        <input type="number" class="form-control" id="contact_no" name="contact_no" placeholder="0950XXXXXXX"/>
                    </div>
                    <div class="form-group col-md-12 email">
                        <label>EMAIL</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="EMAIL"/>
                    </div>
                    <div class="form-group col-md-12 address">
                        <label>ADDRESS</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="ADDRESS"/>
                    </div>
                    <div class="form-group col-md-12 date">
                        <label>DATE OF APPOINTMENT</label>
                        <input type="date" class="form-control" id="date" name="date"/>
                    </div>
                    <div class="form-group col-md-12 time">
                        <label>TIME OF APPOINTMENT</label>
                        <input type="time" class="form-control" id="time" name="time"/>
                    </div>
                    <div class="form-group col-md-12 reason">
                        <label>REASON</label>
                        <textarea class="form-control" name="reason" id="reason" cols="5" rows="2"></textarea>
                    </div>
                    <div class="form-group col-md-12 medical_history">
                        <label>MEDICAL HISTORY</label>
                        <textarea class="form-control" name="medical_history" id="medical_history" cols="5" rows="2"></textarea>
                    </div>
                    <div class="form-group col-md-12 preferred_doctor">
                        <label>PREFERRED DOCTOR</label>
                        <input type="text" class="form-control" id="preferred_doctor" name="preferred_doctor" placeholder="PREFERRED DOCTOR"/>
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
    <script src="/js/frontend/pages/online/online_appointment.js"></script>
@endsection