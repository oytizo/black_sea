<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CourseStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $courses= \App\Models\Course\Course::factory()->count(10)->create();
         $students= \App\Models\Student\Student::factory()->count(3)->hasAttached($courses, ['created_at' => Carbon::now(), 'updated_at' => Carbon::now()])->create();
    }
}
