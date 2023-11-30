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
        Schema::create('solicitud_titulacion', function (Blueprint $table) {
            $table->id("id_solicitud");
            $table->integer('estado_solicitud');
            $table->string('razon_rechazo', 120)->nullable();
            $table->timestamp('fecha_solicitud');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('id_opcion');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('id_opcion')->references('id_opcion')->on('opcion_titulacion');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('solicitud_titulacions');
    }
};
