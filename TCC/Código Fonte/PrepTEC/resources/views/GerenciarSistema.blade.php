@extends('layouts.main')

@section('title', 'Gerenciar Sistema - PrepTEC')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/gerenciarSistema.css">
    <link rel="stylesheet" href="/css/readpages.css">
</head>
<body>
    <!--Container Parte 1 - Boas Vindas-->
        <div class="container-fluid" id="d-gs-part1-container">

            <!--Row - 1 Col-->
                <div class="row row-cols-1">

                    <!--Coluna A - Titulo-->
                        <div class="col" id="d-gs-part1-titleCol">

                            <!--Titulo Principal-->
                                <h2 id="txt-gs-part1-titleCol-title">Boas vindas ao sistema!</h2>
                            <!--Fim do Titulo Principal-->

                            <!--Texto Explicativo Principal-->
                                <p id="txt-gs-part1-titleCol-text">
                                    Escolha uma das opções abaixo para gerenciar funções 
                                    específicas do <br> site ou gerenciar os estudantes que 
                                    estão presentes por aqui!
                                </p>
                            <!--Fim do Texto Explicativo Principal-->

                        </div>
                    <!--Fim da Coluna A-->

                    <!--Coluna B - Cards-->
                        <div class="col" id="d-gs-part1-cardCol">

                            <!--Row - 3 Colunas-->
                                <div class="row row-cols-3">

                                    <!--Card Gerenciar Estudante-->
                                        <div class="col d-gs-part1-cardTemplate" id="d-gs-part1-cardTemplate-1">

                                            <!--Card Header-->
                                                <div class="d-gs-part1-cardTemplate-header">
                                                    <h2 class="d-template-center-vertAndHori" id="txt-gs-part1-cardTemplate-title">Gerenciar Estudante</h2>
                                                </div>
                                            <!--Fim do Card Header-->

                                            <!--Card Body-->
                                                <div id="d-gs-part1-cardTemplate-body">
                                                    <!--Texto Explicativo Card-->
                                                        <p class="d-template-center-hori" id="txt-gs-part1-cardTemplate-text">
                                                            Clique aqui para <br>gerenciar 
                                                            os estudantes cadastrados!
                                                        </p>
                                                    <!--Fim do Texto Explicativo Card-->

                                                    <!--Botão Card-->
                                                        <button class="d-template-center-hori" id="btn-gs-part1-cardTemplate-button" onclick="window.location='/aluno/listar'">
                                                            <!--Texto-->
                                                                <a href="/aluno/listar" id="txt-gs-part1-cardTemplate-button-text">Acessar</a>
                                                            <!--Icon-->
                                                                <img src="img/setaAzul.png" id="icon-gs-part1-cardTemplete-button-icon">
                                                        </button>
                                                    <!--Fim do Botão Card-->
                                                </div>
                                            <!--Fim do Card Body-->

                                        </div>
                                    <!--Fim do Card Gerenciar Estudante-->

                                    <!--Card Questionario Vocacional--> 
                                        <div class="col d-gs-part1-cardTemplate" id="d-gs-part1-cardTemplate-2">

                                            <!--Card Header-->
                                                <div class="d-gs-part1-cardTemplate-header-2">
                                                    <h2 class="d-template-center-vertAndHori" id="txt-gs-part1-cardTemplate-title">Questionário<br>Vocacional</h2>
                                                </div>
                                            <!--Fim do Card Header-->

                                            <!--Card Body-->
                                                <div id="d-gs-part1-cardTemplate-body">

                                                    <!--Texto Explicativo Card-->
                                                        <p class="d-template-center-hori" id="txt-gs-part1-cardTemplate-text">
                                                            Clique aqui e gerencie as 
                                                            perguntas cadastradas do
                                                            questionário vocacional!
                                                        </p>
                                                    <!--Fim do Texto Explicativo Card-->

                                                    <!--Botão Card-->
                                                        <button class="d-template-center-hori" id="btn-gs-part1-cardTemplate-button" onclick="window.location='/questionariovocacional/listar'">
                                                            <!--Texto-->
                                                                <a href="/questionariovocacional/listar" id="txt-gs-part1-cardTemplate-button-text">Acessar</a>
                                                            <!--Icon-->
                                                                <img src="img/setaAzul.png" id="icon-gs-part1-cardTemplete-button-icon">
                                                        </button>
                                                    <!--Fim do Botão Card-->
                                                </div>
                                            <!--Fim do Card Body-->

                                        </div>
                                    <!--Fim do Card Questionario Vocacional-->

                                    <!--Card Simulado-->
                                        <div class="col d-gs-part1-cardTemplate" id="d-gs-part1-cardTemplate-3">

                                            <!--Card Header-->
                                                <div class="d-gs-part1-cardTemplate-header">
                                                    <h2 class="d-template-center-vertAndHori" id="txt-gs-part1-cardTemplate-title">Simulado</h2>
                                                </div>
                                            <!--Fim do Card Header-->

                                            <!--Card Body-->
                                                <div id="d-gs-part1-cardTemplate-body">

                                                    <!--Texto Explicativo Card-->
                                                        <p class="d-template-center-hori" id="txt-gs-part1-cardTemplate-text">
                                                            Clique aqui para<br> administrar as questões <br> do simulado!
                                                        </p>
                                                    <!--Fim do Texto Explicativo Card-->

                                                    <!--Botão Card-->
                                                        <button class="d-template-center-hori" id="btn-gs-part1-cardTemplate-button" onclick="window.location='/simulado/listar'">
                                                            <!--Texto-->
                                                                <a href="/simulado/listar" id="txt-gs-part1-cardTemplate-button-text">Acessar</a>
                                                            <!--Icon-->
                                                                <img src="img/setaAzul.png" id="icon-gs-part1-cardTemplete-button-icon">
                                                        </button>
                                                    <!--Fim do Botão Card-->

                                                </div>
                                            <!--Fim do Card Body-->

                                        </div>
                                    <!--Fim do Card Simulado-->

                                </div>
                            <!--Fim do Row-->

                        </div>
                    <!--Fim da Coluna B-->

                </div>
            <!--Fim do Row-->

        </div>
    <!--Fim do Container Parte 1-->

    <!-- Título da página -->
        <center>
            <div id="d-estudante-listar">
                <p id="d-estudante-listar-p"> Estudantes Registrados </p>
            </div>
        </center>
    <!-- Fim do título da página -->

    <!-- Container de Listagem do Questionário Vocacional -->
        <div class="container" id="c-read-quest-voc">

            <!-- Barra de pesquisa -->
                <div class="row" id="d-search">

                    <!-- Ícone da barra de pesquisa -->
                        <div class="col" id="d-search-bar-icon">
                            <ion-icon name="search-circle-outline" id="d-search-bar-ion-icon"></ion-icon>
                        </div>
                    <!-- Fim do ícone da barra de pesquisa -->

                    <!-- Input para pesquisar -->
                        <div class="col" id="d-search-bar">
                            <input type="text" name="" id="d-search-bar-input" placeholder="&nbsp;&nbsp; Pesquisar">
                        </div>
                    <!-- Fim do input para pesquisar -->
                    
                    <!-- Botão de pesquisar -->
                        <div class="col-1" id="d-search-button">
                            <button type="submit" id="d-search-button-btn" class="btn"> Buscar </button>
                        </div>
                    <!-- Fim do botão para pesquisar -->

                </div>
            <!-- Fim da barra de pesquisa -->

            <!-- Tabela de Estudantes Registradis -->
                <center>
                    <div class="row" id="d-estudantes-table">
                        
                        <table id="table-estudantes-voc" class="table-striped">
                            <tr id="table-estudantes-title">
                                <th id="table-quest-voc-id">ID</th>
                                <th id="table-quest-voc-perg">Usuário</th>
                                <th id="table-quest-voc-intMult"> E-mail</th>
                                <th id="table-quest-voc-funcoes">Funções</th>
                            </tr>
                            @foreach($Estudantes as $Estudante)
                                <tr id="table-estudante-data">
                                    <td id="table-estudante-linha"> {{$Estudante->id_usuario}} </td>
                                    <td id="table-estudante-linha-nome"> {{$Estudante->nome_usuario}}</td>
                                    <td id="table-estudante-linha"> {{$Estudante->email_usuario}} </td>
                                    <td id="table-estudante-linha-func" class="align-middle">
                                        <a href="/estudante/editar/{{$Estudante->id_usuario}}"> <p id="table-estudantes-func"> Editar <ion-icon name="create-outline" id="table-estudantes-func-icon"></ion-icon> </p> </a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>            

                    </div>
                </center>
            <!-- Fim da Tabela de Perguntas Registradas -->

            <!-- Paginação de Estudantes -->
                <div class="col" id="d-paginate-estudante">
                    <center>
                        {{$Estudantes->links()}}
                    </center>
                </div>
            <!-- Fim da Paginação -->

            <button class="d-template-center-hori" id="btn-gs-part2-verMais"><a id="txt-gs-part2-verMais" href="">Ver Mais</a></button>

        </div>
    <!-- Fim do Container de Listagem de Estudantes Vocacional -->
</body>
</html>
@endsection