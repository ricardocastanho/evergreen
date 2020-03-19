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
        DB::table('subjects')->insert(['name'=>'Topicos Emergentes']);
        DB::table('subjects')->insert(['name'=>'Auditoria e Segurança']);
        DB::table('subjects')->insert(['name'=>'Projetos de TI']);
    }
}
