<?php

namespace Database\Seeders;

use App\Models\TypeAssurance;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Mockery\Matcher\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TypeAssurance::create([
           "libelle" => "VIE","image" => " "
        ]);
        TypeAssurance::create([
            "libelle" => "VOYAGE","image" => " "
        ]);
        TypeAssurance::create([
            "libelle" => "HABIBAT","image" => " "
        ]);

    }
}
