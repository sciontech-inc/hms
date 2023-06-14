<?php

namespace App\Http\Controllers;

use App\FamilyInformation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class FamilyInformationController extends Controller
{
    public function save(Request $request, $id) {
        $output = '';

        $validate = $request->validate([
            'family_fullname' => 'required',
            'family_birthdate' => 'required',
            'family_relationship' => 'required',
            'family_sex' => 'required',
            'family_address' => 'required',
            'family_contact_no' => 'required'

        ]);

        $request['created_by'] = Auth::user()->id;
        $request['updated_by'] = Auth::user()->id;

        $family = FamilyInformation::where('patient_id', $request->patient_id)->count();
        if($family === 0) {
            $output = 'saved';
            FamilyInformation::create($request->all());
        }
        else {
            $output = "updated";
            FamilyInformation::where('patient_id', $request->patient_id)->update($request->except('_token', 'created_by'));
        }
        return response()->json(compact('validate'));
    }

    public function get($id) {
        if(request()->ajax()) {
            return datatables()->of(FamilyInformation::where('patient_id', $id)->get())
            ->addIndexColumn()
            ->make(true);
        }
    }

    public function destroy(Request $request)
    {
        $record = $request->data;

        foreach($record as $item) {
            FamilyInformation::find($item)->delete();
        }

        return 'Record Deleted';
    }
}