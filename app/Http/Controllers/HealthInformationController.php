<?php

namespace App\Http\Controllers;

use App\HealthInformation;
use Illuminate\Http\Request;
use Auth;

class HealthInformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.pages.ehr.health_information');
    }

    public function get() {
        if(request()->ajax()) {
            return datatables()->of(HealthInformation::get())
            ->addIndexColumn()
            ->make(true);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'patient_name' => ['required'],
            'referred_to' => ['required'],
            'referred_date' => ['required'],
            'notes' => ['required'],
      

        ]);
        
        $request['doctor_id'] = Auth::user()->id;
        $request['department_id'] = 1;
        $request['referred_by'] = Auth::user()->workstation_id;
   
        $request['workstation_id'] = Auth::user()->workstation_id;
        $request['created_by'] = Auth::user()->id;
        $request['updated_by'] = Auth::user()->id;

        HealthInformation::create($request->all());

        return response()->json(compact('validate'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\HealthInformation  $healthInformation
     * @return \Illuminate\Http\Response
     */
    public function show(HealthInformation $healthInformation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\HealthInformation  $healthInformation
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $health_information = HealthInformation::where('id', $id)->orderBy('id')->firstOrFail();
        return response()->json(compact('health_information'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\HealthInformation  $healthInformation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request['updated_by'] = Auth::user()->id;
        HealthInformation::find($id)->update($request->all());
        return "Record Saved";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\HealthInformation  $healthInformation
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $record = $request->data;

        foreach($record as $item) {
            HealthInformation::find($item)->delete();
        }
        
        return 'Record Deleted';
    }
}
