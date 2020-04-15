<?php

use Illuminate\Database\Seeder;

class StudentSubjectSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('student_subjects')->insert(['av1'=>9.8, 'av2'=>7.4, 'student_id'=>1, 'subject_id'=>1]);
        DB::table('student_subjects')->insert(['av1'=>9.8, 'av2'=>7.8, 'student_id'=>1, 'subject_id'=>2]);
        DB::table('student_subjects')->insert(['av1'=>10, 'av2'=>8.6, 'student_id'=>1, 'subject_id'=>3]);
        DB::table('student_subjects')->insert(['av1'=>5.6, 'av2'=>8, 'student_id'=>1, 'subject_id'=>4]);
    }
}
