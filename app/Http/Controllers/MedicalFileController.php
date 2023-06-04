<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\MedicalFile;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Traits\UploadTrait;

class MedicalFileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.pages.hms.transaction.medical_file');
    }

    public function get() {
        if(request()->ajax()) {
            return datatables()->of(MedicalFile::get())
            ->addIndexColumn()
            ->make(true);
        }
    }

    public function index2()
    {
        $files = MedicalFile::orderBy('id')->get();
        return view('frontend.pages.medical_file', compact('files'));
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
            'filename' => ['required'],
            'file'=> ['required'],

        ]);

        $request['file'] = $this->uploadFile($request->file, '/images/hms/', date('Ymdhis'));
        

        $request['password'] = Hash::make('P@ssword');
        $request['workstation_id'] = Auth::user()->workstation_id;
        $request['created_by'] = Auth::user()->id;
        $request['updated_by'] = Auth::user()->id;

        MedicalFile::create($request->all());

        return response()->json(compact('validate'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MedicalFile  $medicalFile
     * @return \Illuminate\Http\Response
     */
    public function show(MedicalFile $medicalFile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MedicalFile  $medicalFile
     * @return \Illuminate\Http\Response
     */
    public function edit(MedicalFile $medicalFile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MedicalFile  $medicalFile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MedicalFile $medicalFile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MedicalFile  $medicalFile
     * @return \Illuminate\Http\Response
     */
    public function destroy(MedicalFile $medicalFile)
    {
        //
    }
}
