@extends('layouts.app')

@section('main-content')
    <h1>
        Pokédex
    </h1>
<div class="container">
<div class="row">
    @foreach ($pokemons as $pokemon)
    <div class="card" style="width: 18rem;">
                <a href="{{ route('pokemons.show', $pokemon->id) }}">
                    <div class="card">
                        <img src="{{ $pokemon->img }}" alt="{{ $pokemon->name }} picture"  >
                        <div class="card-body">
                            <p class="text-uppercase">
                                {{ $pokemon->name}}
                            </p>
                        </div>
                    </div>
                </a>
        </div>
    @endforeach
</div>
</div>
    
@endsection
