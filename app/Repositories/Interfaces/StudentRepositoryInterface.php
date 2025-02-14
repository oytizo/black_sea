<?php

namespace App\Repositories\Interfaces;

interface StudentRepositoryInterface
{
    public function all();
    public function store($data);
    public function edit($id);
    public function update($data, $id);
    public function delete($id);
    public function emailcheck($email);
    public function emailcount($email);
}