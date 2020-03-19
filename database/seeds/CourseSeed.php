<?php

use Illuminate\Database\Seeder;

class CourseSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert(['name'=>'ADS']);
        DB::table('courses')->insert(['name'=>'ADM']);
        DB::table('courses')->insert(['name'=>'ENG']);
    }
}
