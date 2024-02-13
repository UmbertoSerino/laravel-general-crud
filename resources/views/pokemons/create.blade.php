@extends('layouts.app')

@section('main-content')

<h1 class="text-center">
    Crea pokemon
</h1>
    <section class="form-container container">
        <div class="row">
            <div class="col-12">
                <form class="pt-4" action="{{route('pokemons.store')}}"  method="POST">
                   @csrf



                    <div class="mb-3">
                        <label for="name" class="form-label">inserisci nome:</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>

                    <div class="mb-3" class="form-label">
                        <label for="type">inserisci tipo</label>
                        <input type="text" name="type" id="type" class="form-control">
                    </div>

                    <div class="mb-3" class="form-label">
                        <label for="level">level</label>
                        <input type="text" name="level" id="level" class="form-control">
                    </div>

                    <div class="mb-3" class="form-label">
                        <label for="attack">attack</label>
                        <input type="text" name="attack" id="attack" class="form-control">
                    </div>

                    <div class="mb-3" class="form-label">
                        <label for="img">img</label>
                        <input type="text" name="img" id="img" class="form-control">
                    </div>

                    <div class="mb-3" class="form-label">
                        <label for="description">description</label>
                        <textarea type="text" name="description" id="description" class="form-control" rows="4">
                        </textarea>
                        </div>

     <button type="submit" class="btn btn-primary"> crea pokemon</button>
     <button type="reset" class="btn btn-warning"> pulisci</button>


                </form>

            </div>

        </div>

    </section>
@endsection
