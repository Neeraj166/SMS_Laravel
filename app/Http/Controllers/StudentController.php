<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    //     $students=Student::all();
    //     return view('students.index',compact('students'));
    return redirect('/students/show');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $student= new Student;
        $input=$request->all();
        $student=Student::create($input);
        // $student->name=request('name');
        // $student->roll=request('roll');
        // $student->address=request('address');
        // $student->faculty=request('faculty');
        // $student->status=request('status');
        // dd($student);
        $student->save();
        // Student::create($request);
        return redirect('/students/show');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $abc=Student::all();
        return view('students.show',compact('abc'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $student=Student::find ($id);
        return view('students.edit',compact('student'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request ,  $id)
    {
        // dd($id);
        $input=$request->all();

        $student=Student::find ($id);
        $student->update($input);
        return redirect('/students/show');

        
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student=Student::find ($id);
        $student->delete();
        return redirect('/students/show');

    }
}