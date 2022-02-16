@extends('catalogo.layout.app')
<!-- Navigation-->
@section('content')
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Meus Produtos</h1>
                <p class="lead fw-normal text-white-50 mb-0">Os melhores produtos para o melhor cliente!</p>
            </div>
        </div>
    </header>
    <!-- Section-->
    <div>
        @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @elseif(session()->has('error'))
            <div class="alert alert-danger">
                {{session()->get('error')}}
            </div>
        @endif
    </div>
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                @foreach($produtos as $produto)
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" style="max-width: 400px; max-height: 300px" src="{{asset('imagem/produtos/'.$produto->image)}}" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">{{$produto->nome}}</h5>
                                    <!-- Product price-->
                                   @money($produto->preco, 'BRL')
                                    <!-- Product description-->
                                    <p class="text-muted mb-0">{{$produto->descricao}}</p>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div
                                class="d-flex justify-content-between align-content-center card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-primary mt-auto"
                                                            href="{{ route('catalogo.produto-detalhe') }}"><i class="bi bi-eye-fill"></i></a>
                                </div>
                                <div class="text-center">
                                    <form method="POST" action="{{route('carrinho.add')}}">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$produto->id}}">
                                        <button type="submit" class="btn btn-outline-success mt-auto"><i class="bi bi-cart-fill me-1"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
