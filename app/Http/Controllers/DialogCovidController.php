<?php

namespace App\Http\Controllers;

use App\Models\DialogCovid;
use Illuminate\Http\Request;

class DialogCovidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('modulos.DialogCovid');
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
     * @param  \App\Models\DialogCovid  $dialogCovid
     * @return \Illuminate\Http\Response
     */
    public function show(DialogCovid $dialogCovid)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DialogCovid  $dialogCovid
     * @return \Illuminate\Http\Response
     */
    public function edit(DialogCovid $dialogCovid)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DialogCovid  $dialogCovid
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DialogCovid $dialogCovid)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DialogCovid  $dialogCovid
     * @return \Illuminate\Http\Response
     */
    public function destroy(DialogCovid $dialogCovid)
    {
        //
    }
}
