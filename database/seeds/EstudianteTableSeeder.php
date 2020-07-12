<?php

use App\Estudiante;
use Illuminate\Database\Seeder;

class EstudianteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Estudiante::class)->times(20)->create();
    }
}
