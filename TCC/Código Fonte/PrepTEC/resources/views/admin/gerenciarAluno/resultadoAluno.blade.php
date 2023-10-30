@extends('layouts.mainNavbarOnly')

@section('title', 'Listar Questões do Simulado - PrepTEC')

@section('content')

@if(!empty($resultados)) <!--Caso não ache resultado-->

<p>PENA</p>

@else <!--Casoache resultado-->

@foreach ($resultadoAluno as $resultado)
    <div>
        <p>ID do Estudante: {{ $resultado->id_usuario}}</p>
        <p>Nome: {{ $resultado->nome_usuario }}</p>
        <p>Email: {{ $resultado->email_usuario }}</p>
        <p>Tipo de Acesso: {{ $resultado->tipoUsuario }}</p>
    </div>
@endforeach

@endif

@endsection