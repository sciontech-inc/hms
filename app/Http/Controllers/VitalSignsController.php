<?php

namespace App\Http\Controllers;

use App\VitalSigns;
use Illuminate\Http\Request;
use Auth;

class VitalSignsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        $vital_signs = VitalSigns::orderBy('id')->get();
        return view('backend.pages.ehr.vital_sign', compact('vital_signs'));

    }
    
    public function get() {
        if(request()->ajax()) {
            return datatables()->of(VitalSigns::get())
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

            'patient_name' => 'required',
            'sex' => 'required',
            'patient_type' => 'required',
            'date' => 'required',
            'time' => 'required',
            'blood_pressure' => 'required',
            'temperature' => 'required',
            'respiratory_rate' => 'required',
            'pulse_rate' => 'required',
            'oxygen_saturation' => 'required',
            'weight' => 'required',
            'height' => 'required',
            'notes' => 'required',


        ]);
        
        $height_squared = $request->height * $request->height;
        $bmi = $request->weight / $height_squared;
        
        $request['bmi'] = number_format((float)$bmi, 2, '.', '');

        $request['attendant_id'] = Auth::user()->id;
        $request['workstation_id'] = Auth::user()->workstation_id;
        $request['created_by'] = Auth::user()->id;
        $request['updated_by'] = Auth::user()->id;

        VitalSigns::create($request->all());

        return response()->json(compact('validate'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\VitalSigns  $vitalSigns
     * @return \Illuminate\Http\Response
     */
    public function show(VitalSigns $vitalSigns)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\VitalSigns  $vitalSigns
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vital_sign = VitalSigns::where('id', $id)->orderBy('id')->firstOrFail();
        return response()->json(compact('vital_sign'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\VitalSigns  $vitalSigns
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request['updated_by'] = Auth::user()->id;
        VitalSigns::find($id)->update($request->all());
        return "Record Saved";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\VitalSigns  $vitalSigns
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $record = $request->data;

        foreach($record as $item) {
            VitalSigns::find($item)->delete();
        }
        
        return 'Record Deleted';
    }
}
