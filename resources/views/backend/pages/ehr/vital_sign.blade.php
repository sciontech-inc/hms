@extends('backend.master.index')

@section('title', 'VITAL SIGN')

@section('styles')
<style>
p.patient-name {
    margin-bottom: 0px;
    font-weight: bold;
    font-size: 16px;
    color: #4f5152;
}
h5.patient-details {
    font-size: 10px;
    color: #a3a3a3;
}
.list-card {
    border: 1px solid #dfdfdf;
    padding: 10px;
    margin: 10px 0px;
}
.processing {
    /* border: 3px solid #82d982 !important; */
}
.sc-modal-dialog {
    max-width: 720px;
    background: #fff;
    top: 20px;
    position: relative;
    margin: auto;
    border-radius: 9px;
}

h5.vital-info {
    font-size: 8px;
    margin-bottom: 5px;
}

span.vital-details {
    font-size: 12px;
}

.per-vital {
    margin-bottom: 1em;
}
</style>
@endsection

@section('breadcrumbs')
    <span>MedIQ Online</span> / <span class="highlight">VITAL SIGN GRAPH</span>
@endsection

@section('left-content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">VITAL SIGN COLOR CODING</h5>
            </div>
            <div class="col-12">
                <div class="card-body" style="padding: 0px !important;">
                <table id="datatables-dashboard-projects" class="table my-0" style="font-size: 11px;">
                        <thead>
                            <tr>
                                <th>Color</th>
                                <th class="d-none d-md-table-cell">Vital Sign</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><span class="badge badge-danger"> </span></td>
                                <td class="d-none d-md-table-cell">BLOOD PRESSURE</td>
                            </tr>
                            <tr>
                                <td><span class="badge badge-primary"> </span></td>
                                <td class="d-none d-md-table-cell">TEMPERATURE</td>
                            </tr>
                            <tr>
                                <td><span class="badge badge-info"> </span></td>
                                <td class="d-none d-md-table-cell">RESPIRATORY RATE</td>
                            </tr>
                            <tr>
                                <td><span class="badge badge-warning"> </span></td>
                                <td class="d-none d-md-table-cell">PULSE RATE</td>
                            </tr>
                            <tr>
                                <td><span class="badge badge-success"> </span></td>
                                <td class="d-none d-md-table-cell">OXYGEN SATURATION</td>
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
                <h5 class="card-title">VITAL SIGN: PATIENT LIST</h5>
            </div>
            @include('backend.partial.flash-message')
            <div class="col-12">
                <div class="card-body">
                @foreach ($vital_signs as $key => $vital_sign)
                    <div class="row list-card processing">
                    @if ($vital_sign->sex == 'MALE')
                        <div class="col-md-3" style="text-align: center; border-right: 1px solid #dfdfdf">
                            <img src="/images/male.png" alt="" style="width: 70px; margin-bottom: 10px;">
                            <p class="patient-name">{{ $vital_sign->patient_name }}</p>
                            <h5 class="patient-details">{{ $vital_sign->sex }} | {{ $vital_sign->patient_type }}</h5>
                            <h5 class="patient-details">{{ $vital_sign->date }} | {{ $vital_sign->time }}</h5>
                        </div>
                    @else
                        <div class="col-md-3" style="text-align: center; border-right: 1px solid #dfdfdf">
                            <img src="/images/female.png" alt="" style="width: 60px; margin-bottom: 10px;">
                            <p class="patient-name">{{ $vital_sign->patient_name }}</p>
                            <h5 class="patient-details">{{ $vital_sign->sex }} | {{ $vital_sign->patient_type }}</h5>
                            <h5 class="patient-details">{{ $vital_sign->date }} | {{ $vital_sign->time }}</h5>
                        </div>
                    @endif
                        <div class="col-md-9">
                            <p>
                                <div class="row">
                                    <div class="col-md-4"><span class="vital-details">WEIGHT: {{ $vital_sign->weight }} kilograms</span></div>
                                    <div class="col-md-4"><span class="vital-details">HEIGHT: {{ $vital_sign->height }} meters</span></div>
                                    <div class="col-md-4"><span class="vital-details">BODY MASS INDEX (BMI): {{ $vital_sign->bmi }}</span></div>

                                </div>
                            </p>
                            <hr>
                            <p>
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="per-vital">
                                            <h5 class="vital-info">BLOOD PRESSURE</h5>
                                            <span class="vital-details badge badge-danger">{{ $vital_sign->blood_pressure }} mmHg</span>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="per-vital">
                                            <h5 class="vital-info">TEMPERATURE</h5>
                                            <span class="vital-details badge badge-primary">{{ $vital_sign->temperature }} °C</span>
                                        </div>

                                    </div>
                                    <div class="col-md-2">
                                        <div class="per-vital">
                                            <h5 class="vital-info">RESPIRATORY RATE</h5>
                                            <span class="vital-details badge badge-info">{{ $vital_sign->respiratory_rate }} rpm</span>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="per-vital">
                                            <h5 class="vital-info">PULSE RATE</h5>
                                            <span class="vital-details badge badge-warning ">{{ $vital_sign->pulse_rate }} bpm</span>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="per-vital">
                                            <h5 class="vital-info">OXYGEN SATURATION</h5>
                                            <span class="vital-details badge badge-success">{{ $vital_sign->oxygen_saturation }} %</span>
                                        </div>
                                    </div>

                                </div>
                            </p>
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
<div class="sc-modal-content" id="vital_signs_form">
    <div class="sc-modal-dialog">
        <div class="sc-modal-header">
            <span class="sc-title-bar"></span>
            <span class="sc-close" onclick="scion.create.sc_modal('vital_signs_form').hide('all', modalHideFunction)"><i class="fas fa-times"></i></span>
        </div>
        <div class="sc-modal-body">
            <form method="post" id="vitalSignsForm" class="form-record">
                <div class="row">
                    <div class="form-group col-md-12 patient_name">
                        <label>PATIENT NAME</label>
                        <input type="text" class="form-control" id="patient_name" name="patient_name" placeholder="PATIENT NAME"/>
                    </div>
                    <div class="form-group col-md-6 sex">
                        <label>SEX</label>
                        <select class="form-control" name="sex" id="sex">
                            <option value="MALE">MALE</option>
                            <option value="FEMALE">FEMALE</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6 patient_type">
                        <label>PATIENT TYPE</label>
                        <select class="form-control" name="patient_type" id="patient_type">
                            <option value="INPATIENT">INPATIENT</option>
                            <option value="OUTPATIENT">OUTPATIENT</option>
                            <option value="EMERGENCY">EMERGENCY</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6 date">
                        <label>DATE</label>
                        <input type="date" class="form-control" id="date" name="date"/>
                    </div>
                    <div class="form-group col-md-6 time">
                        <label>TIME</label>
                        <input type="time" class="form-control" id="time" name="time"/>
                    </div>
                    <div class="form-group col-md-4 blood_pressure">
                        <label>BLOOD PRESSURE</label>
                        <input type="text" class="form-control" id="blood_pressure" name="blood_pressure" placeholder="Ex. 120/80"/>
                    </div>
                    <div class="form-group col-md-4 temperature">
                        <label>TEMPERATURE (°C)</label>
                        <input type="number" class="form-control" id="temperature" name="temperature" placeholder="Ex. 36"/>
                    </div>
                    <div class="form-group col-md-4 respiratory_rate">
                        <label>RESPIRATORY RATE (rpm)</label>
                        <input type="number" class="form-control" id="respiratory_rate" name="respiratory_rate" placeholder="Ex. 12"/>
                    </div>
                    <div class="form-group col-md-6 pulse_rate">
                        <label>PULSE RATE (bpm)</label>
                        <input type="number" class="form-control" id="pulse_rate" name="pulse_rate" placeholder="Ex. 80"/>
                    </div>
                    <div class="form-group col-md-6 oxygen_saturation">
                        <label>OXYGEN SATURATION (%)</label>
                        <input type="number" class="form-control" id="oxygen_saturation" name="oxygen_saturation" placeholder=" Ex.100"/>
                    </div>
                    <div class="form-group col-md-12">
                        <hr>
                    </div>
                    <div class="form-group col-md-6 weight">
                        <label>WEIGHT (kg)</label>
                        <input type="number" class="form-control" id="weight" name="weight" placeholder="in kilograms"/>
                    </div>
                    <div class="form-group col-md-6 height">
                        <label>HEIGHT (m)</label>
                        <input type="number" class="form-control" id="height" name="height" placeholder="in meters"/>
                    </div>
                    <div class="form-group col-md-12 notes">
                        <label>Notes</label>
                        <textarea name="notes" id="notes" rows="2" class="form-control"></textarea>
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
    <script src="/js/backend/pages/hms/ehr/vital_signs.js"></script>

    </script>
@endsection