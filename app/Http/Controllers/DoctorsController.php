<?php

namespace App\Http\Controllers;

use App\Doctors;
use Illuminate\Http\Request;

class DoctorsController extends Controller
{

    
    public function get()
    {
        if(request()->ajax()) {
            return datatables()->of(Doctors::get())
            ->addIndexColumn()
            ->make(true);
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctor = Doctors::orderBy('id', 'desc')->get();
        return view('backend.pages.hms.masterfile.doctors.index', compact('doctor'));
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
            'firstname' => 'required',
            'middlename' => 'required',
            'lastname' => 'required',
            'suffix' => 'required',
            'sex' => 'required',
            'date_of_birth' => 'required',
            'nationality' => 'required',
            'contact_no' => 'required',
            'email' => 'required|unique:patients',
            'address_line_1' => 'required',
            'address_line_2' => 'required',
            'city' => 'required',
            'province' => 'required',
            'zip_code' => 'required',
            'country' => 'required',
            'language_spoken' => 'required',
            'emergency_fullname' => 'required',
            'emergency_contact_no' => 'required',
            'emergency_relationship' => 'required',
            'medical_license_no' => 'required',
            'medical_license_expiry_date' => 'required',
            'medical_school' => 'required',
            'graduation_year' => 'required',
            'residency_training' => 'required',
            'fellowship_training' => 'required',

        ]);


        $request['doctor_id'] = $this->series('DOCT', 'Doctors');

            if($request->profile_img !== null) {
                $request['profile_img'] = $this->uploadFile($request->profile_img, 'images/hms/doctors/', date('Ymdhis'));
            }
            else {
                $request['profile_img'] = "default.png";
            }
 
        $request['workstation_id'] = Auth::user()->workstation_id;
        $request['created_by'] = Auth::user()->id;
        $request['updated_by'] = Auth::user()->id;

        $patient = Doctors::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Doctors  $doctors
     * @return \Illuminate\Http\Response
     */
    public function show(Doctors $doctors)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Doctors  $doctors
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doctor = Doctors::where('id', $id)->orderBy('id')->firstOrFail();
        return response()->json(compact('doctor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Doctors  $doctors
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'firstname' => 'required',
            'middlename' => 'required',
            'lastname' => 'required',
            'suffix' => 'required',
            'sex' => 'required',
            'date_of_birth' => 'required',
            'nationality' => 'required',
            'contact_no' => 'required',
            'email' => 'required',
            'address_line_1' => 'required',
            'address_line_2' => 'required',
            'city' => 'required',
            'province' => 'required',
            'zip_code' => 'required',
            'country' => 'required',
            'language_spoken' => 'required',
            'emergency_fullname' => 'required',
            'emergency_contact_no' => 'required',
            'emergency_relationship' => 'required',
            'medical_license_no' => 'required',
            'medical_license_expiry_date' => 'required',
            'medical_school' => 'required',
            'graduation_year' => 'required',
            'residency_training' => 'required',
            'fellowship_training' => 'required',
        ]);

        if($request->profile_img !== null && $request->profile_img !== '') {
            $request['profile_img'] = $this->uploadFile($request->profile_img, 'images/hms/doctors/', date('Ymdhis'));
        }
        else {
            $request['profile_img'] = Doctors::where('id', $id)->first()->profile_img;
        }

        Doctors::findOrFail($id)->update($request->except('created_by'));
        return response()->json(compact('validate'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Doctors  $doctors
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctors $doctors)
    {
        $record = $request->data;

        foreach($record as $item) {
            Doctors::find($item)->delete();
        }
        
        return 'Record Deleted';
    }
}
