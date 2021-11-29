<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\DB;

class studentcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $students = DB::table('students')->get();
         return view('crud.Crud',['students'=>$students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(request $request)
    {
        $student = DB::table('students')->insert([
            'name' => $request->name,
            'city' => $request->city,
            'marks' => $request->marks,
        ]);
        return redirect(route('crud'))->with('status', 'Student Added!!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          $student = DB::table('students')->find($id);
          return view('crud.edit',['student'=>$student]);
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
             DB::table('students')->where('id',$id)->update([
             'name' => $request->name,
             'city' => $request->city,
             'marks' => $request->marks,
       ]);
        return redirect(route('crud'))->with('status', 'Student updated!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('students')->where('id',$id)->delete();
        return redirect(route('crud'))->with('status', 'Student Deleted!!');
    }
}
