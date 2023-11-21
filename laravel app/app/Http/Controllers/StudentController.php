<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
         $students = Student::all();
         return view('students.index')
             ->with(compact('students'));
     }
 
     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function create()
     {
         $student = new Student();
         return view('students.create')
             ->with(compact('student'));
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
 
         $student = new Student();
         $student->name = $request->get('name');
         $student->phone = $request->get('phone');
         $student->email = $request->get('email');
         $student->state = 1;
         $student->save();
         return redirect('/students');
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
         $student = Student::findOrFail($id);
         return view('students.show')
             ->with(compact('student'));
     }
 
     /**
      * Show the form for editing the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function edit($id)
     {
         $student = Student::find($id);
         return view('students.edit')
             ->with(compact('student'));
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
            
         $student = Student::find($id);
         $student->name = $request->get('name');
         $student->phone = $request->get('phone');
         $student->email = $request->get('email');
         $student->save();
         return redirect('/students');
     }
 
     /**
      * Remove the specified resource from storage.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function destroy($id)
     {
         $student = Student::find($id);
         $student->state = 0;
         return redirect('/students');
     }

// Altera o estado do aluno
public function estado($id)
{
    $student = Student::find($id);
    $student->state = 1;
    $carro->save();
    return redirect(url()->previous());
}

public function unestado($id)
{
    $student = Student::find($id);
    $student->state = 0;
    $carro->save();
    return redirect(url()->previous());
}
}
