<?php

use Illuminate\Database\Seeder;

class TeacherSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teachers')->insert(['name'=>'Marilei', 'email'=>'marilei@gmail.com', 'password'=>Hash::make('12345678'), 'image'=>'images/marilei.jpg']);
        DB::table('teachers')->insert(['name'=>'Everton', 'email'=>'ever@gmail.com', 'password'=>Hash::make('12345678'), 'image'=>'images/ever.jpg']);
        DB::table('teachers')->insert(['name'=>'Tiago', 'email'=>'tiago@gmail.com', 'password'=>Hash::make('12345678'), 'image'=>'images/without-img.jpg']);
    }
}
