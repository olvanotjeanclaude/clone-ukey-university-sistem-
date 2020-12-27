<?php

use App\Material;
use Illuminate\Database\Seeder;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 5; $i++) {
            Material::create([
                "name" => "Google Meet Ders Linki (Tüm dönem bu link kullanılacak)",
                "materialType" => "book",
                "type" => "text",
                "link" => "https://translate.google.com/",
                "folder" => "",
                "text" => "2020_12_19_155521_create_material_table"
            ]);
        }
    }
}