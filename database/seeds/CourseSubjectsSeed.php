<?php

use Illuminate\Database\Seeder;

class CourseSubjectsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('course-subjects')->insert(['course_id'=>1, 'subject_id'=>1]);
        DB::table('course-subjects')->insert(['course_id'=>1, 'subject_id'=>2]);
        DB::table('course-subjects')->insert(['course_id'=>1, 'subject_id'=>3]);
        DB::table('course-subjects')->insert(['course_id'=>1, 'subject_id'=>4]);
    }
}
