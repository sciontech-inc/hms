@extends('frontend.master.index')

@section('title', 'QUEUE LIST')

@section('styles')
<style>
    p.patient-name {
    margin-bottom: 0px;
    font-weight: bold;
    font-size: 21px;
    color: #4f5152;
}
h5.patient-details {
    font-size: 16px;
    color: #a3a3a3;
}
.queue-card {
    border: 1px solid #3b7ddd;
    border-radius: 10px;
    padding: 10px;
    margin: 10px 0px;
}
.processing {
    border: 3px solid #82d982 !important;

}

</style>
@endsection

@section('breadcrumbs')
    <span>MedIQ Online</span> / <span class="highlight">QUEUE LIST</span>
@endsection

@section('left-content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">QUEUE COLOR CODING</h5>
            </div>
            <div class="col-12">
                <div class="card-body">
                <table id="datatables-dashboard-projects" class="table my-0">
                        <thead>
                            <tr>
                                <th>Color</th>
                                <th class="d-none d-md-table-cell">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><span class="badge badge-success"> </span></td>
                                <td class="d-none d-md-table-cell">ADMITTED</td>
                            </tr>
                            <tr>
                                <td><span class="badge badge-primary"> </span></td>
                                <td class="d-none d-md-table-cell">NEW</td>
                            </tr>
                            <tr>
                                <td><span class="badge badge-warning"> </span></td>
                                <td class="d-none d-md-table-cell">IN QUEUE</td>
                            </tr>
                            <tr>
                                <td><span class="badge badge-danger"> </span></td>
                                <td class="d-none d-md-table-cell">CANCELLED</td>
                            </tr>
                        </tbody>
                    </table>
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
                <h5 class="card-title">QUEUE LIST: QUEUE IN LINE</h5>
            </div>
            @include('frontend.partial.flash-message')
            <div class="col-12">
                <div class="card-body">
                    <div class="row queue-card processing">
                        <div class="col-md-2" style="text-align: center;">
                            <img src="/images/male.png" alt="" style="width: 60px;">
                        </div>
                        <div class="col-md-10">
                            <p class="patient-name">JUAN DELA CRUZ</p>
                            <h5 class="patient-details">FATHER | MALE - 35 yrs old </h5>
                        </div>
                    </div>
                    <hr>
                @foreach ($queues as $key => $queue)
                    <div class="row queue-card">
                        @if ($queue->sex == 'MALE')
                        <div class="col-md-2" style="text-align: center;">
                            <img src="/images/male.png" alt="" style="width: 60px;">
                        </div>
                        @else
                        <div class="col-md-2" style="text-align: center;">
                            <img src="/images/female.png" alt="" style="width: 60px;">
                        </div>
                        @endif
                        <div class="col-md-10">
                            <p class="patient-name">{{ $queue->fullname }}</p>
                            <h5 class="patient-details">{{ $queue->relationship }} | {{ $queue->sex }} - 25 yrs old </h5>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@section('sc-modal')
@parent
<div class="sc-modal-content" id="online_queue_form">
    <div class="sc-modal-dialog">
        <div class="sc-modal-header">
            <span class="sc-title-bar"></span>
            <span class="sc-close" onclick="scion.create.sc_modal('online_queue_form').hide('all', modalHideFunction)"><i class="fas fa-times"></i></span>
        </div>
        <div class="sc-modal-body">
            <form method="post" id="onlineQueueForm" class="form-record">
                <div class="row">
                    <div class="form-group col-md-12 fullname">
                        <label>FULL NAME</label>
                        <input type="text" class="form-control" id="fullname" name="fullname" placeholder="FULL NAME"/>
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
                    <div class="form-group col-md-12 relationship">
                        <label>RELATIONSHIP</label>
                        <input type="text" class="form-control" id="relationship" name="relationship"/>
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
    <script src="/js/frontend/pages/online/online_queue.js"></script>

    <script>
        $(function() {
        $("#birthdate").change(function() {

            dob = new Date($('#birthdate').val());

            var today = new Date();
            var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));

            if(age > 1) {
                $('#age').val(age);
            }
            else if(age < 1) {
                alert('Age must be above 1 year old!');
                $('#age').val(null);
            }

        }).trigger("change");
    });

    </script>
@endsection