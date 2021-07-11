<?php

namespace App\Http\Controllers;

use App\Models\tbl_iot_sensors;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TblIotSensorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $mSensor = tbl_iot_sensors::all();
        return response()->json($mSensor, 200);
    }

    public function viewSensor()
    {
        $mSensorDataToView = tbl_iot_sensors::paginate(15);
        return view('Index', [
            'sensorData' => $mSensorDataToView
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(): Response
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param tbl_iot_sensors $tbl_iot_sensors
     * @return void
     */
    public function show(tbl_iot_sensors $tbl_iot_sensors)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param tbl_iot_sensors $tbl_iot_sensors
     * @return Response
     */
    public function edit(tbl_iot_sensors $tbl_iot_sensors): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param tbl_iot_sensors $tbl_iot_sensors
     * @return void
     */
    public function update(Request $request, tbl_iot_sensors $tbl_iot_sensors)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param tbl_iot_sensors $tbl_iot_sensors
     * @return void
     */
    public function destroy(tbl_iot_sensors $tbl_iot_sensors)
    {
        //
    }
}
