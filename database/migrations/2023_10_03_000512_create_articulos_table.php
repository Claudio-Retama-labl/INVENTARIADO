<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('articulos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('serial');
            $table->string('Modelo');
            $table->string('especificaciones');
            $table->string('color');
            $table->bigInteger('categorias_id')->unsigned()->index()->nullable();
            $table->foreign('categorias_id')->references('id')->on('categorias')->onDelete('cascade'); 

            $table->bigInteger('dependencias_id')->unsigned()->index()->nullable();
            $table->foreign('dependencias_id')->references('id')->on('dependencias')->onDelete('cascade'); 
            
            $table->bigInteger('financiamiento_id')->unsigned()->index()->nullable();
            $table->foreign('financiamiento_id')->references('id')->on('financiamientos')->onDelete('cascade'); 
            
            $table->tinyInteger('estado_bien')->default(1);
            $table->tinyInteger('estado')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articulos');
    }
};
