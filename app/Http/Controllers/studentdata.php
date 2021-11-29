<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\DB;
use App\Models\student;
class studentdata extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = student::all();
        return view('model-crud.insert',['students'=>$students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(request $request)
    {
       $student = new student;
       $student->name  = $request->name;
       $student->city  = $request->city;
       $student->marks = $request->marks;
       $student->save();   
       return redirect(route('crud2')); 

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
        $student = student::find($id);
        return view('model-crud.edit',['student'=>$student]);
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
         $student = student::find($id);
         $student->name  = $request->name;
         $student->city  = $request->city;
         $student->marks = $request->marks;
         $student->save();   
         return redirect(route('crud2')); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         student::destroy($id);
        return redirect(route('crud2')); 
    }

    public function login(){
        return view('model-crud.login');
    }

      public function register(request $request){
       return view('model-crud.register');
       $student = new student;
       $student->name  = $request->name;
       $student->email  = $request->email;
       $student->password = $request->password;
       $student->contact =  $request->contact;
       $student->save();  
    }
}
