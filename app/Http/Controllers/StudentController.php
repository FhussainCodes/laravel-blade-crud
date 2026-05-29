<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function create()
{
    return view('students.create');
}

public function store(Request $request)
{
    Student::create([

        'name' => $request->name,
        'email' => $request->email,
        'program' => $request->program

    ]);

    return redirect()->route('students.index');
}

public function index()
{
    $students = Student::all();

    return view('students.index', compact('students'));
}

public function edit($id)
{
    $student = Student::find($id);

    return view('students.edit', compact('student'));
}

public function update(Request $request, $id)
{
    $student = Student::find($id);

    $student->name = $request->name;

    $student->email = $request->email;

    $student->program = $request->program;

    $student->save();

    return redirect()->route('students.index');
}

public function destroy($id)
{
    $student = Student::find($id);

    $student->delete();

    return redirect()->route('students.index');
}

}

