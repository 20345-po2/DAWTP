<header>
    <script type="text/javascript" src="/app.js"></script>
    <nav class="navbar navbar-expand-lg navbar-light bg-light nav-center" id="navBar">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">My Recipe World</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="/">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/my-recipes">As Minhas Receitas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/user/recipes/create">Enviar Receita</a>
                    </li>
                    @auth
                        <li class="nav-item dropdown right-menu text-sm-center font-weight-bold text-uppercase">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                               role="button"
                               data-toggle="dropdown"
                               aria-haspopup="true"
                               aria-expanded="true">
                                Olá, {{auth()->user()->name}}!
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Minha conta</a>
                                <a class="dropdown-item" href="/user/recipes/create">Enviar receita</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" onclick="logout()">Sair</a>
                            </div>

                            <form method="POST" action="/logout" class="hidden" id="logout-form">
                                @csrf
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

                <form class="d-flex" method="GET" action="/">
                    <input class="form-control me-2" type="search" placeholder="Pesquise receitas" aria-label="Pesquisar"
                           name="search">
                    <button class="btn btn-outline-success" type="submit">
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
