<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Meu catalogo - Loja da esquina</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="{{ route('index') }}">LOGO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" aria-current="page"
                            href="{{ route('index') }}">Home</a></li>

                    <li class="nav-item"><a class="nav-link"
                            href="{{ route('catalogo.contato') }}">Contato</a></li>
                    <li class="nav-item"><a class="nav-link"
                            href="{{ route('catalogo.sobre') }}">Sobre</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Loja</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#!">Todos os Produtos</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item" href="#!">Categorias</a></li>
                            <li><a class="dropdown-item" href="#!">Promoções</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex">
                    <button class="btn btn-outline-dark" type="submit">
                        <i class="bi-cart-fill me-1"></i>
                        Cart
                        <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                    </button>
                </form>
            </div>
        </div>
    </nav>
    <!-- Header-->

    <!-- Section-->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="text-center">
                        <span class="text-dark">
                            Contato
                        </span>
                    </h1>
                    <div>
                        <div class="row">
                            <form class="form-horizontal" action="#">
                                @csrf
                                <input name="Nome" type="text" class="form-control m-2" id="Nome" placeholder="Nome">
                                <input name="Email" type="email" class="form-control m-2" id="Email"
                                    placeholder="Email">
                                <input name="Telefone" type="text" class="form-control m-2" id="Telefone"
                                    placeholder="Telefone">
                                <textarea name="Mensagem" class="form-control m-2" id="Mensagem" rows="3"
                                    placeholder="Mensagem"></textarea>

                                <div class="row m-auto"> <button type="submit" class="btn btn-primary">
                                        Enviar</button>
                                </div>
                            </form>
                        </div>
                        <div class="row ">
                            <button type="button" class="btn btn-success mt-2">Me chame no whats!</button>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Feito com &hearts; pela fabricadanet.top 2021</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>

</html>
