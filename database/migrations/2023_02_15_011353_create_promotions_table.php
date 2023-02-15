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
        Schema::create('promotions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('chaussure_id');
            $table->integer('pourcentage_reduction');
            $table->date('date_debut');
            $table->date('date_fin');
            $table->timestamps();

            $table
                ->foreign('chaussure_id')
                ->references('id')
                ->on('chaussure')
                ->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promotions');
    }
};
