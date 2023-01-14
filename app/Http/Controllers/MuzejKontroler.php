<?php

namespace App\Http\Controllers;

use App\Models\Muzej;
use Illuminate\Http\Request;

class MuzejKontroler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([
            'statusCode' => 200,
            'muzeji' => Muzej::all()
        ]);
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
     * @param  \App\Models\Muzej  $muzej
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json([
            'statusCode' => 200,
            'muzej' => Muzej::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Muzej  $muzej
     * @return \Illuminate\Http\Response
     */
    public function edit(Muzej $muzej)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Muzej  $muzej
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Muzej $muzej)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Muzej  $muzej
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return response()->json([
            'statusCode' => 200,
            'muzej' => Muzej::find($id)->delete()
        ]);
    }
}
