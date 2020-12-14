<?php

use App\Level;
use Illuminate\Database\Seeder;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createLevel();
    }
    public function createLevel()
    {
        Level::create(["name" => "seconde"]);
        Level::create(["name" => "primaire"]);
        Level::create(["name" => "terminal"]);
    }
}