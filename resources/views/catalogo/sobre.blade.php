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
                            Sobre nós.
                        </span>
                    </h1>
                    <div>
                        <p class="lead text-center">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id orci
                            quis nunc euismod aliquam. Donec eget nunc euismod, consectetur nisl
                            vitae, sagittis nisl.
                        </p>
                        <p class="lead text-center">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras luctus rutrum consectetur.
                            Aenean fermentum malesuada imperdiet. Phasellus feugiat luctus finibus. Duis ac finibus
                            felis. Sed et tristique urna. Proin viverra leo ac massa interdum, eu mattis tortor
                            consectetur. Pellentesque semper turpis tortor, sed ultricies est pretium ac. Fusce id diam
                            in diam vulputate commodo. Nam pulvinar facilisis sapien, ut facilisis ipsum aliquet eu.
                            Quisque tempor cursus tincidunt. Fusce a neque sit amet mauris fringilla posuere. In et
                            varius ante, in lobortis purus. Fusce nec consectetur ipsum. Quisque ultrices fermentum
                            pharetra. Nullam dictum nulla eu lorem varius maximus.

                            Fusce at lacus quis nibh lobortis tempus laoreet sit amet turpis. Vivamus nec mollis ante,
                            eget tincidunt magna. Duis bibendum mauris eu felis euismod, a ultricies diam rutrum.
                            Curabitur facilisis ut dui et porttitor. Quisque nec ipsum blandit, malesuada ex eget,
                            placerat lectus. Morbi erat neque, auctor non tincidunt vitae, vulputate dapibus ligula. Sed
                            placerat, ipsum vel convallis sollicitudin, libero enim congue neque, sit amet pharetra
                            sapien tortor quis libero. Mauris egestas enim ante, a tempus arcu vehicula quis. Aliquam
                            efficitur egestas tellus eget ornare. Etiam mi arcu, ultrices eu nibh quis, euismod congue
                            libero. Sed venenatis eros pulvinar convallis feugiat. Morbi in aliquam mauris, vel interdum
                            metus. Nunc vitae vulputate arcu, eu egestas risus.

                            Morbi sit amet tincidunt massa. Nullam id vulputate justo. Etiam in euismod purus, non
                            euismod massa. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
                            cubilia curae; Cras sed diam nec risus faucibus venenatis vitae et odio. Sed porttitor,
                            risus in pellentesque porttitor, eros ante malesuada massa, sed facilisis sapien ex eget
                            est. Aliquam scelerisque nulla eros, et vestibulum quam placerat at. Mauris sed eros id
                            magna tristique varius. Morbi viverra leo at magna placerat, ut auctor nisi mollis. Donec ut
                            ex quis dolor volutpat porttitor.

                            Suspendisse placerat a nibh in porta. Aliquam in scelerisque nulla, sed lobortis sem.
                            Pellentesque dapibus sapien ligula, sed mollis ante suscipit non. In et dolor dui. Quisque
                            in ligula quis metus hendrerit ullamcorper vel at ligula. Praesent est lacus, pretium non
                            elit sodales, elementum molestie ligula. Proin eget luctus orci. Donec varius fringilla ante
                            vel fermentum. Mauris porta, turpis varius feugiat congue, justo orci sollicitudin metus,
                            vitae dictum nisl justo in lacus. Mauris non fermentum tortor. Ut cursus tortor sit amet dui
                            ornare laoreet. Sed vel tristique dolor.

                            Nunc tincidunt ligula enim, placerat feugiat massa molestie quis. Proin ultrices nulla nisl,
                            vitae imperdiet sem interdum vitae. Etiam condimentum faucibus leo eu suscipit. Nulla
                            efficitur nulla in sapien varius convallis. Aenean hendrerit orci sed turpis malesuada, id
                            faucibus mi tincidunt. Aliquam sed velit luctus, commodo metus sed, convallis mauris.
                            Phasellus finibus pharetra enim, id condimentum massa lobortis non. Donec a venenatis
                            turpis, non feugiat sapien. Suspendisse eleifend augue eros, a dignissim tortor egestas
                            fermentum. Ut ut arcu nec est luctus rhoncus vitae sit amet dui. Nullam consequat porta
                            velit non lacinia. Praesent egestas maximus varius. Sed consequat nunc massa, eu blandit
                            lacus auctor vitae. Morbi sed euismod mauris. Maecenas elementum et turpis lobortis
                            venenatis. Sed eu ipsum tortor.
                        </p>
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
