<?php

namespace Database\Seeders;

use App\Models\Observation;
use App\Models\TypeObservation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ObservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Observation::insert([
            ['description' => 'PERRO BRAVO'],
            ['description' => 'CONTADOR CON CANDADO'],
            ['description' => 'CONTADOR INACCESIBLE'],
            ['description' => 'PREDIO EN CONSTRUCCIÓN'],
            ['description' => 'NO EXISTE CONTADOR']
        ]);
    }
}
