<?php

namespace App\Http\Controllers;

use App\Billing;
use Illuminate\Http\Request;

class BillingController extends Controller
{
    public function index()
    {
        return view('backend.pages.hms.billing.index');
    }

    public function get() {
        if(request()->ajax()) {
            return datatables()->of(Billing::get())
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

        Billing::create($request->all());

        return response()->json(compact('validate'));
    }

    public function edit($id)
    {
        $work_assignment = Billing::where('id', $id)->orderBy('id')->firstOrFail();
        return response()->json(compact('work_assignment'));
    }

    public function update(Request $request, $id)
    {
        $request['updated_by'] = Auth::user()->id;
        Billing::find($id)->update($request->all());
        return "Record Saved";
    }

    public function destroy(Request $request)
    {
        $record = $request->data;

        foreach($record as $item) {
            Billing::find($item)->delete();
        }

        return 'Record Deleted';
    }
}
