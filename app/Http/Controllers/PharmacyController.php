<?php

namespace App\Http\Controllers;

use App\Pharmacy;
use Illuminate\Http\Request;
use Auth;

class PharmacyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.pages.pharmacy.pharmacy');
    }

    public function get() {
        if(request()->ajax()) {
            return datatables()->of(Pharmacy::get())
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
            'medication_id' => ['required'],
            'medication_name' => ['required'],
            'description' => ['required'],
            'category' => ['required'],
            'stock' => ['required'],
            'unit_price' => ['required'],
            'manufacturer' => ['required'],
            'expiry_date' => ['required'],
            'reorder_level' => ['required'],
            'location' => ['required'],

        ]);
        
   
        $request['workstation_id'] = Auth::user()->workstation_id;
        $request['created_by'] = Auth::user()->id;
        $request['updated_by'] = Auth::user()->id;

        Pharmacy::create($request->all());

        return response()->json(compact('validate'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pharmacy  $pharmacy
     * @return \Illuminate\Http\Response
     */
    public function show(Pharmacy $pharmacy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pharmacy  $pharmacy
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pharmacy = Pharmacy::where('id', $id)->orderBy('id')->firstOrFail();
        return response()->json(compact('pharmacy'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pharmacy  $pharmacy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request['updated_by'] = Auth::user()->id;
        Pharmacy::find($id)->update($request->all());
        return "Record Saved";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pharmacy  $pharmacy
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $record = $request->data;

        foreach($record as $item) {
            Pharmacy::find($item)->delete();
        }
        
        return 'Record Deleted';
    }
}
