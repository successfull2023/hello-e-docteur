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
        Schema::create('rendezvouses', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('adresse');
            $table->integer('telephone');
            $table->date('date_rdv');
            $table->string('heure_rdv');
            $table->string('statut_rdv');
            $table->string('motif_rdv');

            $table->unsignedBigInteger('docteurs_id')->unsigned();
            $table->foreign('docteurs_id')->references('id')->on('docteurs')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rendezvouses');
    }
};
