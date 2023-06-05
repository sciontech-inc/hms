@extends('backend.master.index')

@section('title', 'VIDEO CONFERENCE')

@section('breadcrumbs')
    <span>EHR</span> / <span class="highlight">VIDEO CONFERENCE</span>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">VIDEO CONFERENCE: SCHEDULE A MEETING</h5>
            </div>
            @include('backend.partial.flash-message')
            <div class="col-12">
                <div class="card-body">
                    <table id="video_conference_table" class="table table-striped" style="width:100%"> </table>
                </div>
            </div>
        </div>
    </div>
</div>

@section('sc-modal')
@parent
<div class="sc-modal-content" id="video_conference_form">
    <div class="sc-modal-dialog">
        <div class="sc-modal-header">
            <span class="sc-title-bar"></span>
            <span class="sc-close" onclick="scion.create.sc_modal('video_conference_form').hide('all', modalHideFunction)"><i class="fas fa-times"></i></span>
        </div>
        <div class="sc-modal-body">
            <form method="post" id="videoConferenceForm" class="form-record">
                <div class="row">
                    <div class="form-group col-md-12 topic">
                        <label>TOPIC</label>
                        <input type="text" class="form-control" id="topic" name="topic" placeholder="TOPIC"/>
                    </div>
                    <div class="form-group col-md-12 agenda">
                        <label>AGENDA</label>
                        <input type="text" class="form-control" id="agenda" name="agenda" placeholder="AGENDA"/>
                    </div>
                    <div class="form-group col-md-12 duration">
                        <label>DURATION (minutes)</label>
                        <input type="number" class="form-control" id="duration" name="duration" placeholder="DURATION"/>
                    </div>
                    <div class="form-group col-md-12 participant_email">
                        <label>PARTICIPANT EMAIL</label>
                        <input type="email" class="form-control" id="participant_email" name="participant_email" placeholder="PARTICIPANT EMAIL"/>
                    </div>
                    <div class="form-group col-md-6 date">
                        <label>DATE</label>
                        <input type="date" class="form-control" id="date" name="date"/>
                    </div>
                    <div class="form-group col-md-6 time">
                        <label>TIME</label>
                        <input type="time" class="form-control" id="time" name="time"/>
                    </div>
                    <div class="form-group col-md-12 topic">
                        <label>MEETING LINK</label>
                        <input type="text" class="form-control" id="meeting_link" name="meeting_link" placeholder="MEETING LINK"/>
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
    <script src="/js/backend/pages/hms/ehr/video_conference.js"></script>
@endsection