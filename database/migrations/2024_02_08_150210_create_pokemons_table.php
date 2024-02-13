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
        Schema::create('pokemons', function (Blueprint $table) {
            $table->id();
            // Ino Pokemon database
            $table->string('name'); // Aggiungi una colonna per il nome del Pokémon
            $table->text('type'); // Aggiungi una colonna per il tipo del Pokémon
            $table->integer('level')->nullable(); // Aggiungi una colonna per il livello del Pokémon (può essere null)
            $table->integer('attack')->nullable(); // Aggiungi una colonna per il attack del Pokémon
            $table->text('img'); // Aggiungi una foto del Pokémon
            $table->text('description')->nullable(); // Aggiungi una colonna per una descrizione del Pokémon (può essere null)

            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pokemons');
    }
};
