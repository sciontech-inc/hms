<?php

namespace App\Http\Controllers;

use App\Inventory;
use Illuminate\Http\Request;
use Auth;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.pages.inventory.inventory');
    }

    public function get() {
        if(request()->ajax()) {
            return datatables()->of(Inventory::get())
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
            'item_name' => ['required'],
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

        Inventory::create($request->all());

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function show(Inventory $inventory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $inventory = Inventory::where('id', $id)->orderBy('id')->firstOrFail();
        return response()->json(compact('inventory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request['updated_by'] = Auth::user()->id;
        Inventory::find($id)->update($request->all());
        return "Record Saved";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $record = $request->data;

        foreach($record as $item) {
            Inventory::find($item)->delete();
        }
        
        return 'Record Deleted';
    }
}
