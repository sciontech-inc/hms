<?php

namespace App\Http\Controllers;

use App\PhilHealthClaims;
use App\Patients;
use Illuminate\Http\Request;

class PhilHealthClaimsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.pages.hms.philhealth.index');
    }

    
    public function get() {
        if(request()->ajax()) {
            return datatables()->of(PhilHealthClaims::get())
            ->addIndexColumn()
            ->make(true);
        }
    }


    public function patientGet() {
        if(request()->ajax()) {
            return datatables()->of(Patients::get())
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
            'patient_id' => ['required'],
            'total_amount_actual' => ['required'],
            'total_amount_claimed' => ['required'],
            'admission_date' => ['required'],
            'discharge_date' => ['required'],
            'member_id' => ['required'],

        ]);
        
   
        $request['workstation_id'] = Auth::user()->workstation_id;
        $request['created_by'] = Auth::user()->id;
        $request['updated_by'] = Auth::user()->id;

        PhilHealthClaims::create($request->all());

        return response()->json(compact('validate'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PhilHealthClaims  $philHealthClaims
     * @return \Illuminate\Http\Response
     */
    public function show(PhilHealthClaims $philHealthClaims)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PhilHealthClaims  $philHealthClaims
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $philhealth_claim = PhilHealthClaims::where('id', $id)->orderBy('id')->firstOrFail();
        return response()->json(compact('philhealth_claim'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PhilHealthClaims  $philHealthClaims
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request['updated_by'] = Auth::user()->id;
        PhilHealthClaims::find($id)->update($request->all());
        return "Record Saved";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PhilHealthClaims  $philHealthClaims
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $record = $request->data;

        foreach($record as $item) {
            PhilHealthClaims::find($item)->delete();
        }
        
        return 'Record Deleted';
    }
}
