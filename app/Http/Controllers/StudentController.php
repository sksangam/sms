<?php

namespace App\Http\Controllers;

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
        $students = Student::all();
        return view('student.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.create');
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
            'father_name' => 'required',
            'email' => 'required|unique:students|max:255',
            'phone' => 'required|unique:students|size:10',
            'address' => 'required'
        ]);

        $student = new Student();
        $student->name = $request->name;
        $student->father_name = $request->father_name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->address = $request->address;

        $student->save();

        return redirect()->route('student.index')->with('success', 'student added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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
        // dd($student);
        return view('student.edit', compact('student'));
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
            'father_name' => 'required',
            'email' => 'required|max:255|unique:students,email,'.$id,
            'phone' => 'required|size:10|unique:students,phone,'.$id,
            'address' => 'required'
        ]);

        $student = Student::find($id);
        $student->name = $request->name;
        $student->father_name = $request->father_name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->address = $request->address;

        $student->save();

        return redirect()->route('student.index')->with('success', 'student updated successfully!');
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
        $student->delete();

        return redirect()->route('student.index')->with('success', 'student deleted successfully!');
    }
}
