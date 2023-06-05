<?php

namespace App\Http\Controllers;

use App\RadiologyProcedure;
use Illuminate\Http\Request;
use Auth;

class RadiologyProcedureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.pages.radiology.radiology_procedure');
    }

    public function get() {
        if(request()->ajax()) {
            return datatables()->of(RadiologyProcedure::get())
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
            'procedure_type' => ['required'],
            'ordering_physician' => ['required'],
            'date' => ['required'],
            'time' => ['required'],
            'notes' => ['required'],

        ]);
        
   
        $request['workstation_id'] = Auth::user()->workstation_id;
        $request['created_by'] = Auth::user()->id;
        $request['updated_by'] = Auth::user()->id;

        RadiologyProcedure::create($request->all());

        return response()->json(compact('validate'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RadiologyProcedure  $radiologyProcedure
     * @return \Illuminate\Http\Response
     */
    public function show(RadiologyProcedure $radiologyProcedure)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RadiologyProcedure  $radiologyProcedure
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $radiology_procedure = RadiologyProcedure::where('id', $id)->orderBy('id')->firstOrFail();
        return response()->json(compact('radiology_procedure'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RadiologyProcedure  $radiologyProcedure
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request['updated_by'] = Auth::user()->id;
        RadiologyProcedure::find($id)->update($request->all());
        return "Record Saved";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RadiologyProcedure  $radiologyProcedure
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $record = $request->data;

        foreach($record as $item) {
            RadiologyProcedure::find($item)->delete();
        }
        
        return 'Record Deleted';
    }
}
