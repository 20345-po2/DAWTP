<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <title>My Recipe World</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
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
                    <a class="nav-link" href="/send-recipe">Enviar Receita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/my-account">A Minha Conta</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about-us">Sobre nós</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Pesquise por receitas aqui"
                       aria-label="Pesquisar">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
            </form>
        </div>
    </nav>
</header>

@yield('content')

<footer class="footer bg-light text-center font-weight-bold">
    &copy;My Recipe World 2022 - Celso Pedro | <a href="mailto:20345@stu.ipbeja.pt">20345@stu.ipbeja.pt</a>
</footer>
</body>
</html>



