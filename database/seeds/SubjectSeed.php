<?php

use Illuminate\Database\Seeder;

class SubjectSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subjects')->insert(['name'=>'Topicos Emergentes', 'teacher_id'=>1]);
        DB::table('subjects')->insert(['name'=>'Auditoria e Segurança', 'teacher_id'=>3]);
        DB::table('subjects')->insert(['name'=>'Projetos de TI', 'teacher_id'=>2]);
    }
}
