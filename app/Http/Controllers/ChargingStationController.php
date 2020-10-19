<?php

namespace App\Http\Controllers;

use App\Models\ChargingStation;
use Illuminate\Http\Request;

class ChargingStationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return ChargingStation[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        return ChargingStation::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $station = ChargingStation::create($request->all());
        return response()->json($station, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ChargingStation  $chargingStation
     * @return ChargingStation
     */
    public function show(ChargingStation $chargingStation)
    {
        return $chargingStation;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ChargingStation  $chargingStation
     * @return \Illuminate\Http\Response
     */
    public function edit(ChargingStation $chargingStation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ChargingStation  $chargingStation
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, ChargingStation $chargingStation)
    {
        $chargingStation->update($request->all());
        return response()->json($chargingStation, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ChargingStation  $chargingStation
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(ChargingStation $chargingStation)
    {
        $chargingStation->delete();
        return response()->json(null, 204);
    }
}
