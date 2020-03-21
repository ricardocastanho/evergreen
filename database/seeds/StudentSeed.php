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
        DB::table('students')->insert(['name'=>'Ricardo', 'email'=>'ricardo@gmail.com', 'password'=>Hash::make('12345678'), 'course_id'=>1]);
        DB::table('students')->insert(['name'=>'Rafaella', 'email'=>'rafa@gmail.com', 'password'=>Hash::make('12345678'), 'course_id'=>1]);
        DB::table('students')->insert(['name'=>'Raziel', 'email'=>'razi@gmail.com', 'password'=>Hash::make('12345678'), 'course_id'=>1]);
    }
}
