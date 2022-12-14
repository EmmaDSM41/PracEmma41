<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {

            $table->increments('id');
                $table->string('name');
                $table->string('descripcion');
                $table->string('precio');
                $table->integer('proveedor_id')->unsigned();
                $table->foreign('proveedor_id')->references('id')->on('proveedores')->onDelete('cascade');
    
                $table->timestamps();
                $table->SoftDeletes();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');

    }
};
