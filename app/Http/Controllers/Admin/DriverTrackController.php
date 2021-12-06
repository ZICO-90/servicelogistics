<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Shipment;
use App\Models\TrackingStage;
use App\Models\TrackingShipment;
use Illuminate\Http\Request;


class DriverTrackController extends Controller
{
    public function index()
    {
        $shipments = Shipment::where('tracking_stage_id','=',3)->get();
        $tracking_stages = TrackingStage::all();
        return view('Dashboard\Driver\Driver_Track_Shipment\list_all_drivered',compact('shipments','tracking_stages'));
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


    public function store(Request $request)
    {
        $driver_track = new TrackingShipment();
        $driver_track->tracking_stage_id = $request->tracking_stage_id;
        $driver_track->customer_id=$request->customer_id;
        $driver_track->desc=$request->desc;
        $driver_track->location_now=$request->location_now;
        $driver_track->outcomming_date=$request->outcomming_date;
        $driver_track->full_number = $request->full_number;
        $driver_track->tracking_id = auth('driver')->user()->id;
        $driver_track->tracking_type='App\Models\Driver';

        $driver_track->save();


        $shipment = Shipment::where('id',$request->id)->first();
//
////
        $shipment->update(
            ['tracking_stage_id'=>$request->tracking_stage_id
                ,]);
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
    public function destroy(Request $request)
    {
        $shipment = Shipment::where('id',$request->id)->first();

        $customer_id = $shipment->costumer_id;
        $customer = Customer::where('id',$customer_id)->first();
        $images = ShipmentAttachment::where('shipment_id',$request->id);
        if(!empty($images)){
            foreach($images as $image){
                $image->delete();
            }

        }
        $shipment->delete();
        $customer->delete();
    }
}
