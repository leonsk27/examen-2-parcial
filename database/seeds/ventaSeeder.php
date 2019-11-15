<?php

use Illuminate\Database\Seeder;

class ventaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 12; $i++) {
            DB::table('ventas')->insert([
                'fecha' => '2019-10-10',
                'montoFinal' => rand(50,200),
                'descuento' => rand(5,15),
                'cliente_id' => rand(1,10)
            ]);
        }
    }
}
