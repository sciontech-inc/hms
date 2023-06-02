<div id="family_information_tab" class="form-tab">
    <h5>FAMILY INFORMATION</h5>
    <div style="padding: 1em;"></div>
    <div class="row">
        <div class="col-4">
            <div class="form-group">
                <label>FIRST NAME</label>
                <div class="total_hours">
                    <input type="text" id="firstname" name="firstname" class="form-control"/>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="form-group">
                <label>MIDDLE NAME</label>
                <div class="total_hours">
                    <input type="text" id="middlename" name="middlename" class="form-control"/>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="form-group">
                <label>LAST NAME</label>
                <div class="total_hours">
                    <input type="text" id="lastname" name="lastname" class="form-control"/>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="form-group">
                <label>BIRTH DATE</label>
                <div class="total_hours">
                    <input type="date" id="birthdate" name="birthdate" class="form-control"/>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="form-group">
                <label>RELATIONSHIP</label>
                <div class="total_hours">
                    <input type="text" id="relationship" name="relationship" class="form-control"/>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="form-group status">
                <label>GENDER</label>
                <select name="gender" id="gender" class="form-control">
                    <option value="MALE">MALE</option>
                    <option value="FEMALE">FEMALE</option>
                </select>
            </div>
        </div>
        <div class="col-3">
            <div class="form-group">
                <label>CITIZENSHIP</label>
                <div class="total_hours">
                    <input type="text" id="citizenship" name="citizenship" class="form-control"/>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="form-group">
                <label>ADDRESS</label>
                <div class="total_hours">
                    <input type="text" id="address" name="address" class="form-control"/>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="form-group">
                <label>CONTACT NO.</label>
                <div class="total_hours">
                    <input type="number" id="contact_no" name="contact_no" class="form-control"/>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="form-group">
                <label>EMAIL ADDRESS</label>
                <div class="total_hours">
                    <input type="email" id="email" name="email" class="form-control"/>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label>BENEFICIARY DESIGNATION</label>
                <div class="total_hours">
                    <input type="text" id="beneficiary_designation" name="beneficiary_designation" class="form-control"/>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label>ADDITIONAL INFORMATION</label>
                <div class="total_hours">
                    <input type="text" id="additional_information" name="additional_information" class="form-control"/>
                </div>
            </div>
        </div>
       
    </div>
    <hr>
    <!-- <div class="educational-background-table">
        <div class="row">
            <div class="col-12">
                <table id="work_history_table" class="table table-striped" style="width:100%">
                </table>
            </div>
        </div>
    </div> -->
</div>


@section('styles')
<style>
    .btn-file {
        position: relative;
        overflow: hidden;
    }
    .btn-file input[type=file] {
        position: absolute;
        top: 0;
        right: 0;
        min-width: 100%;
        min-height: 100%;
        font-size: 100px;
        text-align: right;
        filter: alpha(opacity=0);
        opacity: 0;
        outline: none;
        cursor: inherit;
        display: block;
    }
    .form-control {
        font-size: 12px;
    }
    .main {
        overflow-x: hidden;
    }
    .card-header {
        background: #e9e9e9;
    }
    h5.card-title {
        color: #3282b8;
        margin-bottom: 0px;
    }
    h5.title {
        font-size: 12px;
        color: gray;
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
        font-size: 10px;
    }

    td, th {
        padding: 5px;
    }
    th {
        color: #6eafdb;
        font-weight: bold;
    }
    table.dtl tr:nth-child(even) {
        background: #efefef;
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
  </style>
@endsection
