@extends('layouts.mainNavbarOnly')

@section('title', 'Listar Teste Vocacional - PrepTEC')

@section('content')

<!--Importação CSS e JS-->
    <link rel="stylesheet" href="/css/readpages.css">
<!--Fim da Importação CSS e JS-->

<!-- Título da página -->
<center>
    <div id="d-quest-listar">
        <p id="d-quest-listar-p"> Questionário Vocacional </p>
    </div>
</center>
<!-- Fim do título da página -->

<!-- Container de Listagem do Questionário Vocacional -->
<div class="container" id="c-read-quest-voc">


    <!-- Linha de Paginação -->
    <div class="row" id="d-paginate-quest-voc">

        <div class="col" id="d-paginate-previous">
            <button id="d-paginate-previous-btn" onclick="window.location='{{ $quests->previousPageUrl() }}'" class="btn"> Anterior </button>
        </div>

        <div class="col" id="d-paginate-next">
            <button id="d-paginate-next-btn" onclick="window.location='{{ $quests->nextPageUrl() }}'" class="btn"> Próximo </button>            
        </div>

    </div>
    <!-- Fim da linha de páginação -->

    <!-- Tabela de Perguntas Registradas -->
    <center>
        <div class="row" id="d-quest-voc-table">
            
            <table id="table-quest-voc" class="table-striped">
                <tr id="table-quest-voc-title">
                    <th id="table-quest-voc-id">ID</th>
                    <th id="table-quest-voc-perg">Pergunta</th>
                    <th id="table-quest-voc-intMult"> Inteligência Múltipla</th>
                    <th id="table-quest-voc-funcoes">Funções</th>
                </tr>
                @foreach($quests as $quest)
                <tr id="table-quest-voc-data-{{$quest->id_pergunta}}">
                    <td id="table-quest-voc-linha"> {{$quest->id_pergunta}} </td>
                    <td id="table-quest-voc-linha"> {{$quest->txt_perg}} </td>
                    <td id="table-quest-voc-linha-intMult"> 

                    <!-- Importa o Model "Tipo Inteligencia" onde o o ID do tipo está presente na pergunta, apresenta o nome -->
                    {{ \App\Models\TipoInteligencia::find($quest->id_TipoInteligencia)->nome_inteligencia }}

                    </td>
                    <td id="table-quest-voc-linha-func">
                        <center>
                            <a name="edit" class="btn-template-icon" href="#Popup-Excl-{{$quest->id_pergunta}}">
                                <button name="delete" class="btn-template-icon" type="submit">
                                    <ion-icon name="trash-outline" id="img-template-icons"></ion-icon>
                                </button>
                            </a>

                            <!-- Popup de Exclusão -->
                            <div id="Popup-Excl-{{$quest->id_pergunta}}" class="overlay">
                                <div class="popup">
                                    <a class="close" href="#">&times;</a>
                                    <div class="row">
                                        <!-- Formário de cadastro -->
                                        <div class="col" id="Form-Excl">
                                            <!-- Icone + título do formulário -->
                                            <center>
                                                <ion-icon name="trash-outline" id="Trash-Icon"></ion-icon> <h1 id="Popup-Excl_Title"> Excluir </h1>
                                                <form action="/excluir/{{$quest->id_pergunta}}" method="POST" id="table-quest-voc-form-excl-{{$quest->id_pergunta}}">
                                                    @csrf
                                                    @method('delete')
                                                    <input type="text" value="{{$quest->id_pergunta}}" name="id_pergunta" hidden>                
                                                    
                                                    <p id="Form-Excl-p"> Deseja mesmo excluir a questão {{$quest->id_pergunta}}? </p>
                                                    <button class="btn" type="submit" id="Excl-form-btn"> Confirmar </button>
                                                </form>
                                            </center>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Fim do Popup de Exclusão -->

                            <!--Botão Editar-->
                            <a name="edit" class="btn-template-icon" href="{{url("/quest/editar/$quest->id_pergunta")}}">
                                <ion-icon name="create-outline" id="img-template-icons"></ion-icon>
                            </a>
                            <!--Fim do Botão Editar-->
                        </center>
                    </td>
                </tr>
                @endforeach
            </table>

        </div>
    </center>
    <!-- Fim da Tabela de Perguntas Registradas -->

</div>
<!-- Fim do Container de Listagem do Questionário Vocacional -->
@endsection