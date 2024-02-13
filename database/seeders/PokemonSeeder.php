<?php

namespace Database\Seeders;

use App\Models\Pokemon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PokemonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $pokemons = config('db.pokemons');

        foreach ($pokemons as $pokemonItem) {
            $actualpokemon = new Pokemon();
            $actualpokemon->name = $pokemonItem['name'];
            $actualpokemon->type = $pokemonItem['type'];
            $actualpokemon->level = $pokemonItem['level'];
            $actualpokemon->attack = $pokemonItem['attack'];
            $actualpokemon->img = $pokemonItem['img'];
            $actualpokemon->description = $pokemonItem['description'];
            $actualpokemon->save();
        }
    }
}
