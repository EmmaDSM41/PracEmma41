<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Proveedores;
use App\Models\Productos;
use App\Models\Clientes;
use App\Http\Controllers\ProveedoresController;
use App\Http\Controllers\productosController;
use App\Http\Controllers\clientesController;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\clientes>
 */
class clientesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
             
            'producto_id' => productos::all()->random()->id,
        ];
    }
}
