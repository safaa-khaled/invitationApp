<?php

namespace App\Http\Controllers;

use App\Models\PersonClass;
use Illuminate\Http\Request;

class PersonClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.personClasses.index');
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
     * @param  \App\Models\PersonClass  $personClass
     * @return \Illuminate\Http\Response
     */
    public function show(PersonClass $personClass)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PersonClass  $personClass
     * @return \Illuminate\Http\Response
     */
    public function edit(PersonClass $personClass)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PersonClass  $personClass
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PersonClass $personClass)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PersonClass  $personClass
     * @return \Illuminate\Http\Response
     */
    public function destroy(PersonClass $personClass)
    {
        //
    }
}
