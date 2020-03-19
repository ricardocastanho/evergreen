<?php

use Illuminate\Database\Seeder;

class SubjectTeacherSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subject-teachers')->insert(['subject_id'=>1, 'teacher_id'=>2]);
        DB::table('subject-teachers')->insert(['subject_id'=>2, 'teacher_id'=>3]);
        DB::table('subject-teachers')->insert(['subject_id'=>3, 'teacher_id'=>1]);
    }
}
