@extends('layouts.main')

@section('title', 'Produtos')

@section('content')

    <h1>tela de produtos</h1>
    <a href="/">Voltar para home</a>

    @if($busca !='')
    <p>O usuário está buscando por: {{ $busca }}</p>
    @endif
@endsection
