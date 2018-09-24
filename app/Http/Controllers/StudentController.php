<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
  public function index(){
    // $students = Student::all();
    $students = Student::paginate(3);
    return view('welcome')->with(compact('students'));
  }

  public function create(){
    return view('create');
  }

  public function store(Request $request){
    // return Student::create($request->all());
    // return $request->all();
    $this->validate($request,[
      'firstname' =>  'required',
      'lastname' =>  'required',
      'email' =>  'required',
      'phone' =>  'required',
    ]);
    $student = new Student;

    $student->first_name  = $request->firstname;
    $student->last_name  = $request->lastname;
    $student->email  = $request->email;
    $student->phone  = $request->phone;

    $student->save();

    return redirect(route('home'))->with('successMsg','Student successfully added!');
  }

  public function edit($id){
    $student = Student::findOrFail($id);
    return view('edit')->with(compact('student'));
  }

  public function update(Request $request, $id){
    $this->validate($request,[
      'firstname' =>  'required',
      'lastname' =>  'required',
      'email' =>  'required',
      'phone' =>  'required',
    ]);
    $student = Student::findOrFail($id);

    $student->first_name  = $request->firstname;
    $student->last_name  = $request->lastname;
    $student->email  = $request->email;
    $student->phone  = $request->phone;

    $student->save();

    return redirect(route('home'))->with('successMsg','Student successfully updated!');
  }

  public function delete($id){
    Student::findOrFail($id)->delete();
    return redirect(route('home'))->with('successMsg','Student successfully deleted!');
  }

}
