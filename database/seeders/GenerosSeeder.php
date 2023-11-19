<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
    

class GenerosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $generos = ['Masculino', 'Femenino'];

        foreach ($generos as $genero) {
            DB::table('generos')->insert([
                'nombre' => $genero
            ]);
        }
    }
}
