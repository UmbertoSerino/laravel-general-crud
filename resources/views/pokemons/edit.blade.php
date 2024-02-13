@extends('layouts.app')

@section('main-content')
<section  class="form-container container w-50 mx-auto">
    <div class="row justify-content-center">
        <h3 class="m-3">Edit a Pokémon</h3>
        <form action="{{ route('pokemons.update', $pokemon->id ) }}" method="POST">
            @csrf
            {{-- aggiunta metodo per update --}}
            @method('PUT')

            <div class="mb-3">
                {{-- posso toglierlo? --}}
                <label for="img" class="form-label">Image url:</label>
                <input type="text" name="img" id="img" class="form-control" value="{{ old('img', $pokemon->img) }}">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Name of the Pokémon: </label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old( 'name' ,$pokemon->name) }}">
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Type of the Pokémon: </label>
                <input type="text" name="type" id="type" class="form-control" value="{{ old('type', $pokemon->type) }}">
            </div>
            <div class="mb-3">
                <label for="level" class="form-label">Level of the Pokémon: </label>
                <input type="text" name="level" id="level" class="form-control" value="{{ old('level', $pokemon->level)  }}">
            </div>
            <div class="mb-3">
                <label for="attack" class="form-label">Attack of the Pokémon: </label>
                <input type="text" name="attack" id="attack" class="form-control" value="{{ old('attack', $pokemon->attack)  }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description of the Pokémon:</label>
                <textarea type="text" name="description" id="description" class="form-control" rows=6> {{ old ('description', $pokemon->description) }} </textarea>
            </div>
            <button type="submit" class="btn btn-primary mt-3 mb-4">Edit the Pokémon you chose</button>
        </form>
    </div>

</section>    
@endsection