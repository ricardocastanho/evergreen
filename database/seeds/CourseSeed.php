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
        DB::table('courses')->insert(['name'=>'Análise e Desenvolvimento de Sistemas', 'image'=>'images/ads.jpg']);
        DB::table('courses')->insert(['name'=>'Administração Bacharelato', 'image'=>'images/administration.jpg']);
        DB::table('courses')->insert(['name'=>'Engenharia Mecânica', 'image'=>'images/engineering.jpg']);
    }
}
