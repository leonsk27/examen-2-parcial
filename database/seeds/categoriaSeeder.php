<?php

use Illuminate\Database\Seeder;

class categoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            'nombre' => 'Manaco',
            'descripcion' => Str::random(10)
        ]);
        for ($i = 1; $i < 11; $i++) {
            DB::table('categorias')->insert([
                'nombre' => Str::random(10),
                'descripcion' => Str::random(10)
            ]);
        }
    }
}
