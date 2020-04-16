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
        DB::table('subjects')->insert(['name'=>'Topicos Emergentes em Laravel', 'schoolyear'=>'2020-1', 'workload'=>100, 'teacher_id'=>2]);
        DB::table('subjects')->insert(['name'=>'Auditoria e Segurança de Sistemas', 'schoolyear'=>'2020-1', 'workload'=>75, 'teacher_id'=>3]);
        DB::table('subjects')->insert(['name'=>'Gestão de Projetos de TI', 'schoolyear'=>'2020-1', 'workload'=>120, 'teacher_id'=>1]);
        DB::table('subjects')->insert(['name'=>'Gestão de Qualidade de Software', 'schoolyear'=>'2020-1', 'workload'=>90, 'teacher_id'=>1]);
    }
}
