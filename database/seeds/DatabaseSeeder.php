<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CourseSeed::class);
        $this->call(StudentSeed::class);
        $this->call(TeacherSeed::class);
        $this->call(SubjectSeed::class);
        $this->call(AdminSeed::class);
        $this->call(CourseSubjectsSeed::class);
    }
}
