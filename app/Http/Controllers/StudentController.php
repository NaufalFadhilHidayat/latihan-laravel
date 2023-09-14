<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
public function index ()
{
    $query = Student::all();

    return view ('student.index', compact('query'));
}

public function create()
{
    return view('student.create');
}

public function store (Request $request)
{
    dd($request->all());
    $createStudent = Student::create([
        'nis'   => $request->nis,
        'name'   => $request->name,
        'gender'   => $request->gender,
        'religion'   => $request->religion,
        'birthday'   => $request->birthday,
        'class'   => $request->class,
        'addres'   => $request->addres,
    ]);
}

public function delete (Request $request)
{
    $deleteData = Student::find($request->id);
    $deleteData->delete();

    return redirect('students');
}

}
