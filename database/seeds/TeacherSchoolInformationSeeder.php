<?php

use App\teacherSchoolInformation;
use Illuminate\Database\Seeder;

class TeacherSchoolInformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 50; $i++) {
            teacherSchoolInformation::create([
                "teacher_id" => date("Y") . $i
            ]);
        }
    }
}