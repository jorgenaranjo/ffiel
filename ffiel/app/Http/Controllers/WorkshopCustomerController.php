<?php

namespace App\Http\Controllers;

use App\Event;
use App\User;
use App\Workshop;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class WorkshopCustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('templates.customer.workshop.index');
    }

    public function getAllWorkshops(){
        $event_id = Event::where('active', true)->orderBy('id', 'desc')->first();
        $workshops_by_user = User::find(\Auth::user()->id)->workshops()->where('event_id', $event_id->id)->lists('workshops.id');
        return Event::find($event_id->id)->workshops()->where('active', true)->whereNotIn('id', $workshops_by_user)->get();
    }


    public function indexMyWorkshops()
    {
        return view('templates.customer.myWorkshop.index');
    }

    public function getMyWorkshops(){
        $event_id = Event::where('active', true)->orderBy('id', 'desc')->first();
        $workshops_by_user = User::find(\Auth::user()->id)->workshops()->where('event_id', $event_id->id)->get();
        return $workshops_by_user;
    }


    public function createPDFWorkshop($workshopI_id){
        $workshop = Workshop::find($workshopI_id);
        $user = User::find(\Auth::user()->id);
        $view =  \View::make('templates.pdf.workshopCustomer', compact('workshop', 'user'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('templates.pdf.workshopCustomer');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
