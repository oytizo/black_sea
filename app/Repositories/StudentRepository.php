<?php
namespace app\Repositories;

use App\Repositories\Interfaces\StudentRepositoryInterface;
use App\Models\Student\Student;

class StudentRepository implements StudentRepositoryInterface{
	
	public function all() {
		return Student::latest()->paginate(4);
	}
    public function store($data){
        Student::create($data);
    }
    public function edit($id){
        return Student::Where('id', $id)->first();
    }
    public function update($data, $id){
        unset($data['_token']);
        Student::where('id', $id)->update($data);
    }
    public function delete($id){
        Student::where('id', $id)->delete();
    }
}