@extends('layouts.app')

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            <div class="d-flex justify-content-between align-content-end">
                <div class="fs-1">
                    {{ __('Produtos') }}
                </div>

                <div class="mt-3">
                    <a href="{{ route('produtos.create') }}" class="btn btn-success btn-sm">
                        {{ __('Criar ') }}
                    </a>
                </div>
            </div>

        </div>



        <div class="card-body">
            <table class="table">
                <thead>
                <tr>
                    <th class="d-flex justify-content-center align-items-end" scope="col">Imagem</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Ações</th>
                </tr>
                </thead>
                <tbody>

                @foreach ($produtos as $produto)
                    <tr>
                        <td class="text-center">
                                <img style=" width: 50px;" src="{{asset('imagem/produtos/'.$produto->image ) }}" alt="">
                        </td>
                        <td class="">{{ $produto->nome }}
                        </td>
                        <td class="">{{ $produto->descricao }}</td>
                        <td class="">{{ $produto->preco }}</td>
                        <td class="">{{ $produto->quantidade }}</td>
                        <td class="">{{ $produto->categoria->nome }}</td>
                        <td class="">
                            <a href="{{ route('produtos.edit', $produto->id) }}" class="btn btn-primary btn-sm">
                                {{ __('Editar') }}
                            </a>
                            <form action="{{ route('produtos.destroy', $produto->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm">
                                    {{ __('Excluir') }}
                                </button>
                            </form>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>

        <div class="card-footer">

        </div>
    </div>
@endsection
