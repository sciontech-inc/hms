<?php

namespace App\Http\Controllers;

use App\PatientInsurance;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;


class PatientInsuranceController extends Controller
{

    public function store(Request $request)
    {

        $validate = $request->validate([
            'provider' => 'required',
            'type' => 'required',
            'policy_no' => 'required',
        ]);

        $request['workstation_id'] = Auth::user()->workstation_id;
        $request['created_by'] = Auth::user()->id;
        $request['updated_by'] = Auth::user()->id;

        PatientInsurance::create($request->all());

        return response()->json(compact('validate'));
    }

    public function edit($id)
    {
        $patient_insurance = PatientInsurance::where('id', $id)->orderBy('id')->firstOrFail();
        return response()->json(compact('patient_insurance'));
    }

    public function update(Request $request, $id)
    {
        $request['updated_by'] = Auth::user()->id;
        PatientInsurance::find($id)->update($request->all());
        return "Record Saved";
    }

    public function save(Request $request, $id) {
        $output = '';

        $validate = $request->validate([
            'provider' => 'required',
            'type' => 'required',
            'policy_no' => 'required',
        ]);

        $request['created_by'] = Auth::user()->id;
        $request['updated_by'] = Auth::user()->id;

        $insurance = PatientInsurance::where('patient_id', $request->patient_id)->where('policy_no', $request->policy_no)->count();
        if($insurance === 0) {
            $output = 'saved';
            PatientInsurance::create($request->all());
        }
        else {
            $output = "updated";
            PatientInsurance::where('patient_id', $request->patient_id)->update($request->except('_token', 'created_by'));
        }
        return response()->json(compact('validate'));
    }

    public function get($id) {
        if(request()->ajax()) {
            return datatables()->of(PatientInsurance::where('patient_id', $id)->get())
            ->addIndexColumn()
            ->make(true);
        }
    }

    public function destroy(Request $request)
    {
        $record = $request->data;

        foreach($record as $item) {
            PatientInsurance::find($item)->delete();
        }

        return 'Record Deleted';
    }
}
