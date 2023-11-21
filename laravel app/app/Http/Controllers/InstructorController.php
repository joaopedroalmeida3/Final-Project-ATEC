<?php

namespace App\Http\Controllers;

use App\Instructor;
use Illuminate\Http\Request;

class InstructorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
         $instructors = Instructor::all();
         return view('instructors.index')
             ->with(compact('instructors'));
     }
 
     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function create()
     {
         $instructor = new Instructor();
         return view('instructors.create')
             ->with(compact('instructor'));
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
             'name' => 'required',
             'email' => 'required|email',
             'phone' => 'required'
         ]);
 
         $instructor = new Instructor();
         $instructor->name = $request->get('name');
         $instructor->phone = $request->get('phone');
         $instructor->email = $request->get('email');
         $instructor->save();
         return redirect('/instructors');
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
         $instructor = Instructor::findOrFail($id);
         return view('instructors.show')
             ->with(compact('instructor'));
     }
 
     /**
      * Show the form for editing the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function edit($id)
     {
         $instructor = Instructor::find($id);
         return view('instructors.edit')
             ->with(compact('instructor'));
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
             'name' => 'required',
             'phone' => 'required',
             'email' => 'required|email'
         ]);
            
         $instructor = Instructor::find($id);
         $instructor->name = $request->get('name');
         $instructor->phone = $request->get('phone');
         $instructor->email = $request->get('email');
         $instructor->save();
         return redirect('/instructors');
     }
 
     /**
      * Remove the specified resource from storage.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function destroy($id)
     {
         $instructor = Instructor::find($id);
         $instructor->delete();
         return redirect('/instructors');
     }
}
