<?php

use App\CourseContent;
use Illuminate\Database\Seeder;

class CourseContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 11; $i++) {
            for ($j = 1; $j <= 11; $j++) {
                CourseContent::create([
                    "week" => $j,
                    "lesson_id" => $i,
                    "theory" => "Theory " . $j . " It is a long established fact that en looking. ",
                    "practice" => "Practice " . $j . " It is a long established fact that. "
                ]);
            }
        }
    }
}