<?php

use App\Subjects;
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
        // $this->call(UserSeeder::class);
        $this->call(LessonsSeeder::class);
        $this->call(LevelSeeder::class);
        $this->call(ClassesSeeder::class);
        $this->call(SerieSeeder::class);
        $this->call(SubjectsSeeder::class);
        $this->call(StudentsSeeder::class);
        $this->call(TeacherSeeder::class);
    }
}