<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('etudiants', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('classe');
            $table->string('photo');
            //Clés étranères
            $table->foreignId('tuteur_id')->constrained()->onDelete("cascade");
            $table->foreignId('ville_id')->constrained()->onDelete("cascade");
            $table->foreignId('nationalite_id')->constrained()->onDelete("cascade");
            $table->foreignId('groupe_sanguin_id')->constrained()->onDelete("cascade");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etudiants');
    }
};