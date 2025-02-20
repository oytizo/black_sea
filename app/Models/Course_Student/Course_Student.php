<?php

namespace App\Models\Course_Student;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course_Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id',
        'student_id',
    ];
}
