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
        DB::table('courses')->insert(['name'=>'Análise e Desenvolvimento de Sistemas', 'file'=>'images/ads.jpg']);
        DB::table('courses')->insert(['name'=>'Administração Bacharelato', 'file'=>'images/administration.jpg']);
        DB::table('courses')->insert(['name'=>'Engenharia Mecânica', 'file'=>'images/engineering.jpg']);
    }
}
