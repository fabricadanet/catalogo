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
                        <th class="text-center">Imagem</th>
                        <th class="">Nome</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach ($categorias as $categoria)
                        <tr>
                            <td class="text-center">
                                <img style=" width: 50px;" src="{{asset('imagem/categorias/'. $categoria->image )}}" alt="">
                            </td>
                            <td class="">{{ $categoria->nome }}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
        </div>


    </div>





@endsection
