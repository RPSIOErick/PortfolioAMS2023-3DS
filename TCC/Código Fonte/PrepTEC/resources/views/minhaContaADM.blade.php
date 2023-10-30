<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Minha Conta - PrepTEC</title>
        <!-- Links Bootstrap 5 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="/css/minhaContaADM.css">

        <!-- Ícone na barra de endereço do site -->
        <link rel="shortcut icon" type="imagex/png" href="/img/icon/Logo_Alter_No-Traces-Icon.ico">
    </head>

    <body>
    <div class="container-fluid">
            
            <!-- Sidebar esquerdo -->
                <div id="sidebar">

                    <!-- Dados do Usuário -->

                        <!-- Nome -->
                        <h2 id="username"> {{$conta->nome_usuario}} </h2> 

                        <!-- Foto de Perfil  -->
                        <div id="profile-picture">
                            <img src="{{ asset('storage/users/'. $conta->fotoUsuario) }}" alt="Foto do perfil">

                            <div id="icon">
                            <img src="/img/editar.png" alt="Editar ícone">
                            <!-- <img src="img\perfil-carlos.jpg"  alt="Editar ícone">  -->
                            </div>
                        </div>

                        <!-- Email -->  
                        <p id="email">
                            <span> {{$conta->email_usuario}} </span>
                        </p> 

                        <!-- Tipo de Acesso -->
                        <p id="tipoAcesso"> Tipo de acesso: 
                            <span> {{$conta->tipoUsuario}}</span>
                        </p> 
                    <!-- Fim dos Dados do Usuário -->

                    <!-- Menu -->
                    <div id="row-menu">

                        <a href="/sistema"><img src="/img/settings.png" id="icons-sidebar"/>Gerenciar Sistema</a>
        
                        <hr>
                        <!-- Sair da Conta -->
                        <a href="/usuario/logout"><img src="/img/exit.png"/>Sair da Conta</a>
                    </div>
                    <!-- Fim do menu sidebar -->
                         
                </div>
            <!-- Fim do Sidebar esquerdo -->

            <!-- Conteúdo Principal -->
                <div id="content">

                    <!-- navbar (parte que fica acima do formulário) -->
                        <div id="navbar-a">

                            <h4>Minha Conta</h4>

                            <!-- navbar menor (onde fica o perfil e menu) -->
                                <nav class="navbar navbar-dark fixed-top" id="sidebar-right">
                                    
                                    <!--Imagem de Perfil-->
                                    <img src="{{ asset('storage/users/'. $conta->fotoUsuario) }}" id="img-profile"></img>
                                    <!-- <img src="img\perfil-carlos.jpg" id="img-profile"></img> -->

                                    <!-- botão que abre o menu lateral -->
                                        <button class="navbar-toggler" id="btn-hamburguer" type="button" data-bs-toggle="offcanvas" data-bs-target="#menu-preptec" aria-controls="menu-preptec" aria-label="Toggle navigation">
                                            <span class="navbar-toggler-icon"></span>
                                        </button>
                                    <!-- fim do botão que abre o menu lateral -->

                                    <!-- menu lateral -->
                                        <div class="offcanvas offcanvas-end" tabindex="-1" id="menu-preptec" aria-labelledby="offcanvasDarkNavbarLabel">
                                            
                                            <!-- header -->
                                                <div class="offcanvas-header" id="menu-header">
                                                    <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">PrepTEC</h5>

                                                    <!-- botão de fechar o menu lateral -->
                                                    <button type="button" class="btn-close" id="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                                </div>
                                            <!-- fim do header -->

                                            <!-- body -->
                                                <div class="offcanvas-body" id="body-nav">
                                                    
                                                    <!-- animação -->
                                                        <div id="background-animation">

                                                            <!-- circulos da animação -->
                                                                <div class="circles" id="circle1"></div>
                                                
                                                                <div class="circles" id="circle2"></div>
                                                            
                                                                <div class="circles" id="circle3"></div>
                                                
                                                                <div class="circles" id="circle4"></div>                
                                                
                                                                <div class="circles" id="circle5"></div>
                                                
                                                                <div class="circles" id="circle6"></div>
                                                
                                                                <div class="circles" id="circle7"></div>
                                                
                                                                <div class="circles" id="circle8"></div>
                                                
                                                                <div class="circles" id="circle9"></div> 
                                                            <!-- fim das circulos -->

                                                            <!-- itens do menu -->
                                                                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3" id="menu-itens">

                                                                    <!-- home -->
                                                                    <li class="nav-item">
                                                                        <a class="nav-link" id="nav-link" href="/">
                                                                            <img src="/img/home_icon.png" id="icon-menu"/> &nbsp;
                                                                            Home
                                                                        </a>
                                                                    </li>

                                                                    <!-- área do estudante -->
                                                                    <li class="nav-item">
                                                                        <a class="nav-link" id="nav-link" href="/areadoaluno"><img src="/img/icon-hat.png" id="icon-menu"/> &nbsp;Área de Estudo</a>
                                                                    </li>
                                                                    
                                                                    <!-- questionário vocacional -->
                                                                    <li class="nav-item">
                                                                  <a class="nav-link" id="nav-link" href="/questionariovocacional"><img src="/img/lampada-icon.png" id="icon-menu"/> &nbsp;Questionário Vocacional</a>
                                                                    </li>

                                                                    <!-- informações do vestibulinho -->
                                                                    <li class="nav-item">
                                                                        <a class="nav-link" id="nav-link" href="/vestibulinho">
                                                                            <img src="/img/info.png" id="icon-menu"/> &nbsp; Informações do Vestibulinho</a>
                                                                    </li>

                                                                    <!-- Minha Conta -->
                                                                    <li class="nav-item">                
                                                                        <a class="nav-link" id="nav-link" href="/minhaconta"><img src="/img/perifl-icon.png" id="icon-menu"/> &nbsp; Minha Conta</a>
                                                                    </li>                            
                                                                </ul>    
                                                            <!-- fim do itens  -->     
                                                        </div>
                                                    <!-- fim da animação -->
                                                </div>
                                            <!-- fim do body -->
                                        </div>
                                    <!-- fim do menu -->
                                                  
                                </nav>
                            <!-- fim da navbar menor-->
                        </div>
                    <!-- Fim da navbar -->

                    <div class="row" id="row-form">

                        <!-- formulário para alterar os dados do estudante -->
                        <form id="form" action="/usuario/editar/{{$conta->id_usuario}}" method="POST">
                                @csrf
                                @method('put')

                                <input type="text" value="{{$conta->id_usuario}}" hidden>
            
                                <h5>DADOS DA CONTA</h5>            
            
                                <!-- nome do usuário -->
                                <div class="row">
                                    <div class="col d-flex align-items-center">
                                        <input name="nome_usuario" type="text" class="form-control" id="inputUser" value="{{$conta->nome_usuario}}">

                                        <button type="submit" class="btn btn-primary" id="btn-user">
                                            <img src="/img/icon_pencil.png" id="icon_pencil" alt="Editar">
                                        </button>
                                    </div>
                                </div>
                                <!-- fim do nome do usuário -->
                                    
                                <!-- email do usuário -->
                                <div class="row">
                                    <div class="col">
                                        <input name="email_usuario" type="email" class="form-control" id="inputEmail" value="{{$conta->email_usuario}}" readonly>
                                    </div>
                                </div>
                                <!-- fim do email do usuário -->
                                
                                <!-- senha do usuário -->
                                <div class="row">                               
                                    <div class="col d-flex align-items-center">
                                        <input name="senha_usuario" type="password" class="form-control" id="inputpassword" value="{{$conta->senha_usuario}}">

                                        <button type="submit" class="btn btn-primary" id="btn-password">
                                            <img src="/img/icon_pencil.png" id="icon_pencil" alt="Editar">
                                        <!--  <img src="img/icon_pencil.png" id="icon_pencil" alt="Editar"> -->
                                        </button>
                                    </div>
                                </div>
                                <!-- fim da senha do usuário -->

                            </form>
                        <!-- Fim do formulário -->

                        <!-- Parte Área do Aluno -->
                            <div class="col" id="col-areaAdmin">

                                <div id="areaAdmin">  
                                    <div class="col" id="col-img">
                                        <img src="/img/img_menino-ADM.png"/>
                                    </div>
                                    <div class="col" id="col-texto">
                                        <h5> GERENCEIE O SISTEMA </h5> 
                                    
                                        <p> Acesse um menu de opções que lhe permite gerenciar questões do simulado, perguntas do questionário vocacional e os estudantes cadastrados no sistema. </p>
                                        
                                        <a href="/sistema">Clique aqui para acessar o menu de Admin.</a>
                                    </div>                 
                                    
                                </div>

                            </div>      
                        <!-- Fim da Parte Área do Aluno -->
                    </div> 

                    <!-- Parte exluir conta -->
                        <div class="row" id="row-excluirConta">

                            <h4>Excluir Conta</h4>
                            
                            <!-- texto do excluir conta -->
                            <div class="col" id="col-textoExcluirConta">                                
                                <p>Se vc excluir sua conta, todas as suas informações e dados associados serão removidos permanentemente. </p>
                            </div>
                            <!-- fim do texto do excluir conta -->

                            <!-- botão excluir conta -->
                            <div class="col" id="col-buttonExcluirConta"> 
                                <button class="btn btn-secondary">Excluir sua conta</button>
                            </div>                       
                        </div> 
                    <!-- Fim da parte exluir conta -->

                </div>
            <!-- Fim do Conteúdo Principal -->
        </div>
    </body>
</html>