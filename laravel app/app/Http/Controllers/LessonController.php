<?php

namespace App\Http\Controllers;

use App\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
         $lessons = Lesson::all();
         return view('lessons.index')
             ->with(compact('lessons'));
     }
 
     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function create()
     {
         $lesson = new Lesson();
         return view('lessons.create')
             ->with(compact('lesson'));
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
             'instructor_id' => 'required',
             'vehicle_id' => 'required',
             'category_student_id' => 'required',
             'state' => 'required'
         ]);
 
         $lesson = new Lesson();
         $instructor = Instructor::findOrFail($request->get('instructor_id'));
         $vehicle = Vehicle::findOrFail($request->get('vehicle_id'));
         $category_student = Category_Student::findOrFail($request->get('category_student_id'));
         $lesson = Lesson::find($id);
         $lesson->state = 1;
         $lesson->save();
         $lesson->instructors()->attach($instructor->id);
         $lesson->vehicles()->attach($vehicle->id);
         $lesson->category_student()->attach($category_student->category_student_id);
         return redirect('/lessons');
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
         $lesson = Lesson::findOrFail($id);
         return view('lessons.show')
             ->with(compact('lesson'));
     }
 
     /**
      * Show the form for editing the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function edit($id)
     {
         $lesson = Lesson::find($id);
         return view('lessons.edit')
             ->with(compact('lesson'));
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
            'instructor_id' => 'required',
            'vehicle_id' => 'required',
            'category_student_id' => 'required',
            'state' => 'required'
        ]);
        $instructor = Instructor::findOrFail($request->get('instructor_id'));
        $vehicle = Vehicle::findOrFail($request->get('vehicle_id'));
        $category_student = Category_Student::findOrFail($request->get('category_student_id'));
        $lesson = Lesson::find($id);
        $lesson->state = 1;
        $lesson->save();
        $lesson->instructors()->attach($instructor->id);
        $lesson->vehicles()->attach($vehicle->id);
        $lesson->category_student()->attach($category_student->category_student_id);
        return redirect('/lessons');
     }
 
     /**
      * Remove the specified resource from storage.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function destroy($id)
     {
         $lesson = Lesson::find($id);
         $lesson->state = 0;
         return redirect('/lessons');
     }
}
