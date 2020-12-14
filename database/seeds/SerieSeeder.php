<?php

use App\Serie;
use Illuminate\Database\Seeder;

class SerieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Serie::create(["name" => "general"]);
        Serie::create(["name" => "A1"]);
        Serie::create(["name" => "A2"]);
        Serie::create(["name" => "D"]);
        Serie::create(["name" => "C"]);
    }
}