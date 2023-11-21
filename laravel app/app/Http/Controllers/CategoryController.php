<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
         $categories = Category::all();
         return view('categories.index')
             ->with(compact('categories'));
     }
 
     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function create()
     {
         $category = new Category();
         return view('categories.create')
             ->with(compact('category'));
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
             'name' => 'required'
         ]);
 
         $category = new Category();
         $category->name = $request->get('name');
         $category->save();
         return redirect('/categories');
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
         $category = Category::findOrFail($id);
         return view('categories.show')
             ->with(compact('category'));
     }
 
     /**
      * Show the form for editing the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function edit($id)
     {
         $category = Category::find($id);
         return view('categories.edit')
             ->with(compact('category'));
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
             'name' => 'required'
         ]);
            
         $category = Category::find($id);
         $category->name = $request->get('name');
         $category->save();
         return redirect('/categories');
     }
 
     /**
      * Remove the specified resource from storage.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function destroy($id)
     {
         $category = Category::find($id);
         $category->delete();
         return redirect('/categories');
     }
}
