<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Validator;
use Session;
use App\Http\Requests;

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
        return view('list', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('intro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules=[
            'student_id'=>['required', 'unique:students,student_id']
        ];

        $messages = array(
            'student_id.unique' => $request->input('student_id') . ' already exists!',
        );

        $valid = Validator::make($request->input(), $rules, $messages);

        if($valid->fails()){
            return redirect()->back()
                ->withErrors($valid)
                ->withInput();
        } else {
            $student = new Student();
            $student->student_id = $request->input('student_id');
            $student->student_roll = $request->input('student_roll');
            $student->student_name = $request->input('student_name');
            $student->department_name = $request->input('department_name');

            $file = $request->file('student_photo');

            if($file != ""){
				$ext = $file->getClientOriginalExtension();
				$fileName = rand(10000, 50000) . '.' .$ext;
				$student->student_photo = '/uploads/' . $fileName;
				$file->move(base_path().'/public/uploads', $fileName);
			}


            if($student->save()){
                Session::flash('flash_message', 'Student information is stored successfully!');
                return redirect()->back();
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::find($id);
        return view('details', compact('student'));
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
        return view('edit', compact('student'));
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
        $student = Student::find($id);
        $student->student_id = $request->input('student_id');
        $student->student_roll = $request->input('student_roll');
        $student->student_name = $request->input('student_name');
        $student->department_name = $request->input('department_name');
        $file = $request->file('student_photo');
        if($file != ""){
            $ext = $file->getClientOriginalExtension();
            $fileName = rand(10000, 50000) . '.' .$ext;
            $student->student_photo = '/uploads/' . $fileName;
            $file->move(base_path().'/public/uploads', $fileName);
        }
        if($student->save()){
            Session::flash('flash_message', 'Student information is updated successfully!');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Student::destroy($id)){
            Session::flash('deleted_message', 'Student information is deleted successfully!');
            return redirect()->back();
        }
    }
}
