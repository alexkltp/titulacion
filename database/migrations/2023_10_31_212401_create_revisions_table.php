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
        Schema::create('revisiones', function (Blueprint $table) {
            $table->id("id_revision");
            $table->string('estado_revision', 15);
            $table->string('observaciones', 120)->nullable();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('id_solicitud');
            $table->timestamps();


            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('id_solicitud')->references('id_solicitud')->on('solicitud_titulacion');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('revisions');
    }
};
