<?php
namespace App\Repositories;
use App\Repositories\Interfaces\DepartmentRepositoryInterface;
use App\Models\Department\Department;

class DepartmentRepository implements DepartmentRepositoryInterface
{
    public function create($data) {
        return Department::create($data);
}
    
    public function all() {
        return Department::latest()->paginate(4);
    }
    public function store($data){
        Department::create($data);
    }
    public function edit($id){
        return Department::findOrFail($id);
        // return Department::Where('id', $id)->first();
    }
    public function update($data, $id){
        unset($data['_token']);
        Department::where('id', $id)->update($data);
    }
    public function delete($id){
        Department::where('id', $id)->delete();
    }
}