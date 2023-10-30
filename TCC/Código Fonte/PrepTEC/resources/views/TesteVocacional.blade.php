@extends('layouts.main')

@section('title', 'Teste Vocacional - PrepTEC')

@section('content')


<!-- CSS da página -->
<link rel="stylesheet" href="/css/testeVocacional.css">

<!-- Banner inicial -->
<div class="container" id="container-banner">

    <div id="banner-fundo">

        <div class="row" id="row-banner">
            <!-- img para mobile -->
                <div class="col" id="col-img-mobile"> 
                    <img alt="img" src="\img\lampada-qv.png"/>
                </div> 
            <!-- fim da img para mobile -->

            <!-- coluna texto do banner-->
                <div class="col" id="col-one">
                    <h1> Questionário Vocacional</h1>
                    
                    <p> Realize um questionário vocacional e descubra a sua vocação com a ajuda das inteligências múltiplas! </p>
                    
                    <button class="btn btn-primary border-0" id="btn-tv" onclick="window.location.href = '/questionario/realizar'">Começar Questionário</button>
                </div>
            <!-- fim da coluna texto do banner-->

            <!-- img para desktop -->
                <div class="col" id="col-two"> 
                    <img id="img-banner" alt="img" src="\img\img-cerebro.png"/>
                </div>
            <!-- fim da img para desktop -->
        </div>
    </div>

    <!-- svg da onda -->
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path id="wave" fill="#132050" fill-opacity="1" 
                d="M0,32L40,80C80,128,160,224,240,240C320,256,400,192,480,160C560,128,640,128,720,160C800,192,880,256,960,256C1040,256,1120,192,1200,154.7C1280,117,1360,107,1400,101.3L1440,96L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z">
            </path>
        </svg> 
    <!-- fim da svg da onda -->

</div>

<!--Parte: Explicação das Inteligencias Multiplas -->
<div class="container" id="container-intelMult">

    <div class="row" id="row-IM">
        <!-- texto da inteligencia multipla -->
            <div class="col" id="col-one-IM">

                <h1>Inteligências Múltiplas</h1>

                <p>As inteligências múltiplas, conceito proposto pelo psicólogo Howard Gardner, redefinem a maneira como entendemos a capacidade cognitiva humana. Em vez de se limitarem a uma única medida de inteligência, as inteligências múltiplas reconhecem a diversidade de habilidades que os indivíduos podem possuir. Cada pessoa pode excelar em diferentes áreas, como linguística, lógico-matemática, musicalidade, habilidades interpessoais e intrapessoais, entre outras. Essa abordagem ampla valoriza a singularidade de cada indivíduo e encoraja uma educação mais personalizada, permitindo o desenvolvimento integral de suas potencialidades.</p>

            </div>
        <!-- fim do texto da inteligencia multipla -->

        <!-- img das inteligencias -->
            <div class="col" id="col-two-IM">
                <img src="\img\img-IM.png"/>
            </div>
        <!-- fim das img das inteligencias -->

        <!-- explicação das inteligências para mobile -->
            <div class="col" id="IM-mobile">
                <h1>Inteligências Múltiplas</h1>

                <img src="\img\img-IM.png"/>

                <p>As inteligências múltiplas, conceito proposto pelo psicólogo Howard Gardner, redefinem a maneira como entendemos a capacidade cognitiva humana. Em vez de se limitarem a uma única medida de inteligência, as inteligências múltiplas reconhecem a diversidade de habilidades que os indivíduos podem possuir. Cada pessoa pode excelar em diferentes áreas, como linguística, lógico-matemática, musicalidade, habilidades interpessoais e intrapessoais, entre outras. Essa abordagem ampla valoriza a singularidade de cada indivíduo e encoraja uma educação mais personalizada, permitindo o desenvolvimento integral de suas potencialidades.</p>

            </div>
        <!-- fim da explicação das inteligências para mobile -->
    </div>

</div>
<!-- fim da parte da explicação das inteligências -->


