<?php

namespace App\Repositories;

use App\Repositories\Interfaces\CourseRepositoryInterface;
use App\Models\Course\Course;

class CourseRepository implements CourseRepositoryInterface
{
    public function all()
    {
        return Course::latest()->paginate(4);
    }

    public function store($data)
    {
        Course::create($data);
    }

    public function edit($id)
    {
        return Course::Where('id', $id)->first();
    }

    public function update($data, $id)
    {
        unset($data['_token']);
        Course::where('id', $id)->update($data);
    }

    public function delete($id)
    {
        return Course::where('id', $id)->delete();
    }
}
