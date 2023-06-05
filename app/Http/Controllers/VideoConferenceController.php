<?php

namespace App\Http\Controllers;

use App\VideoConference;
use Illuminate\Http\Request;
use Auth;

class VideoConferenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.pages.ehr.video_conference');
    }

    public function get() {
        if(request()->ajax()) {
            return datatables()->of(VideoConference::get())
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
            'topic' => ['required'],
            'agenda' => ['required'],
            'duration' => ['required'],
            'participant_email' => ['required'],
            'date' => ['required'],
            'time' => ['required'],
            'meeting_link' => ['required'],

        ]);
        
        $request['doctor_id'] = Auth::user()->id;
        $request['patient_id'] = 1;
   
        $request['workstation_id'] = Auth::user()->workstation_id;
        $request['created_by'] = Auth::user()->id;
        $request['updated_by'] = Auth::user()->id;

        VideoConference::create($request->all());

        return response()->json(compact('validate'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\VideoConference  $videoConference
     * @return \Illuminate\Http\Response
     */
    public function show(VideoConference $videoConference)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\VideoConference  $videoConference
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $video_conference = VideoConference::where('id', $id)->orderBy('id')->firstOrFail();
        return response()->json(compact('video_conference'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\VideoConference  $videoConference
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request['updated_by'] = Auth::user()->id;
        VideoConference::find($id)->update($request->all());
        return "Record Saved";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\VideoConference  $videoConference
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $record = $request->data;

        foreach($record as $item) {
            VideoConference::find($item)->delete();
        }
        
        return 'Record Deleted';
    }
}
