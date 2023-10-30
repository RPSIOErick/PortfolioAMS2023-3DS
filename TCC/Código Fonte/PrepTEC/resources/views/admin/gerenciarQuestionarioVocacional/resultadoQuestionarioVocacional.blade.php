@extends('layouts.mainNavbarOnly')

@section('title', 'Listar Questões do Simulado - PrepTEC')

@section('content')

@if(!empty($resultados)) <!--Caso ache resultado-->

@foreach ($resultados as $resultado)
    <div>
        <p>ID da Pergunta: {{ $resultado->id_pergunta}}</p>
        <p>Texto da Pergunta: {{ $resultado->txt_perg }}</p>
        <p>Tipo Inteligencia: {{ $resultado->nome_inteligencia }}</p>
    </div>
@endforeach

@else <!--Caso não ache resultado-->

<p>QUE PENA PACERO</p>

@endif

@endsection