<?php

use Illuminate\Database\Seeder;

class clienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 11; $i++) {
            DB::table('clientes')->insert([
                'nombre' => Str::random(10),
                'rut' => Str::random(10),
                'telefono' => Str::random(10),
                'ciudad' => 'ciudad '.$i,
                'comuna' => Str::random(10),
                'calle' => Str::random(10),
                'numero' => Str::random(10),
            ]);
        }
    }
}
