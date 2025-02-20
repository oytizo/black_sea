<?php

namespace App\Models\Course;

use App\Models\Student\Student;
use Database\Factories\CourseFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;
    
    protected static function newFactory()
    {
        return CourseFactory::new();
    }

    protected $fillable = [
        'name',
        'code',
        'fee',
        'status',
        'duration',
    ];

    public function students()
    {
        return $this->belongsToMany(Student::class);
    }
}
