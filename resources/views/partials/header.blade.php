<header class="text-center">
    <section class="navigation">
        <nav class="navbar-nav navbar-light container-fluid">
            <ul class="d-flex list-style-none justify-content-center mb-0">
                <li class="p-3 {{ ( Route::currentRouteName() == 'pages.home') ? 'active' : '' }}">
                    <a href="{{ route('pages.home') }}">
                        Home
                    </a>
                </li>

                <li class="p-3 {{ ( Route::currentRouteName() == 'pokemons.index') ? 'active' : '' }}">
                    <a href="{{ route('pokemons.index') }}">
                        Pokemons:
                    </a>
                </li>

                <li class="p-3 {{ ( Route::currentRouteName() == 'pokemons.create') ? 'active' : '' }}">
                    <a href="{{ route('pokemons.create') }}">
                        Nuovo/a Pokemon:
                    </a>
                </li>

                <li class="p-3 {{ ( Route::currentRouteName() == 'pokemons.deleted') ? 'active' : '' }}">
                    <a href="{{ route('pokemons.deleted') }}">
                        Pokemon Eliminati:
                    </a>
                </li>
            </ul>
        </nav>
    </section>
</header>