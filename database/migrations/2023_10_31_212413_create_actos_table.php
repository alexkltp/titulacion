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
        Schema::create('actos', function (Blueprint $table) {
            $table->id("id_acto");
            $table->timestamp('fecha_acto');
            $table->string('sala', 30);
            $table->unsignedBigInteger('id_solicitud');
            $table->timestamps();


            $table->foreign('id_solicitud')->references('id_solicitud')->on('solicitud_titulacion');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('actos');
    }
};
