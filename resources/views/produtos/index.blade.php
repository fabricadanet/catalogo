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

        <div class="alert alert-info" role="alert">Sample table page</div>

        <div class="card-body">
            Produtos

        </div>

        <div class="card-footer">

        </div>
    </div>
@endsection
