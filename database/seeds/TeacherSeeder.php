<?php

use App\Teachers;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status_matrimonial = "single";
        $gender = "male";
        for ($i = 0; $i < 50; $i++) {
            $status_matrimonial = ($i % 5 == 0) ? "single" : "maried";
            $gender = ($i % 3 == 0) ? "man" : "woman";
            Teachers::create([
                "surname" => "fake teacher " . $i,
                "lastname" => "rakotonirina",
                "gender" => $gender,
                "email" => "user" . $i . "@gmail.com",
                "birthday" => "1989-10-01",
                "status_matrimonial" => $status_matrimonial,
                "telephone" => "054288690370",
                "address" => "Riemeisterstraße 129, 14169 Berlin, Allemagne" . $i
            ]);
        }
    }
}