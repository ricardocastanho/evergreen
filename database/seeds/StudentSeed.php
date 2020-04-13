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
        DB::table('students')->insert(['name'=>'Ricardo Castanho Soares', 'email'=>'ricardo@gmail.com', 'password'=>Hash::make('12345678'), 'course_id'=>1, 'image'=>'images/ricardo.jpeg']);
        DB::table('students')->insert(['name'=>'Rafaella', 'email'=>'rafa@gmail.com', 'password'=>Hash::make('12345678'), 'course_id'=>1, 'image'=>'images/without-img.jpg']);
        DB::table('students')->insert(['name'=>'Raziel', 'email'=>'razi@gmail.com', 'password'=>Hash::make('12345678'), 'course_id'=>1, 'image'=>'images/without-img.jpg']);
        DB::table('students')->insert(['name'=>'Leonardo', 'email'=>'leo@gmail.com', 'password'=>Hash::make('12345678'), 'course_id'=>2, 'image'=>'images/without-img.jpg']);
        DB::table('students')->insert(['name'=>'Paulo', 'email'=>'paulo@gmail.com', 'password'=>Hash::make('12345678'), 'course_id'=>3, 'image'=>'images/without-img.jpg']);
    }
}
