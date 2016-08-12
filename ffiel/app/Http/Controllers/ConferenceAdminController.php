<?php

namespace App\Http\Controllers;

use App\Event;
use App\Conference;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ConferenceAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('templates.admin.conference.index');
    }

    public function getAllConferences(){
        return Conference::all();
    }

    public function getEventConferences(){
        return Event::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('templates.admin.conference.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!is_array($request->all())) {
            return ['error' => 'request must be an array'];
        }
        try {
            $conference = Conference::create($request->all());
            return \Response::json(['created' => true, 'conference_id' => $conference->id], 200);
        } catch (Exception $e) {
            return \Response::json(['created' => false, 'error' => $e], 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $conference = Conference::find($id);

        return view('templates.admin.conference.show',compact('conference'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        try{
            $conference = Conference::find($request->input('id'));
            $conference->update($request->all());
            return ['updated' => true];
        }catch (Exception $e){
            \Log::info('Error update Conference: '.$e);
            return \Response::json(['created' => false], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $conference = Conference::find($id);
        $conference->active = false;
        $conference->save();
        Conference::destroy($id);
        return ['deleted' => true];
    }
}
