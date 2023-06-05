<?php

namespace App\Http\Controllers;

use App\OnlineAppointment;
use Illuminate\Http\Request;
use Auth;

class OnlineAppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.pages.appointment');
    }

    public function get() {
        if(request()->ajax()) {
            return datatables()->of(OnlineAppointment::get())
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
            'firstname' => ['required'],
            'middlename',
            'lastname' => ['required'],
            'sex' => ['required'],
            'birthdate' => ['required'],
            'contact_no' => ['required'],
            'email' => ['required', 'email'],
            'address' => ['required'],
            'date' => ['required'],
            'time' => ['required'],
            'reason' => ['required'],
            'medical_history' => ['required'],

        ]);
        
        $request['workstation_id'] = Auth::user()->workstation_id;
        $request['created_by'] = Auth::user()->id;
        $request['updated_by'] = Auth::user()->id;

        OnlineAppointment::create($request->all());

        return response()->json(compact('validate'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\OnlineAppointment  $onlineAppointment
     * @return \Illuminate\Http\Response
     */
    public function show(OnlineAppointment $onlineAppointment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OnlineAppointment  $onlineAppointment
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $online_appointment = OnlineAppointment::where('id', $id)->orderBy('id')->firstOrFail();
        return response()->json(compact('online_appointment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OnlineAppointment  $onlineAppointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request['updated_by'] = Auth::user()->id;
        OnlineAppointment::find($id)->update($request->all());
        return "Record Saved";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OnlineAppointment  $onlineAppointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $record = $request->data;

        foreach($record as $item) {
            OnlineAppointment::find($item)->delete();
        }
        
        return 'Record Deleted';
    }
}
