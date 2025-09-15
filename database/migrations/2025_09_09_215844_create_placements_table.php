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
        Schema::disableForeignKeyConstraints();

        Schema::create('placements', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employeur_id');
            $table->foreign('employeur_id')->references('id')->on('employeurs');
            $table->unsignedBigInteger('employe_id');
            $table->foreign('employe_id')->references('id')->on('employes');
            $table->unsignedBigInteger('service_id');
            $table->foreign('service_id')->references('id')->on('services');
            $table->enum('type_contrat', ["journalier","mensuel"]);
            $table->date('date_debut');
            $table->date('date_fin')->nullable();
            $table->enum('statut', ["en_attente","actif","terminer","rejeter"]);
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('placements');
    }
};
