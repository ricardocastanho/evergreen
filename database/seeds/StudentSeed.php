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
        DB::table('students')->insert(['name'=>'Ricardo']);
        DB::table('students')->insert(['name'=>'Rafaella']);
        DB::table('students')->insert(['name'=>'Raziel']);
    }
}
