@extends('layout')

@section('cabecalho')
Séries
@endsection

@section('conteudo')

@if(!empty($mensagem))
<div class="alert alert-success">{{ $mensagem }}</div>
@endif

<a href="{{ route('form_criar_serie') }}" class="btn btn-dark  mb-2">Adicionar Série</a>

<ul class="list-group">
    @foreach ($series as $serie)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            {{ $serie->nome }}
            <form method="POST" action="/series/{{ $serie->id }}" onsubmit="return confirm(' Tem Certeza ?')">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Excluir</button>
            </form>
        </li>
    @endforeach
</ul>
@endsection