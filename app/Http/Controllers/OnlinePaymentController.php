<?php

namespace App\Http\Controllers;

use App\OnlinePayment;
use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;

class OnlinePaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.pages.payment');
    }

    public function get() {
        if(request()->ajax()) {
            return datatables()->of(OnlinePayment::get())
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
            'invoice_number' => ['required'],
            'contact_no'=> ['required'],
            'email' =>  ['required', 'email'],
            'payment_type' => ['required'],
            'amount' => ['required'],

        ]);
        
        $dt = Carbon::now();

        $request['payment_date'] = $dt;
        $request['workstation_id'] = Auth::user()->workstation_id;
        $request['created_by'] = Auth::user()->id;
        $request['updated_by'] = Auth::user()->id;

        OnlinePayment::create($request->all());

        return response()->json(compact('validate'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\OnlinePayment  $onlinePayment
     * @return \Illuminate\Http\Response
     */
    public function show(OnlinePayment $onlinePayment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OnlinePayment  $onlinePayment
     * @return \Illuminate\Http\Response
     */
    public function edit(OnlinePayment $onlinePayment)
    {
        $online_payment = OnlinePayment::where('id', $id)->orderBy('id')->firstOrFail();
        return response()->json(compact('online_payment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OnlinePayment  $onlinePayment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request['updated_by'] = Auth::user()->id;
        OnlinePayment::find($id)->update($request->all());
        return "Record Saved";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OnlinePayment  $onlinePayment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $record = $request->data;

        foreach($record as $item) {
            OnlinePayment::find($item)->delete();
        }
        
        return 'Record Deleted';
    }
}
