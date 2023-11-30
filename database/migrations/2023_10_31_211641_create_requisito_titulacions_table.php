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
        Schema::create('requisito_titulacion', function (Blueprint $table) {
            $table->id("id_requisito");
            $table->string('descripcion_requisito');
            $table->timestamps();
            $table->unsignedBigInteger('id_opcion');
            $table->foreign('id_opcion')->references('id_opcion')->on('opcion_titulacion');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requisito_titulacions');
    }
};
