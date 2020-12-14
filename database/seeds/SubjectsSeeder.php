<?php

use App\Subjects;
use Illuminate\Database\Seeder;

class SubjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++)
            Subjects::create(
                [
                    "name" => "subject " . $i
                ]
            );
    }
}