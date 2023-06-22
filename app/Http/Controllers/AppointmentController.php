<?php

namespace App\Http\Controllers;

use App\Appointment;
use App\Patients;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index()
    {
        return view('backend.pages.hms.masterfile.appointment.index');
    }

    public function get() {
        if(request()->ajax()) {
            return datatables()->of(Appointment::get())
            ->addIndexColumn()
            ->make(true);
        }
    }

    
    public function patientGet() {
        if(request()->ajax()) {
            return datatables()->of(Patients::get())
            ->addIndexColumn()
            ->make(true);
        }
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'patient_id' => ['required'],
            'appointment_staff' => ['required'],
            'appointment_staff' => ['required'],
            'appointment_date' => ['required'],
            'appointment_time' => ['required'],
            'appointment_status' => ['required'],
            'appointment_notification_preference' => ['required'],
            'appointment_remarks' => ['required'],
            'appointment_location' => ['required'],
            'appointment_confirmation' => ['required'],
            'appointment_next_appointment' => ['required'],

        ]);
        
   
        $request['workstation_id'] = Auth::user()->workstation_id;
        $request['created_by'] = Auth::user()->id;
        $request['updated_by'] = Auth::user()->id;

        Appointment::create($request->all());

        return response()->json(compact('validate'));
    }

    public function edit($id)
    {
        $appointment = Appointment::where('id', $id)->orderBy('id')->firstOrFail();
        return response()->json(compact('appointment'));
    }

    public function update(Request $request, $id)
    {
        $request['updated_by'] = Auth::user()->id;
        Appointment::find($id)->update($request->all());
        return "Record Saved";
    }

    public function destroy(Request $request)
    {
        $record = $request->data;

        foreach($record as $item) {
            Appointment::find($item)->delete();
        }
        
        return 'Record Deleted';
    }
}
