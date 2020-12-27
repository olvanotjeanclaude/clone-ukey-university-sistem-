<?php

use App\Students;
use Illuminate\Database\Seeder;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                "surname" => "olvanot jean claude",
                "lastname" => "rakotonirina",
                "gender" => "male",
                "email" => "olvanotjcs@gmail.com",
                "lesson_id" => rand(1, 8),
                "birthday" => "1989-10-01",
                "telephone" => "054188690370",
                "address" => "Mehmed zahid kotku öğrenci yurdu"
            ],
            [
                "surname" => "jean jacques",
                "lastname" => "rakotonirina",
                "gender" => "male",
                "lesson_id" => rand(1, 8),
                "email" => "jeanjacques@gmail.com",
                "birthday" => "1989-10-01",
                "telephone" => "0331172087",
                "address" => "mangarivotra"
            ],
            [
                "surname" => "jacquinot",
                "lastname" => "rakotonirina",
                "gender" => "male",
                "lesson_id" => rand(1, 8),
                "email" => "jacqunote@gmail.com",
                "birthday" => "1989-10-01",
                "telephone" => "054288690370",
                "address" => "Mehmed zahid kotku öğrenci yurdu"
            ],
            [
                "surname" => "olga",
                "lastname" => "ramaroson",
                "gender" => "woman",
                "email" => "olgs@gmail.com",
                "birthday" => "1989-10-01",
                "lesson_id" => rand(1, 8),
                "telephone" => "054288690370",
                "address" => "Mehmed zahid kotku öğrenci yurdu"
            ],
            [
                "surname" => "olvanot jean claude",
                "lastname" => "rakotonirina",
                "gender" => "male",
                "email" => "olvanotjcs@gmail.com",
                "birthday" => "1989-10-01",
                "lesson_id" => rand(1, 8),
                "telephone" => "054288690370",
                "address" => "Mehmed zahid kotku öğrenci yurdu"
            ]
        ];

        /*for ($i = 0; $i < count($users); $i++) {

            Students::create($users[$i]);
        }*/

        for ($i = 1; $i <= 50; $i++) {

            for ($j = 1; $j <= 50; $j++) {
                $gender = ($j % 3 == 0) ? "boy" : "girl";
                Students::create([
                    "surname" => "fake user " . $j,
                    "lastname" => "rakotonirina",
                    "gender" => $gender,
                    "lesson_id" => $i,
                    "email" => "user" . $j . "@gmail.com",
                    "birthday" => "1989-10-01",
                    "telephone" => "054288690370",
                    "address" => "Riemeisterstraße 129, 14169 Berlin, Allemagne" . $j
                ]);
            }
        }
    }
}