<?php
namespace App\Repositories\Interfaces;

interface CourseRepositoryInterface
{
    public function all();
    public function store($data);
    public function edit($id);
    public function update($data, $id);
    public function delete($id);
}