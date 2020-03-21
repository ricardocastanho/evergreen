<?php

use Illuminate\Database\Seeder;

class AdminSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(['name'=>'Admin', 'email'=>'admin@gmail.com', 'password'=>Hash::make('12345678')]);
    }
}
