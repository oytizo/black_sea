<?php

namespace App\Models\Student;

use App\Models\Course\Course;
use Database\Factories\StudentFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;
    protected static function newFactory()
    {
        return StudentFactory::new();
    }

    protected $fillable = [
        'name',
        'email',
        'contact',
        'address',
        'session',
        'age',
        'gender',
    ];

    public function courses()
    {
        return $this->belongsToMany(Course::class);
    }
  
}
