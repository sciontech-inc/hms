<?php

namespace App\Http\Controllers;

use App\MedicineTaken;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class MedicineTakenController extends Controller
{
    public function save(Request $request, $id) {
        $output = '';

        $validate = $request->validate([
            'medicine_name' => 'required',
            'medicine_doses' => 'required',
            'routes_of_administration' => 'required',
            'medicine_type' => 'required',
            'medicine_duration' => 'required',
            'medicine_reason' => 'required',
            'medicine_compliance' => 'required',

        ]);

        $request['created_by'] = Auth::user()->id;
        $request['updated_by'] = Auth::user()->id;

        $medicine = MedicineTaken::where('patient_id', $request->patient_id)->count();
        if($medicine === 0) {
            $output = 'saved';
            MedicineTaken::create($request->all());
        }
        else {
            $output = "updated";
            MedicineTaken::where('patient_id', $request->patient_id)->update($request->except('_token', 'created_by'));
        }
        return response()->json(compact('validate'));
    }

    public function get($id) {
        if(request()->ajax()) {
            return datatables()->of(MedicineTaken::where('patient_id', $id)->get())
            ->addIndexColumn()
            ->make(true);
        }
    }

    public function destroy(Request $request)
    {
        $record = $request->data;

        foreach($record as $item) {
            MedicineTaken::find($item)->delete();
        }

        return 'Record Deleted';
    }
}
