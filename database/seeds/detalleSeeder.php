<?php

use Illuminate\Database\Seeder;

class detalleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 16; $i++) {
            DB::table('detalles')->insert([
                'cantidad' => rand(10,100),
                'venta_id' => rand(1,12),
                'producto_id' => rand(1,10)
            ]);
        }
    }
}
