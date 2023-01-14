<?php

namespace App\Http\Controllers;

use App\Models\Umetnik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class UmetnikKontroler extends Controller
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
            'umetnici' => Umetnik::all()
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
     * @param  \App\Models\Umetnik  $umetnik
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json([
            'statusCode' => 200,
            'umetnik' => Umetnik::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Umetnik  $umetnik
     * @return \Illuminate\Http\Response
     */
    public function edit(Umetnik $umetnik)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Umetnik  $umetnik
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'ime_prezime' => 'required',
            'stil' => 'required',
            'nacionalnost' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'statusCode' => 404,
                'message' => $validator->errors()
            ]);
        }

        Umetnik::where('id', $id)
            ->update([
                'ime_prezime' => $request->ime_prezime,
                'stil' => $request->stil,
                'nacionalnost' => $request->nacionalnost,
            ]);


        return response()->json([
            'statusCode' => 200,
            'umetnik' => Umetnik::find($id)
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Umetnik  $umetnik
     * @return \Illuminate\Http\Response
     */
    public function destroy(Umetnik $umetnik)
    {
        //
    }
}
