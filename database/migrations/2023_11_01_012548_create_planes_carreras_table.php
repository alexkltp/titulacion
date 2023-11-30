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
        Schema::create('planes_carreras', function (Blueprint $table) {
            $table->id("id_plan_carrera");
            $table->unsignedBigInteger('id_plan');
            $table->string('carrera');
            $table->foreign('id_plan')->references('id_plan')->on('planes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('planes_carreras');
    }
};
