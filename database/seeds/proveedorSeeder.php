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
        DB::table('proveedores')->insert([
            'nombre' => 'Manaco',
            'rut' => Str::random(10),
            'web' => 'https://'.Str::random(50).'.com',
            'telefono' => Str::random(10),
            'ciudad' => 'ciudad 0',
            'comuna' => Str::random(10),
            'calle' => Str::random(10),
            'numero' => rand(1,150)
        ]);
        for ($i = 1; $i < 11; $i++) {
            DB::table('proveedores')->insert([
                'nombre' => Str::random(10),
                'rut' => Str::random(10),
                'web' => 'https://'.Str::random(50).'.com',
                'telefono' => Str::random(10),
                'ciudad' => 'ciudad '.$i,
                'comuna' => Str::random(10),
                'calle' => Str::random(10),
                'numero' => rand(1,150)
            ]);
        }
    }
}
