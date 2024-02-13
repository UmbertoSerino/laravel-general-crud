<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Pokemon;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        //Inizializzo una variabile che fa la get all sul Model Pokemons
        $pokemons = Pokemon::all();
        // dd($movies);
        return view('pokemons.index', compact('pokemons'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pokemons.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $newPokemonData = $request->all();

        $newPokemon = new Pokemon();
        $newPokemon->name = $newPokemonData['name'];
        $newPokemon->type = $newPokemonData['type'];
        $newPokemon->level = $newPokemonData['level'];
        $newPokemon->attack = $newPokemonData['attack'];
        $newPokemon->img = $newPokemonData['img'];
        $newPokemon->description = $newPokemonData['description'];

        $newPokemon->save();

        return redirect()->route('pokemons.show', $newPokemon->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Pokemon $pokemon)
    {
        //
        // dd($pasta);
        return view('pokemons.show', compact('pokemon'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pokemon $pokemon)
    {
        // $pokemon=Pokemon::findOrFail($id);
        return view('pokemons.edit', compact('pokemon'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pokemon $pokemon)
    {
        // dd($request->all());
        $data = $request->all();
        $pokemon->update($data);
        return redirect()->route('pokemons.show', $pokemon->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pokemon $pokemon)
    {
        $pokemon->delete();
        return redirect()->route('pokemons.index');
    }

    /**
     * Recover deleted storage.
     */
    public function deletedPokemons()
    {
        $pokemons = Pokemon::onlyTrashed()->get();
        return view('pokemons.deleted', compact('pokemons'));
    }
}
