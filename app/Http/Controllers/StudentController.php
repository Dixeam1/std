<?php

namespace App\Http\Controllers;

use App\student;
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view("create");

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $res = new student;
        $res->name = $request->input('name');
        $res->rollno = $request->input('rollno');
        $res->class = $request->input('class');
        $res->phone = $request->input('phone');
        // dd($request->file('file'));
        if($request->hasfile('file'))
        {

            $file = $request->file('file');
            $extension =$file->getClientOriginalExtension();
            $filename = time().'.'. $extension;
            $file->move('public/upload/',$filename);
            $res->images = $filename;

        }
        $res->save();
        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(student $student, $id)
    {
        return view('edit')->with('students',student::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, student $student, $id)
    {
        $res =student::find($request->id);
        $res->name=$request->input('name');
        $res->rollno=$request->input('rollno');
        $res->class=$request->input('class');
        $res->phone=$request->input('phone');
        $res->save();
        $request->session()->flash('msg', 'Data Successfully updated!');
        return redirect("home"); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(student $student, $id)
    {
        student::destroy(array('id', $id));
        return redirect('home');
    }
}
