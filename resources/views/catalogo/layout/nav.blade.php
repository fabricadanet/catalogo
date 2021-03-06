   <!-- Navigation-->
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
       <div class="container px-4 px-lg-5">
           <a class="navbar-brand" href="{{ route('catalogo.index') }}">LOGO</a>
           <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
               data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
               aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
           <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                   <li class="nav-item"><a class="nav-link active" aria-current="page"
                           href="{{ route('catalogo.index') }}">Home</a></li>
                   <li class="nav-item dropdown">
                       <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">Catálogo</a>
                       <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                           <li><a class="dropdown-item" href="{{ route('catalogo.produtos') }}">Todos os Produtos</a>
                           </li>
                           <li>
                               <hr class="dropdown-divider" />
                           </li>
                           <li><a class="dropdown-item" href="{{ route('catalogo.categorias') }}">Categorias</a></li>

                           <li><a class="dropdown-item" href="{{ route('catalogo.promocao') }}">Promoções</a></li>
                       </ul>
                   </li>
                   <li class="nav-item"><a class="nav-link" href="{{ route('catalogo.sobre') }}">Sobre</a>
                   </li>
                   <li class="nav-item"><a class="nav-link"
                           href="{{ route('catalogo.contato') }}">Contato</a>
                   </li>
               </ul>
               <div class="d-flex">
                   <a class="btn btn-outline-dark" href="{{ route('catalogo.carrinho') }}">
                       <i class="bi-cart-fill me-1"></i>
                       <span class="badge bg-dark text-white ms-1 rounded-pill" id="#items-in-cart">
                          {{ session()->has('carrinho')>0?count(session('carrinho')):0 }}
                       </span>
                   </a>
               </div>
           </div>
       </div>
   </nav>
