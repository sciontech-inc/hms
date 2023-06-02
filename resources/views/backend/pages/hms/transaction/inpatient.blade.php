@extends('backend.master.index')

@section('title', 'INPATIENT DETAILS')

@section('breadcrumbs')
    <span>PATIENTS / INPATIENT DETAILS</span> / <span class="highlight">OVERVIEW</span>
@endsection

@section('left-content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Summaries</h5>
            </div>
            <div class="col-12">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <p class="notif-title"><i class="fas fa-circle text-success fa-fw"></i><span style="color: gray;"> Active</span> <span class="text-gray summary-count">(49)</span></p>
                            <p class="notif-title"><i class="fas fa-circle text-gray fa-fw"></i><span style="color: gray;"> Discharged</span> <span class="text-gray summary-count">(49)</span></p>
                            <p class="notif-title"><i class="fas fa-circle text-secondary fa-fw"></i><span style="color: gray;"> For MGH Clearance</span> <span class="text-gray summary-count">(49)</span></p>
                            <p class="notif-title"><i class="fas fa-circle text-primary fa-fw"></i><span style="color: gray;"> Cleared</span> <span class="text-gray summary-count">(49)</span></p>
                            <p class="notif-title"><i class="fas fa-circle text-warning fa-fw"></i><span style="color: gray;"> MGH</span> <span class="text-gray summary-count">(49)</span></p>
                            <p class="notif-title"><i class="fas fa-circle text-info fa-fw"></i><span style="color: gray;"> Untagged as MGH</span> <span class="text-gray summary-count">(49)</span></p>
                            <p class="notif-title"><i class="fas fa-circle text-danger fa-fw"></i><span style="color: gray;"> Cancelled</span> <span class="text-gray summary-count">(49)</span></p>
                            <p class="notif-title"><i class="fas fa-circle text-black fa-fw"></i><span style="color: gray;"> Died</span> <span class="text-gray summary-count">(49)</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Overview</h5>
            </div>
            <div class="col-12">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <label class="section-label">Week Schedule (May 1, 2023 - May 5, 2023)</label>
                        </div>
                        <div class="col-md-12">
                        <table class="wks">
                            <tr>
                                <th>Select</th>
                                <th>Patient ID</th>
                                <th>Admission No.</th>
                                <th>Patient Full Name</th>
                                <th>Admission DateTime</th>
                                <th>Room No.</th>
                                <th>Admission Type</th>
                            </tr>
                            <tr>
                                <td><input type="checkbox" id="checkbox1"></td>
                                <td>0001</td>
                                <td>058</td>
                                <td>Cabillo, Carlita</td>
                                <td>07/07/10 01:30PM</td>
                                <td>401-1</td>
                                <td>New Patient</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" id="checkbox1"></td>
                                <td>0001</td>
                                <td>058</td>
                                <td>Cabillo, Carlita</td>
                                <td>07/07/10 01:30PM</td>
                                <td>401-1</td>
                                <td>New Patient</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" id="checkbox1"></td>
                                <td>0001</td>
                                <td>058</td>
                                <td>Cabillo, Carlita</td>
                                <td>07/07/10 01:30PM</td>
                                <td>401-1</td>
                                <td>New Patient</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" id="checkbox1"></td>
                                <td>0001</td>
                                <td>058</td>
                                <td>Cabillo, Carlita</td>
                                <td>07/07/10 01:30PM</td>
                                <td>401-1</td>
                                <td>New Patient</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" id="checkbox1"></td>
                                <td>0001</td>
                                <td>058</td>
                                <td>Cabillo, Carlita</td>
                                <td>07/07/10 01:30PM</td>
                                <td>401-1</td>
                                <td>New Patient</td>
                            </tr>
                        </table>
                        </div>
                    </div>
                    
                </div>
                <div class="card-footer text-muted">
                    <div class="row">
                        <div class="col-md-6">
                             <!-- <button type="button" class="btn btn-primary">View Timelogs</button>  -->
                        </div>
                        <div class="col-md-6" style="text-align: right;">
                            <!-- <button type="button" class="btn btn-primary">Request for Overtime</button> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@section('right-content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Sub Components</h5>
            </div>
            <div class="col-12">
                <div class="card-body" style="padding: 0px !important;">
                    <div style="padding: 1em;"></div>
                    <ul class="sub-component" style="list-style-type: none;">
                        <li>
                            <i class="align-middle mr-2 fas fa-fw fa-exclamation-circle"></i> <label class="section-btn">Inpatient Details</label>
                        </li>
                        <li>
                            <i class="align-middle mr-2 fas fa-fw fa-user-circle"></i> <label class="section-btn">Patient Profile</label>
                        </li>
                        <li>
                            <i class="align-middle mr-2 fas fa-fw fa-hand-pointer"></i> <label class="section-btn">Hold/Release</label>
                        </li>
                        <li>
                            <i class="align-middle mr-2 fas fa-fw fa-retweet"></i> <label class="section-btn">Relocate</label>
                        </li>
                        <li>
                            <i class="align-middle mr-2 fas fa-fw fa-sign-out-alt"></i> <label class="section-btn">Discharge</label>
                        </li>
                        <li>
                            <i class="align-middle mr-2 fas fa-fw fa-file-signature"></i> <label class="section-btn">Re-Admit</label>
                        </li>
                    </ul>
                    <div style="padding: 1em;"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@endsection

@section('styles')
<style>
    .main {
        overflow-x: hidden;
    }
    label.section-btn {
        color: #3282b8;
    }
    .card-header {
        background: #e9e9e9;
    }
    h5.card-title {
        color: #3282b8;
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
    span.summary-count {
        float: right;
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
        font-size: 12px;
    }
    td, th {
        padding: 5px;
    }
    th {
        color: #6eafdb;
        font-weight: bold;
    }
    table.dtl tr:nth-child(even) {
        background: #d3d3d3;
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
    ul.sub-component>li>i {
        color: #3282b8;
    }
    .text-black {
        color: black !important;
    }
    .text-gray {
        color: gray !important;
    }
  </style>
@endsection

@section('scripts')
    <script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    {{-- <script src="/js/backend/pages/payroll/transaction/employee/leave_application.js"></script> --}}
@endsection