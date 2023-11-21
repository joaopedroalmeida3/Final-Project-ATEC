<?php

namespace App\Http\Controllers;

use App\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
         $vehicles = Vehicle::all();
         return view('vehicles.index')
             ->with(compact('vehicles'));
     }
 
     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function create()
     {
         $vehicle = new Vehicle();
         return view('vehicles.create')
             ->with(compact('vehicle'));
     }
 
     /**
      * Store a newly created resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */
     public function store(Request $request)
     {
         $request->validate([
             'model' => 'required',
             'year' => 'required',
             'km' => 'required|numeric|between:1,10000000',
             'brand' => 'required'
         ]);
 
         $vehicle = new Vehicle();
         $vehicle->model = $request->get('model');
         $vehicle->year = $request->get('year');
         $vehicle->km = $request->get('km');
         $vehicle->brand = $request->get('brand');
         $vehicle->save();
         return redirect('/vehicles');
     }
 
     /**
      * Display the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function show($id)
     {
         //devemos retornar para o index caso não encontre o id
         $vehicle = Vehicle::findOrFail($id);
         return view('vehicles.show')
             ->with(compact('vehicle'));
     }
 
     /**
      * Show the form for editing the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function edit($id)
     {
         $vehicle = Vehicle::find($id);
         return view('vehicles.edit')
             ->with(compact('vehicle'));
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
         $request->validate([
             'model' => 'required',
             'year' => 'required',
             'km' => 'required|numeric|between:1,10000000',
             'brand' => 'required'
         ]);
            
         $vehicle = Vehicle::find($id);
         $vehicle->model = $request->get('model');
         $vehicle->year = $request->get('year');
         $vehicle->km = $request->get('km');
         $vehicle->brand = $request->get('brand');
         $vehicle->save();
         return redirect('/vehicles');
     }
 
     /**
      * Remove the specified resource from storage.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function destroy($id)
     {
         $vehicle = Vehicle::find($id);
         $vehicle->delete();
         return redirect('/vehicles');
     }
}
