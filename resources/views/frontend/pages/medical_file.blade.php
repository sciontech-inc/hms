@extends('frontend.master.index')

@section('title', 'MEDICAL FILES')

@section('styles')
<style>
p.file-name {
    margin-bottom: 0px;
    font-weight: bold;
    font-size: 21px;
    color: #4f5152;
}
h5.file-details {
    font-size: 16px;
    color: #a3a3a3;
}
.file-card {
    border: 1px solid #3b7ddd;
    border-radius: 10px;
    padding: 10px;
    margin: 10px 0px;
}


</style>
@endsection

@section('breadcrumbs')
    <span>MedIQ Online</span> / <span class="highlight">MEDICAL FILES</span>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">MEDICAL FILES AND RESULT</h5>
            </div>
            <div class="col-12">
                <div class="card-body">
                    
                    <div class="row file-card">
                        <div class="col-md-2" style="text-align: center;">
                            <img src="/images/file.png" alt="" style="width: 60px;">
                        </div>
                        <div class="col-md-10">
                            <p class="file-name"><a href="/files/eprescription.pdf" target="_blank">ePRESCRIPTION</a></p>
                            <h5 class="file-details">Date Uploaded: May 02, 2023 - 2.03 MB </h5>
                        </div>
                    </div>
                    <div class="row file-card">
                        <div class="col-md-2" style="text-align: center;">
                            <img src="/images/file.png" alt="" style="width: 60px;">
                        </div>
                        <div class="col-md-10">
                            <p class="file-name"><a href="/files/laboratory.pdf" target="_blank">LABORATORY RESULT</a></p>
                            <h5 class="file-details">Date Uploaded: March 26, 2023 - 1.43 MB </h5>
                        </div>
                    </div>
                    <div class="row file-card">
                        <div class="col-md-2" style="text-align: center;">
                            <img src="/images/file.png" alt="" style="width: 60px;">
                        </div>
                        <div class="col-md-10">
                            <p class="file-name"><a href="/files/medcert.pdf" target="_blank">MEDICAL CERTIFICATE</a></p>
                            <h5 class="file-details">Date Uploaded: April 06, 2023 - 0.91 MB </h5>
                        </div>
                    </div>
                    <div class="row file-card">
                        <div class="col-md-2" style="text-align: center;">
                            <img src="/images/file.png" alt="" style="width: 60px;">
                        </div>
                        <div class="col-md-10">
                            <p class="file-name"><a href="/files/xray.pdf" target="_blank">XRAY RESULT</a></p>
                            <h5 class="file-details">Date Uploaded: February 12, 2023 - 4.35 MB </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="/js/frontend/pages/online/medical_file.js"></script>

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