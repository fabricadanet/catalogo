@extends('layouts.app')

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            <div class="d-flex justify-content-between align-content-end">
                <div class="fs-1">
                    {{ __('Categorias') }}
                </div>

                <div class="mt-3">
                    <a href="{{ route('categorias.create') }}" class="btn btn-success btn-sm">
                        {{ __('Criar ') }}
                    </a>
                </div>
            </div>

        </div>

        {{-- <div class="alert alert-info" role="alert"></div> --}}

        <div class="card-body">

            <table class="table">
                <thead>
                    <tr>
                        <th class="d-flex justify-content-center align-items-end" scope="col">Imagem</th>
                        <th scope="col">Nome</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categorias as $categoria)
                        <tr>
                            <td class="d-flex justify-content-center align-items-end"><img style=" width: 100px;"
                                    src="{{ $categoria->image }}" alt="">
                            </td>

                            </td>

                            <td lass="d-flex justify-content-center align-items-start">{{ $categoria->nome }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>

        <div class="card-footer">
            {{ $categorias->links() }}
        </div>
    </div>
@endsection
