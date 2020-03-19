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
        DB::table('teachers')->insert(['name'=>'Marilei']);
        DB::table('teachers')->insert(['name'=>'Everton']);
        DB::table('teachers')->insert(['name'=>'Tiago']);
    }
}
