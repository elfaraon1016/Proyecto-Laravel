<?php

use Illuminate\Database\Seeder;
use App\Producto;

class ProductosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $producto = new Producto;
        $producto->Nombre = ('Aceite manuelita');
        $producto->ValorUNitario = ('20000');
        $producto->Codigo = ('abc2345');
        $producto->save();

        $this->command->info('Tabla de productos inicializada');
    }
}
