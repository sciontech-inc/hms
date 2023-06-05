<?php

namespace App\Http\Controllers;

use App\RadiologyResult;
use Illuminate\Http\Request;
use Auth;

class RadiologyResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.pages.radiology.radiology_result');
    }

    public function get() {
        if(request()->ajax()) {
            return datatables()->of(RadiologyResult::get())
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
            'procedure_id' => ['required'],
            'radiologist' => ['required'],
            'report_date' => ['required'],
            'report_findings' => ['required'],
            'conclusion' => ['required'],
            'recommendation' => ['required'],

        ]);
        
   
        $request['workstation_id'] = Auth::user()->workstation_id;
        $request['created_by'] = Auth::user()->id;
        $request['updated_by'] = Auth::user()->id;

        RadiologyResult::create($request->all());

        return response()->json(compact('validate'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RadiologyResult  $radiologyResult
     * @return \Illuminate\Http\Response
     */
    public function show(RadiologyResult $radiologyResult)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RadiologyResult  $radiologyResult
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $radiology_result = RadiologyResult::where('id', $id)->orderBy('id')->firstOrFail();
        return response()->json(compact('radiology_result'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RadiologyResult  $radiologyResult
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request['updated_by'] = Auth::user()->id;
        RadiologyResult::find($id)->update($request->all());
        return "Record Saved";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RadiologyResult  $radiologyResult
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $record = $request->data;

        foreach($record as $item) {
            RadiologyResult::find($item)->delete();
        }
        
        return 'Record Deleted';
    }
}
