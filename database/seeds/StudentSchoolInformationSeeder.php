<?php

use App\StudentsSchoolInformation;
use Illuminate\Database\Seeder;

class StudentSchoolInformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    /*
     */
    public function run()
    {
        for ($i = 1; $i <= 50; $i++) {
            StudentsSchoolInformation::create([
                "student_id" =>  rand(1, 50),
                "lesson_id" => rand(1, 8)
            ]);
        }
    }
}