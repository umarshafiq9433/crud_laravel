<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\Student;
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
        $programs = Program::all();
        return view('crud.create',compact('programs'));
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = new Student();
        $student->name = $request->input('name');
        $student->roll_no = $request->input('r_no');
        $student->program_id = $request->input('program');
        if($student->save()){
            return redirect()->route('list')->with('success','Data Inserted Successfully.');
        }
        return redirect()->back()->withInput()->with('error','Error! Please try again');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $programs = Program::all();
        $student = Student::where('id',$id)->first();
        return view('crud.update',compact('student','programs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$student)
    {
        $update = Student::where('id',$student)->update([
            'name'=>$request->input('name'),
            'roll_no'=>$request->input('r_no'),
            'program_id'=>$request->input('program')
        ]);
        return redirect()->route('list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }

    public function list(){
        $students = Student::all();
        return view('crud.list',compact('students'));
    }

    public function delete($id){
        $student = Student::where('id','=',$id)->delete();
        if ($student){
            return redirect()->back();
        }
        return redirect()->back();
    }
}
