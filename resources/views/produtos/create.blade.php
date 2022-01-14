@extends('layouts.app')

@section('content')
    <div class="card mb-4">
        <div class="card-header fs-1">
            {{ __('Novo Produto') }}

        </div>

        {{-- <div class="alert alert-info" role="alert"></div> --}}

        <div class="card-body">

            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" placeholder="Digite o nome do novo produto">
            </div>
            <div class="mb-3 ">
                <label for="descricao" class="form-label">Descrição</label>
                <input type="text" class="form-control" id="descricao" placeholder="Digite a descrição do novo produto">
            </div>
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label for="preco" class="form-label">Preço</label>
                    <input type="text" class="form-control" id="preco" placeholder="Digite o preço do novo produto">
                </div>
                <div class="mb-3 col-md-6">
                    <label for="quantidade" class="form-label">Quantidade</label>
                    <input type="text" class="form-control" id="quantidade"
                        placeholder="Digite a quantidade do novo produto">
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label for="categoria" class="form-label">Categoria</label>
                    <input type="text" class="form-control" id="categoria"
                        placeholder="Selecione a categoria do novo produto">
                </div>
                <div class="mb-3 col-md-6">
                    <label for="formFileLg" class="form-label">Imagem</label>
                    <input class="form-control form-control" id="formFileLg" type="file">
                </div>
            </div>

        </div>

        <div class="card-footer">
            <button class="btn btn-primary" id="btn-salvar">Salvar</button>
        </div>
    </div>
@endsection
