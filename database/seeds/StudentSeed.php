<?php

use Illuminate\Database\Seeder;

class StudentSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert(['name'=>'Ricardo', 'course_id'=>1]);
        DB::table('students')->insert(['name'=>'Rafaella', 'course_id'=>1]);
        DB::table('students')->insert(['name'=>'Raziel', 'course_id'=>1]);
    }
}
