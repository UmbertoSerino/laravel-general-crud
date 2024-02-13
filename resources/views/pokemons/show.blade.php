@extends('layouts.app')

@section('main-content')

    <section class="products">
        <div class="container">
            <div class="row">
                <div class="row mb-3 justify-content-center">
                    <div class="col-7 p-3">
                        <div class="card p-4 text-center">
                            <h1>
                                {{ $pokemon->name }}
                            </h1>
                            <p>
                                Level: {{ $pokemon->level }}
                            </p>
                            <p>
                                Type: {{ $pokemon->type }}
                            </p>
                            
                            <p>
                                Attack: {{ $pokemon->attack }}
                            </p>

                            <p>
                                Description: {{ $pokemon->description }}
                            </p>
                            <div class="card-image">
                                <img class="w-50" src="{{  $pokemon->img }}" alt="{{ $pokemon->name }}'s picture">
                            </div>
                            <div class="actions mb-3 pt-3">
                                <a href="{{ route('pokemons.edit', $pokemon->id) }}">
                                    <button class="btn btn-primary">
                                        Modifica il Pokémon
                                    </button>
                                </a>
                            <form action="{{ route('pokemons.delete', $pokemon->id) }}" method="POST" id="destroyer-button" data-pokemon="{{ $pokemon->name }}"> 
                                @csrf
                                @method('DELETE')                        
                                <button type="submit" class="btn btn-warning mt-3">
                                    Elimina
                                </button>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script-content')
<script>
    const buttonDeleteForm = document.querySelectorAll('#destroyer-button');
    buttonDeleteForm.forEach(form => {
        form.addEventListener('click', function(event) {
            event.preventDefault();
            const pokemonName = this.getAttribute('data-pokemon');
            const confirmWindow = window.confirm(`Sei sicuro di voler ELIMINARE ${pokemonName}`);
            if(confirmWindow){
                this.submit();
            }
        });
        
    });
</script>
@endsection
