<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LessonsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 8; $i++) {
            DB::table("lessons")->insert([
                "name" => "ders numara " . $i,
                "code" => Str::random(4) . rand(1000, 9999),
                "ects" => 4,
                "akts" => 4,
                "theory" => 3,
                "application" => 5,
                "laboratory" => 0,
                "credit" => 4,
                "purpose" => "
Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati exercitationem a veritatis minima. Minus molestiae corrupti dolorum! Officiis velit fugit cupiditate eos culpa dolore blanditiis nisi, tenetur illum rerum? Quia.",
                "resource" => "
Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati exercitationem a veritatis minima. Minus molestiae corrupti dolorum! Officiis velit fugit cupiditate eos culpa dolore blanditiis nisi, tenetur illum rerum? Quia."
            ]);
        }
    }
}