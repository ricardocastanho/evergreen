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
        DB::table('subjects')->insert(['name'=>'Topicos Emergentes', 'schoolyear'=>'2020-1', 'workload'=>100, 'teacher_id'=>2]);
        DB::table('subjects')->insert(['name'=>'Auditoria e Segurança', 'schoolyear'=>'2020-1', 'workload'=>75, 'teacher_id'=>3]);
        DB::table('subjects')->insert(['name'=>'Projetos de TI', 'schoolyear'=>'2020-1', 'workload'=>120, 'teacher_id'=>1]);
        DB::table('subjects')->insert(['name'=>'Planejamento de Projetos', 'schoolyear'=>'2020-1', 'workload'=>90, 'teacher_id'=>1]);
    }
}
