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
                "birthday" => "1989-10-01",
                "telephone" => "054188690370",
                "address" => "Mehmed zahid kotku öğrenci yurdu"
            ],
            [
                "surname" => "jean jacques",
                "lastname" => "rakotonirina",
                "gender" => "male",
                "email" => "jeanjacques@gmail.com",
                "birthday" => "1989-10-01",
                "telephone" => "0331172087",
                "address" => "mangarivotra"
            ],
            [
                "surname" => "jacquinot",
                "lastname" => "rakotonirina",
                "gender" => "male",
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
                "telephone" => "054288690370",
                "address" => "Mehmed zahid kotku öğrenci yurdu"
            ],
            [
                "surname" => "olvanot jean claude",
                "lastname" => "rakotonirina",
                "gender" => "male",
                "email" => "olvanotjcs@gmail.com",
                "birthday" => "1989-10-01",
                "telephone" => "054288690370",
                "address" => "Mehmed zahid kotku öğrenci yurdu"
            ]
        ];

        for ($i = 0; $i < count($users); $i++) {

            Students::create($users[$i]);
        }

        for ($i = 0; $i < 50; $i++) {
            $gender = ($i % 3 == 0) ? "boy" : "girl";
            Students::create([
                "surname" => "fake user " . $i,
                "lastname" => "rakotonirina",
                "gender" => "male",
                "email" => "user" . $i . "@gmail.com",
                "birthday" => "1989-10-01",
                "telephone" => "054288690370",
                "address" => "Riemeisterstraße 129, 14169 Berlin, Allemagne" . $i
            ]);
        }
    }
}