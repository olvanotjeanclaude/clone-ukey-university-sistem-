<?php

use App\Exercices;
use Illuminate\Database\Seeder;

class ExerciseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 5; $i++) {
            Exercices::create([
                "name" => "exercise " . $i,
                "type" => "project",
                "description" => "bootstrap kişisel web sayfası (size özgü bir tasarım)",
                "start_date" => "2020-12-7 23:55",
                "end_date" => "2020-12-27 23:55",
                "total" => 2,
                "folderLenght" => rand(1, 5),
                "deliver_desciption" => "just litle explanaition"
            ]);
        }
    }
}