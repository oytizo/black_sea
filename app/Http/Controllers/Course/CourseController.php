<?php

namespace App\Http\Controllers\Course;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CourseRequest;
use App\Repositories\Interfaces\CourseRepositoryInterface;

class CourseController extends Controller
{
    private $CourseRepository;

    public function __construct(CourseRepositoryInterface $CourseRepository) {
        $this->CourseRepository = $CourseRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = $this->CourseRepository->all();

        return view('Course.CourseIndex',['courses'=>$courses]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Course.CourseCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CourseRequest $request)
    { 
        $course =$request->all();
         $this->CourseRepository->store($course);
        return redirect()->route('course.view')->with('success','Course created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = $this->CourseRepository->edit($id);
        return view('Course.CourseUpdate',['course'=>$course]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CourseRequest $request, $id)
    {
        $course = $request->all();
        $this->CourseRepository->update($course,$id);
        return redirect()->route('course.view')->with('success','Course updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = $this->CourseRepository->delete($id);
        return redirect()->route('course.view')->with('success','Course deleted successfully');
    }
}
