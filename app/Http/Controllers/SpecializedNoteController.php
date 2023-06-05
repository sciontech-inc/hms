<?php

namespace App\Http\Controllers;

use App\SpecializedNote;
use Illuminate\Http\Request;
use Auth;

class SpecializedNoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.pages.ehr.specialized_notes');
    }

    public function get() {
        if(request()->ajax()) {
            return datatables()->of(SpecializedNote::get())
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
            'date' => ['required'],
            'note_title' => ['required'],
            'note_type' => ['required'],
            'note_group' => ['required'],
            'note_description' => ['required'],

        ]);
        
   
        $request['workstation_id'] = Auth::user()->workstation_id;
        $request['created_by'] = Auth::user()->id;
        $request['updated_by'] = Auth::user()->id;

        SpecializedNote::create($request->all());

        return response()->json(compact('validate'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SpecializedNote  $specializedNote
     * @return \Illuminate\Http\Response
     */
    public function show(SpecializedNote $specializedNote)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SpecializedNote  $specializedNote
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $specialized_note = SpecializedNote::where('id', $id)->orderBy('id')->firstOrFail();
        return response()->json(compact('specialized_note'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SpecializedNote  $specializedNote
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request['updated_by'] = Auth::user()->id;
        SpecializedNote::find($id)->update($request->all());
        return "Record Saved";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SpecializedNote  $specializedNote
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $record = $request->data;

        foreach($record as $item) {
            SpecializedNote::find($item)->delete();
        }
        
        return 'Record Deleted';
    }
}
