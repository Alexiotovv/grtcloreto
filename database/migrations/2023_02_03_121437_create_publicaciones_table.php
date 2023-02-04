<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publicaciones', function (Blueprint $table) {
            $table->id();
            $table->string('Titulo', 100)->nullable()->default('');
            $table->string('Descripcion', 100)->nullable()->default('');
            $table->date('Fecha')->nullable();
            $table->string('NombreDocumento', 200)->nullable()->default('');
            $table->string('Observaciones', 250)->nullable()->default('');
            $table->string('Ruta', 250)->nullable()->default('');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('publicaciones');
    }
}
