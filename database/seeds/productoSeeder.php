<?php

use Illuminate\Database\Seeder;

class productoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 11; $i++) {
            DB::table('productos')->insert([
                'nombre' => Str::random(10),
                'precio' => rand(1,10),
                'stock' => 100,
                'categoria_id' => rand(1,10),
                'proveedor_id' => rand(1,10)
            ]);
        }
    }
}
