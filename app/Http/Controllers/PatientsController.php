<?php

namespace App\Http\Controllers;

use App\Traits\GlobalFunction;
use App\Patients;
use Illuminate\Http\Request;
use Auth;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class PatientsController extends Controller
{
    use GlobalFunction;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function get()
    {
        if(request()->ajax()) {
            return datatables()->of(Patients::get())
            ->addIndexColumn()
            ->make(true);
        }
    }
     

    public function index()
    {
        $patient = Patients::orderBy('id', 'desc')->get();
        return view('backend.pages.hms.masterfile.patients.index', compact('patient'));
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

        $user_firstname = Patients::where('firstname', $request->firstname)->count();
        $user_middlename = Patients::where('user_middlename', $request->user_middlename)->count();
        $user_lastname = Patients::where('lastname', $request->lastname)->count();

        if($user_firstname >= 1 && $user_middlename >= 1 && $user_lastname >= 1) {

            $validate = $request->validate([
                'firstname' => 'required|unique:patients',
                'middlename' => 'required|unique:patients',
                'lastname' => 'required|unique:patients',
                'birthdate' => 'required',
                'sex' => 'required',
                'citizenship' => 'required',
                'email' => 'required|unique:patients',
                'birthplace' => 'required',
                'marital_status' => 'required',
                'body_marks' => 'required',
                'nationality' => 'required',
                'religion' => 'required',
                'blood_type' => 'required',
                'contact_number_1' => 'required',
                'street_no' => 'required',
                'barangay' => 'required',
                'city' => 'required',
                'province' => 'required',
                'country' => 'required',
                'zip_code' => 'required',
            ]);
    
        }
        else {
            $validate = $request->validate([
                'firstname' => 'required',
                'middlename' => 'required',
                'lastname' => 'required',
                'birthdate' => 'required',
                'sex' => 'required',
                'citizenship' => 'required',
                'email' => 'required|unique:patients',
                'birthplace' => 'required',
                'marital_status' => 'required',
                'body_marks' => 'required',
                'nationality' => 'required',
                'religion' => 'required',
                'blood_type' => 'required',
                'contact_number_1' => 'required',
                'street_no' => 'required',
                'barangay' => 'required',
                'city' => 'required',
                'province' => 'required',
                'country' => 'required',
                'zip_code' => 'required',
            ]);
        }

       


        $request['patient_id'] = $this->series('PTNT', 'Patients');

            if($request->profile_img !== null) {
                $request['profile_img'] = $this->uploadFile($request->profile_img, 'images/hms/patients/', date('Ymdhis'));
            }
            else {
                $request['profile_img'] = "default.png";
            }
 
        // $qrCodeData =  $request->patient_id; 


        // $qrCode = QrCode::format('png')->size(300)->generate($qrCodeData);

        // $fileName = $request->patient_id.'qr.png';
        // $filePath = public_path('images/hms/patients/qr/' . $fileName);
        // file_put_contents($filePath, $qrCode);

        // $request['qr_code'] = $fileName; 

        $request['workstation_id'] = Auth::user()->workstation_id;
        $request['created_by'] = Auth::user()->id;
        $request['updated_by'] = Auth::user()->id;

        $patient = Patients::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Patients  $patients
     * @return \Illuminate\Http\Response
     */
    public function show(Patients $patients)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Patients  $patients
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $patient = Patients::where('id', $id)->orderBy('id')->firstOrFail();
        return response()->json(compact('patient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Patients  $patients
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'firstname' => 'required|unique:patients,firstname,'.$request->id,
            'middlename' => 'required',
            'lastname' => 'required|unique:patients,lastname,'.$request->id,
            'birthdate' => 'required',
            'sex' => 'required',
            'citizenship' => 'required',
            'email' => 'required|email|unique:patients,email,'.$request->id,
            'birthplace' => 'required',
            'marital_status' => 'required',
            'body_marks' => 'required',
            'nationality' => 'required',
            'religion' => 'required',
            'blood_type' => 'required',
            'contact_number_1' => 'required',
            'street_no' => 'required',
            'barangay' => 'required',
            'city' => 'required',
            'province' => 'required',
            'country' => 'required',
            'zip_code' => 'required',
        ]);

        if($request->profile_img !== null && $request->profile_img !== '') {
            $request['profile_img'] = $this->uploadFile($request->profile_img, 'images/hms/patients/', date('Ymdhis'));
        }
        else {
            $request['profile_img'] = Patients::where('id', $id)->first()->profile_img;
        }

        Patients::findOrFail($id)->update($request->except('created_by'));
        return response()->json(compact('validate'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Patients  $patients
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $record = $request->data;

        foreach($record as $item) {
            Patients::find($item)->delete();
        }
        
        return 'Record Deleted';
    }
}
