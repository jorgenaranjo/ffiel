<?php

namespace App\Http\Controllers;

use App\Workshop;
use App\Event;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class WorkshopAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('templates.admin.workshop.index');
    }


    public function getAllWorkshops(){
        return Workshop::all();
    }

    public function getEventWorkshops(){
        return Event::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('templates.admin.workshop.create');
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //echo asset("/images/SLIDER/1.png");
        //$request->input[]
        //dd($request->all());
        if (!is_array($request->all())) {
            return ['error' => 'request must be an array'];
        }
        try {
            $workshop = Workshop::create($request->all());
            return \Response::json(['created' => true, 'workshop_id' => $workshop->id], 200);
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
        $workshop = Workshop::find($id);

        return view('templates.admin.workshop.show',compact('workshop'));
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
            $workshop = Workshop::find($request->input('id'));
            $workshop->update($request->all());
            return ['updated' => true];
        }catch (Exception $e){
            \Log::info('Error creating Period: '.$e);
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
        $workshop = Workshop::find($id);
        $workshop->active = false;
        $workshop->save();
        Workshop::destroy($id);
        return ['deleted' => true];
    }
}
