<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\Http\Request;
use App\Models\Teacher\Teacher;
use App\Http\Controllers\Controller;
use App\Http\Requests\TeacherRequest;
use App\Repositories\Interfaces\TeacherRepositoryInterface;

class TeacherController extends Controller
{
    private $teacherRepository;

    public function __construct(TeacherRepositoryInterface $teacherRepository)
    {
        $this->teacherRepository = $teacherRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = $this->teacherRepository->all();
        return view('Teacher.Teacherindex', ['teachers' => $teachers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Teacher.TeacherCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TeacherRequest $request)
    {
        $this->teacherRepository->store($request->all());
        return redirect()->route('teacher.view')->with('success', 'Teacher Added Successfully');
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
        $teacher = $this->teacherRepository->edit($id);
        return view('Teacher.TeacherUpdate', ['teacher' => $teacher]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TeacherRequest $request, $id)
    {
        $this->teacherRepository->update($request->all(), $id);
        return redirect()->route('teacher.view')->with('success', 'Teacher Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->teacherRepository->delete($id);
        return redirect()->route('teacher.view')->with('success', 'Teacher Deleted Successfully');
    }
}
