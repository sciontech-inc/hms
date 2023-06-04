<?php

namespace App\Http\Controllers;

use App\OnlineQueue;
use Illuminate\Http\Request;
use Auth;

class OnlineQueueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $queues = OnlineQueue::orderBy('id')->get();
        return view('frontend.pages.queue', compact('queues'));
    }

    public function get() {
        if(request()->ajax()) {
            return datatables()->of(OnlineQueue::get())
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
            'fullname' => ['required'],
            'sex' => ['required'],
            'birthdate' => ['required'],
            'contact_no' => ['required'],
            'email' => ['required', 'email'],
            'relationship' => ['required'],

        ]);
        
        $request['workstation_id'] = Auth::user()->workstation_id;
        $request['created_by'] = Auth::user()->id;
        $request['updated_by'] = Auth::user()->id;

        OnlineQueue::create($request->all());

        return response()->json(compact('validate'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\OnlineQueue  $onlineQueue
     * @return \Illuminate\Http\Response
     */
    public function show(OnlineQueue $onlineQueue)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OnlineQueue  $onlineQueue
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $online_queue = OnlineQueue::where('id', $id)->orderBy('id')->firstOrFail();
        return response()->json(compact('online_payment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OnlineQueue  $onlineQueue
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request['updated_by'] = Auth::user()->id;
        OnlineQueue::find($id)->update($request->all());
        return "Record Saved";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OnlineQueue  $onlineQueue
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $record = $request->data;

        foreach($record as $item) {
            OnlineQueue::find($item)->delete();
        }
        
        return 'Record Deleted';
    }
}
