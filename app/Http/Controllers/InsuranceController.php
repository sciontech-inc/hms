<?php

namespace App\Http\Controllers;

use App\Insurance;
use Illuminate\Http\Request;

class InsuranceController extends Controller
{
    public function index()
    {
        return view('backend.pages.setup.payroll_setup.work_assignments');
    }

    public function get() {
        if(request()->ajax()) {
            return datatables()->of(Insurance::get())
            ->addIndexColumn()
            ->make(true);
        }
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'title' => 'required',
            'status' => 'required',
        ]);

        $request['workstation_id'] = Auth::user()->workstation_id;
        $request['created_by'] = Auth::user()->id;
        $request['updated_by'] = Auth::user()->id;

        Insurance::create($request->all());

        return response()->json(compact('validate'));
    }

    public function edit($id)
    {
        $work_assignment = Insurance::where('id', $id)->orderBy('id')->firstOrFail();
        return response()->json(compact('work_assignment'));
    }

    public function update(Request $request, $id)
    {
        $request['updated_by'] = Auth::user()->id;
        Insurance::find($id)->update($request->all());
        return "Record Saved";
    }

    public function destroy(Request $request)
    {
        $record = $request->data;

        foreach($record as $item) {
            Insurance::find($item)->delete();
        }

        return 'Record Deleted';
    }
}
