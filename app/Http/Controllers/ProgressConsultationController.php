<?php

namespace App\Http\Controllers;

use App\ProgressConsultation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;


class ProgressConsultationController extends Controller
{
    public function save(Request $request, $id) {
        $output = '';

        $validate = $request->validate([
            'progress_date' => 'required',
            'progress_title' => 'required',
            'progress_notes' => 'required',
       

        ]);

        $request['created_by'] = Auth::user()->id;
        $request['updated_by'] = Auth::user()->id;

        $insurance = ProgressConsultation::where('patient_id', $request->patient_id)->where('progress_title', $request->progress_title)->count();
        if($insurance === 0) {
            $output = 'saved';
            ProgressConsultation::create($request->all());
        }
        else {
            $output = "updated";
            ProgressConsultation::where('patient_id', $request->patient_id)->update($request->except('_token', 'created_by'));
        }
        return response()->json(compact('validate'));
    }

    public function get($id) {
        if(request()->ajax()) {
            return datatables()->of(ProgressConsultation::where('patient_id', $id)->get())
            ->addIndexColumn()
            ->make(true);
        }
    }

    public function destroy(Request $request)
    {
        $record = $request->data;

        foreach($record as $item) {
            ProgressConsultation::find($item)->delete();
        }

        return 'Record Deleted';
    }
}
