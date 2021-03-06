@extends('layouts.app')

@section('content')
    <div class="card mb-4">
        <div class="card-header fs-1">
            {{ __('Nova Categoria') }}

        </div>

        {{-- <div class="alert alert-info" role="alert"></div> --}}
        <form action="{{ route('categorias.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" name="nome"  class="form-control" id="nome" placeholder="Digite o nome da nova categoria">
                </div>
                <div class="mb-3">
                    <label for="formFileLg" class="form-label">Imagem</label>
                    <input class="form-control form-control" name="image" id="formFileLg" type="file">
                </div>
            </div>
            <div class="card-footer">
                <button  class="btn btn-primary" id="btn-salvar">Salvar</button>
            </div>
        </form>
    </div>
@endsection
