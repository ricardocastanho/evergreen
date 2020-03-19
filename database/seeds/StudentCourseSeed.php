<?php

use Illuminate\Database\Seeder;

class StudentCourseSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('student-courses')->insert(['student_id'=>1, 'course_id'=>1]);
        DB::table('student-courses')->insert(['student_id'=>2, 'course_id'=>1]);
        DB::table('student-courses')->insert(['student_id'=>3, 'course_id'=>1]);
    }
}