<!-- Parte: tipo das inteligências (accordion) -->
<div class="container" id="container-accordion">

    <div class="row" id="row-accordion">
        <h5>Tipos de Inteligências Múltiplas</h5>

        <!-- accordion -->
            <div class="accordion" id="accordionExample">

                <!-- Inteligência Linguística -->
                <div class="accordion-item">

                    <!-- Header Inteligência linguística -->
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Linguística
                            </button>
                        </h2>
                    <!-- Fim do header Inteligência linguística -->

                    <!-- Body Inteligência linguística (explicação) -->
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <!-- <strong>This is the first item's accordion body.</strong>  -->Este tipo de inteligência envolve a capacidade de se expressar através da linguagem, seja por meio da fala, da escrita ou até mesmo da leitura. As pessoas com essa inteligência conseguem se comunicar com clareza e expressar os seus pensamentos e emoções. 
                        </div>
                    </div>
                    <!-- Fim do body Inteligência linguística -->
                </div>

                <!-- Inteligência lógico-Matemática -->
                <div class="accordion-item">

                    <!-- Header Inteligência lógico-Matemática -->
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Lógico-Matemática
                            </button>
                        </h2>
                    <!-- Fim do header Inteligência lógico-Matemática -->

                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Essa inteligencia é associado à pessoas que possui facilidade em entender e resolver padrões lógicos, .... e .... As profissões que melhor se encaixa para essa inteligencia são: engenharia, ...
                        </div>
                    </div>
                </div>

                <!-- Inteligência Espacial -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Espacial
                        </button>
                    </h2>

                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            A inteligência espacial ... Geralmente pessoas associadas a essa inteligencia, possui X habilidade e 
                        </div>
                    </div>
                </div>

                <!-- Inteligência Musical -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Musical
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <!-- Conteúdo da inteligência Musical -->
                        </div>
                    </div>
                </div>

                <!-- Inteligência Intrapessoal -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            Intrapessoal
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <!-- Conteúdo da inteligência Intrapessoal -->
                        </div>
                    </div>
                </div>

                <!-- Inteligência Interpessoal -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            Interpessoal
                        </button>
                    </h2>
                    <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <!-- Conteúdo da inteligência Interpessoal -->
                        </div>
                    </div>
                </div>

                <!-- Inteligência Corporal-Cinestésica -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            Corporal-Cinestésica
                        </button>
                    </h2>
                    <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <!-- Conteúdo da inteligência Corporal-Cinestésica -->
                        </div>
                    </div>
                </div>

                <!-- Inteligência Naturalista -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                            Naturalista
                        </button>
                    </h2>
                    <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <!-- Conteúdo da inteligência Naturalista -->
                        </div>
                    </div>
                </div>

                <!-- Inteligência Existencial -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                            Existencial
                        </button>
                    </h2>
                    <div id="collapseNine" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <!-- Conteúdo da inteligência Naturalista -->
                        </div>
                    </div>
                </div>
            </div>
        <!-- Fim do accordion -->
    </div>

</div>
<!-- (Fim) Parte: tipo das inteligências (accordion) -->

<!-- Parte: dúvidas frequentes -->  
<div class="container" id="container-duvidas">

    <div class="row" id="row-duvidas">
        <h5>Dúvidas Frequentes</h5>

        <!-- pergunta 1 -->
        <div class="row" id="col-perguntas">

            <h6><img src="\img\perguntas-frequentes.png" width="40" alt="">&nbsp; O que é um Questionário Vocacional?</h6>  
            <p>O questionário vocacional pode ser definido como um questionário de orientação que lhe ajuda a identificar sua carreira ideal a partir da sua afinidade com cada carreira.</p> 
                                
        </div> 

        <!-- pergunta 2 -->
        <div class="row" id="col-perguntas-azul">

            <h6><img src="\img\perguntas-frequentes.png" width="40" alt="">&nbsp; Por que devo fazer o Questionário Vocacional?</h6>  
            <p>Fazer um questionário vocacional te garante mais chances de escolher sua carreia sem que você se arrependa depois!</p> 

        </div> 

        <!-- pergunta 3 -->
        <div class="row" id="col-perguntas">

            <h6><img src="\img\perguntas-frequentes.png" width="40" alt="">&nbsp; Como o questionário Vocacional pode me ajudar?</h6>  
            <p>O questionário vocacional pode te ajudar esclarecendo dúvidas sobre qual carreira seguir, além de abrir novas possibilidades para você!</p> 
                        
        </div> 
    </div>
    
</div>
<!-- (Fim) Parte: dúvidas frequentes -->

@endsection