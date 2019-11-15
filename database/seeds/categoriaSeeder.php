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
        for ($i = 0; $i < 11; $i++) {
            DB::table('categorias')->insert([
                'nombre' => Str::random(10),
                'descripcion' => Str::random(10)
            ]);
        }
    }
}
