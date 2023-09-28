<?php

namespace App\Http\Controllers;

use App\Models\CarEvents;
use Illuminate\Http\Request;

class CarEventsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('CarEvents.index',[
            'carEvents' => CarEvents::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CarEvents $carEvents)
    {
        //
        return view ('CarEvents.show',[
            'carEvent' => $carEvents
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CarEvents $carEvents)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CarEvents $carEvents)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CarEvents $carEvents)
    {
        //
    }
}
