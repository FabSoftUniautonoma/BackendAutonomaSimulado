<?php

namespace Database\Seeders;

use App\Models\Estudiante;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EstudiantesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Estudiante::create([
            'cod_est' => '00001234',
            'num_cred' => 40,
        ]);
        Estudiante::create([
            'cod_est' => '00001235',
            'num_cred' => 50,
        ]);
        Estudiante::create([
            'cod_est' => '00001236',
            'num_cred' => 60,
        ]);
        Estudiante::create([
            'cod_est' => '00001237',
            'num_cred' => 70,
        ]);

    }
}
