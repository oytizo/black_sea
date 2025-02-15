<?php

namespace App\Models\Teacher;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
        'contact',
        'address',
        'age',
        'gender',
    ];
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = Hash::make($password);
    }
}