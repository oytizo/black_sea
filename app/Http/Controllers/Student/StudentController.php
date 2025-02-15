<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Models\Student\Student;
use App\Http\Controllers\Controller;
use App\Http\Requests\StudentRequest;
use App\Repositories\Interfaces\StudentRepositoryInterface;

class StudentController extends Controller
{
    private $StudentRepository;

    public function __construct(StudentRepositoryInterface $StudentRepository)
    {
        $this->StudentRepository = $StudentRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = $this->StudentRepository->all();
        return view('Student.StudentIndex', ['students' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Student.StudentCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StudentRequest $request)
    {
        $student = $request->all();
        $this->StudentRepository->store($student);
        $students = $this->StudentRepository->all();
        return view('Student.StudentIndex', ['students' => $students])->with('message', 'Student Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = $this->StudentRepository->edit($id);
        return view('Student.StudentUpdate', ['student' => $student]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StudentRequest $request, $id)
    {
        $data = $request->all();
        $this->StudentRepository->update($data, $id);
        $students = $this->StudentRepository->all();
        return view('Student.StudentIndex', ['students' => $students])->with('message', 'Student Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->StudentRepository->delete($id);
        $students = $this->StudentRepository->all();
        return view('Student.StudentIndex', ['students' => $students])->with('message', 'Student Deleted Successfully');
    }
}
