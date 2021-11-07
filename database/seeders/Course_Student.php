<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Course_Student extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $course_student = [
            [ 'course_id' => 1, 'student_id' => 1, 'nilai' => 85, ],
            [ 'course_id' => 2, 'student_id' => 1, 'nilai' => 95, ],
            [ 'course_id' => 3, 'student_id' => 1, 'nilai' => 100, ],
            [ 'course_id' => 4, 'student_id' => 1, 'nilai' => 95, ],
            [ 'course_id' => 1, 'student_id' => 2, 'nilai' => 85, ],
            [ 'course_id' => 2, 'student_id' => 2, 'nilai' => 80, ],
            [ 'course_id' => 3, 'student_id' => 2, 'nilai' => 95, ],
            [ 'course_id' => 4, 'student_id' => 2, 'nilai' => 95, ],
            [ 'course_id' => 1, 'student_id' => 3, 'nilai' => 80, ],
            [ 'course_id' => 2, 'student_id' => 3, 'nilai' => 90, ],
            [ 'course_id' => 3, 'student_id' => 3, 'nilai' => 100, ],
            [ 'course_id' => 4, 'student_id' => 3, 'nilai' => 90, ],
    
        ];

        DB::table('course_student')->insert($course_student);
    }
}