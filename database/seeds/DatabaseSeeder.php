<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(categoriaSeeder::class);
        $this->call(proveedorSeeder::class);
        $this->call(clienteSeeder::class);
        $this->call(productoSeeder::class);
        $this->call(ventaSeeder::class);
        $this->call(detalleSeeder::class);
        
    }
}
