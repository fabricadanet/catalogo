@extends('catalogo.layout.app')
@section('content')
    <!-- Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col"> </th>
                            <th classs="text-left" scope="col">Categoria</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="w-auto"><img
                                    src="https://dummyimage.com/70x70/dee2e6/000&text=Categoria:70x70" />
                            </td>
                            <td class="fs-4 "><a class="text-decoration-none text-dark"
                                    href="{{ route('catalogo.produtos') }}">Nome Categoria</a></td>
                        </tr>
                        <tr>
                            <td class="w-auto"><img
                                    src="https://dummyimage.com/70x70/dee2e6/000&text=Categoria:70x70" />
                            </td>
                            <td class="fs-4 "><a class="text-decoration-none text-dark"
                                    href="{{ route('catalogo.produtos') }}">Nome Categoria</a></td>
                        </tr>
                        <tr>
                            <td class="w-auto"><img
                                    src="https://dummyimage.com/70x70/dee2e6/000&text=Categoria:70x70" />
                            </td>
                            <td class="fs-4 "><a class="text-decoration-none text-dark"
                                    href="{{ route('catalogo.produtos') }}">Nome Categoria</a></td>
                        </tr>
                        <tr>
                            <td class="w-auto"><img
                                    src="https://dummyimage.com/70x70/dee2e6/000&text=Categoria:70x70" />
                            </td>
                            <td class="fs-4 "><a class="text-decoration-none text-dark"
                                    href="{{ route('catalogo.produtos') }}">Nome Categoria</a></td>
                        </tr>
                        <tr>
                            <td class="w-auto"><img
                                    src="https://dummyimage.com/70x70/dee2e6/000&text=Categoria:70x70" />
                            </td>
                            <td class="fs-4 "><a class="text-decoration-none text-dark"
                                    href="{{ route('catalogo.produtos') }}">Nome Categoria</a></td>
                        </tr>
                        <tr>
                            <td class="w-auto"><img
                                    src="https://dummyimage.com/70x70/dee2e6/000&text=Categoria:70x70" />
                            </td>
                            <td class="fs-4 "><a class="text-decoration-none text-dark"
                                    href="{{ route('catalogo.produtos') }}">Nome Categoria</a></td>
                        </tr>

                    </tbody>
                </table>
            </div>

        </div>
    </section>
@endsection
