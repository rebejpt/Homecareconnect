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

        Schema::create('paiements', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('placement_id');
            $table->foreign('placement_id')->references('id')->on('placements');
            $table->decimal('montant');
            $table->dateTime('date_paiement');
            $table->enum('mode_paiement', ["mobile_money","carte_bancaire","cash"]);
            $table->enum('type_paiment', ["entree","sortie"]);
            $table->string('ref_transaction')->comment('ID transaction opérateur ou banque');
            $table->enum('statut', ["en_attente","payer","echouer","rembourser"]);
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paiements');
    }
};
