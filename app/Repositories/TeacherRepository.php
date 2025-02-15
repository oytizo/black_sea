<?php
namespace App\Repositories;

use App\Repositories\Interfaces\TeacherRepositoryInterface;
use App\Models\Teacher\Teacher;

class TeacherRepository implements TeacherRepositoryInterface{
    
    public function all() {
        return Teacher::latest()->paginate(4);
    }
    public function store($data){
        Teacher::create($data);
    }
    public function edit($id){
        return Teacher::findOrFail($id);
        // return Teacher::Where('id', $id)->first();
    }
    public function update($data, $id){
        unset($data['_token']);
        Teacher::where('id', $id)->update($data);
    }
    public function delete($id){
        Teacher::where('id', $id)->delete();
    }
}