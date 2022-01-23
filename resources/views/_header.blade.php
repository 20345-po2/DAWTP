<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">My Recipe World</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Início <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/my-recipes">As Minhas Receitas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/add-recipe">Enviar Receita</a>
                </li>
                @auth
                    <li class="nav-item">
                        <span class="nav-link text-sm-center font-weight-bold text-uppercase mt-3">
                            Olá, {{auth()->user()->name}}!</span>
                        <form method="POST" action="/logout" class="nav-link">
                            @csrf
                            <button class="btn-outline-primary rounded">Sair</button>
                        </form>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="/register">Criar conta</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Iniciar sessão</a>
                    </li>
                @endauth
                <li class="nav-item">
                    <a class="nav-link" href="/about-us">Sobre nós</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0" method="GET" action="#">
                <input class="form-control mr-sm-2" type="search" placeholder="Pesquise receitas"
                       aria-label="Pesquisar" name="search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                         class="bi bi-search" viewBox="0 0 16 16">
                        <path
                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg>
                </button>
            </form>
        </div>
    </nav>
</header>
