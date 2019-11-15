<?php

use Illuminate\Database\Seeder;

class proveedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 11; $i++) {
            DB::table('proveedores')->insert([
                'nombre' => Str::random(10),
                'rut' => Str::random(10),
                'web' => 'https://'.Str::random(50).'.com',
                'telefono' => Str::random(10),
                'ciudad' => 'ciudad '.$i,
                'comuna' => Str::random(10),
                'calle' => Str::random(10),
                'numero' => Str::random(10),
            ]);
        }
    }
}
