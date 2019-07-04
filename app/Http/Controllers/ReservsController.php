<?php

namespace App\Http\Controllers;

use App\Reservs;
use Illuminate\Http\Request;

class ReservsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $res = new Reservs();
        $res->id_room = 1;
        $res->name = $request->input('name');
        $res->email = $request->input('email');
        $res->inp = $request->input('inp');
        $res->out = $request->input('out');
        $res->status = 1;
        $res->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reservs  $reservs
     * @return \Illuminate\Http\Response
     */
    public function show(Reservs $reservs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reservs  $reservs
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservs $reservs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reservs  $reservs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservs $reservs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reservs  $reservs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservs $reservs)
    {
        //
    }
}
