@extends('layouts.mainNavbarOnly')

@section('title', 'Listar Questões do Simulado - PrepTEC')

@section('content')

@foreach ($resultadoSimulado as $resultado)
    <div>
        <p>ID da Questão: {{ $resultado->id_quest }}</p>
        <p>Texto da Questão: {{ $resultado->txt_quest }}</p>
    </div>
@endforeach

@endsection