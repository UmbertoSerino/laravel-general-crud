<?php

use App\Http\Controllers\Guest\PokemonController as GuestPokemonController;
use App\Models\Pokemon;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




Route::get('/', function () {

    $pokemons = Pokemon::all();

    return view('pokemons.index', compact('pokemons'));
});

Route::get('/', function () { return view('pages.home');})->name('pages.home');


Route::get('/pokemons', [GuestPokemonController::class, 'index'])->name('pokemons.index');
Route::post('/pokemons', [GuestPokemonController::class, 'store'])->name('pokemons.store');
Route::get('/pokemons/deleted', [GuestPokemonController::class, 'deletedPokemons'])->name('pokemons.deleted');
Route::get('/pokemons/create', [GuestPokemonController::class, 'create'])->name('pokemons.create');
Route::get('/pokemons/{pokemon}', [GuestPokemonController::class, 'show'])->name('pokemons.show');
Route::get('/pokemons/{pokemon}/edit', [GuestPokemonController::class, 'edit'])->name('pokemons.edit');
Route::put('/pokemons/{pokemon}', [GuestPokemonController::class, 'update'])->name('pokemons.update');
Route::delete('/pokemons/{pokemon}', [GuestPokemonController::class, 'destroy'])->name('pokemons.delete');
