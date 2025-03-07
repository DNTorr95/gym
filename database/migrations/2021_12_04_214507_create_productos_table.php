<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();//id productos
            $table->unsignedBigInteger('categoria_id');
            $table->string('nombre');
            $table->float('precio');
            $table->integer('stock');
            $table->binary('estado');

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('categoria_id')->on('categorias')->references('id');

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
}
