<?php

use App\Classes;
use App\Level;
use Illuminate\Database\Seeder;

class ClassesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $countRoom = 1;
    public function run()
    {
        $this->createClassSeconde();
        $this->createClassPrimary();
        $this->createClassTerminal();
    }
    public function createClassSeconde()
    {
        for ($i = 0; $i < 10; $i++) {
            Classes::create([
                "level" => "seconde ",
                "serie" => "general",
                "room" => $this->countRoom
            ]);
        }
        $this->countRoom++;
    }
    public function createClassPrimary()
    {
        for ($i = 0; $i < 10; $i++) {
            Classes::create([
                "level" => "primary",
                "serie" => "A1",
                "room" => $this->countRoom
            ]);
            $this->countRoom++;
        }
        for ($i = 0; $i < 10; $i++) {
            Classes::create([
                "level" => "primary",
                "serie" => "A2",
                "room" => $this->countRoom
            ]);
            $this->countRoom++;
        }
        for ($i = 0; $i < 8; $i++) {
            Classes::create([
                "level" => "primary",
                "serie" => "D",
                "room" => $this->countRoom
            ]);
            $this->countRoom++;
        }
    }
    public function createClassTerminal()
    {
        for ($i = 0; $i < 11; $i++) {
            Classes::create([
                "level" => "terminal",
                "serie" => "A1",
                "room" => $this->countRoom
            ]);
            $this->countRoom++;
        }
        for ($i = 0; $i < 11; $i++) {
            Classes::create([
                "level" => "terminal",
                "serie" => "A2",
                "room" => $this->countRoom
            ]);
            $this->countRoom++;
        }
        for ($i = 0; $i < 8; $i++) {
            Classes::create([
                "level" => "terminal",
                "serie" => "D",
                "room" => $this->countRoom
            ]);
            $this->countRoom++;
        }
        for ($i = 0; $i < 2; $i++) {
            Classes::create([
                "level" => "terminal",
                "serie" => "C",
                "room" => $this->countRoom
            ]);
            $this->countRoom++;
        }
    }
}