<html>
    <head>
         <!--Configuração da Página-->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>@yield('title')</title>
        <!--Fim da Configuração da Página-->

        <!--Importação do Bootstrap-->
            @vite([
                'resources/js/app.js',
                'resources/css/app.css',
                'node_modules/bootstrap/dist/css/bootstrap.min.css',
                'node_modules/bootstrap/dist/js/bootstrap.bundle.js'
            ])
        <!--Fim da Importação do Bootstrap-->

        <!--Importação CSS e JS-->
        <link rel="stylesheet" href="/css/main.css">
        <link rel="stylesheet" href="/css/loginAndCreateAccount.css">
        <!--Fim da Importação CSS e JS-->

        <!-- Ícone na barra de endereço do site -->
        <link rel="shortcut icon" type="imagex/png" href="/img/icon/Logo_Alter_No-Traces-Icon.ico">
    </head>
 
    <body>
         <!-- parte: navbar -->
         <nav class="navbar navbar-dark" id="navbar-preptec">

                <!-- logo -->
                <a class="navbar-brand" href="/"> <img src="/img/Logo_Alter_No-Traces.png" alt="Logo PrepTec" id="logo" width="160"></a>

                <div id="div_group-prof-picture-menu">
                    @php
                    use Illuminate\Support\Facades\Session;
                    use App\Models\Usuario;

                    $conta = array();
                    if(Session::has('loginId')){

                        $conta = Usuario::where('id_usuario', '=', Session::get('loginId'))->first();

                    }

                    @endphp

                    @if(!empty($conta->fotoUsuario))
                    <!--Imagem de Perfil-->
                    <a href="/minhaconta"> <img src="{{ asset('storage/users/'. $conta->fotoUsuario) }}" id="img-profile"> </a>
                    <!--Fim da Imagem de Perfil-->
                    
                    @else

                    <!-- Botão de Login (Caso não esteja logado) 
                    <a href="#Popup-Sign" id="login-btn">    
                        <div class="container" id="Login">
                            <ion-icon name="person-outline" id="Icon-Login"></ion-icon> Cadastre-se 
                        </div>
                    </a>-->

                    <a href="#popup-CA-template-bg">
                        <button type="button" id="btn-cadastrar" class="btn btn-info" onclick="window.location='#popup-CA-template-bg'">Cadastre-se</button>
                    </a>

                    <!-- Fim do Botão de Login -->

                    @endif
                    
                    <!-- button hamburguer -->
                    <button class="navbar-toggler" id="btn-hamburguer" type="button" data-bs-toggle="offcanvas" data-bs-target="#menu-preptec" aria-controls="menu-preptec" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <!-- fim do botão hamburguer -->
                </div>

                <!-- menu lateral -->
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="menu-preptec" aria-labelledby="offcanvasDarkNavbarLabel">
                        
                        <!-- header -->
                            <div class="offcanvas-header" id="menu-header" style="box-shadow: 0px 1vh 1vh #214a7c;">
                                <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">PrepTec</h5>

                                <!-- botão de fechar o menu lateral -->
                                <button type="button" class="btn-close" id="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                        <!-- fim do header -->

                        <!-- body -->
                            <div class="offcanvas-body" id="menu-body">
                                
                                <!-- animação -->
                                    <div id="background-animation">

                                        <!-- esferas da animação -->
                                            <div class="circles" id="circle1"></div>
                            
                                            <div class="circles" id="circle2"></div>
                                        
                                            <div class="circles" id="circle3"></div>
                            
                                            <div class="circles" id="circle4"></div>                
                            
                                            <div class="circles" id="circle5"></div>
                            
                                            <div class="circles" id="circle6"></div>
                            
                                            <div class="circles" id="circle7"></div>
                            
                                            <div class="circles" id="circle8"></div>
                            
                                            <div class="circles" id="circle9"></div> 
                                        <!-- fim das esferas -->

                                        <!-- itens do menu -->
                                            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3" id="menu-itens">

                                                <!-- home -->
                                                <li class="nav-item">
                                                    <a class="nav-link" id="nav-link" href="/">
                                                        <img src="\img\home_icon.png" id="icon-menu"/> &nbsp;
                                                        Home
                                                    </a>
                                                </li>

                                                <!-- área do estudante -->
                                                <li class="nav-item">
                                                    <a class="nav-link" id="nav-link" href="/areadoaluno"><img src="\img\hat_icon.png" id="icon-menu"/> &nbsp;Área de Estudo</a>
                                                </li>
                                                
                                                <!-- questionário vocacional -->
                                                <li class="nav-item">
                                                    <a class="nav-link" id="nav-link" href="/questionariovocacional"><img src="\img\lampada-icon.png" id="icon-menu"/> &nbsp;Questionário Vocacional</a>
                                                </li>

                                                <!-- informações do vestibulinho -->
                                                <li class="nav-item">
                                                    <a class="nav-link" id="nav-link" href="/vestibulinho">
                                                        <img src="\img\info_icon.png" id="icon-menu"/> &nbsp;
                                                        Informações do Vestibulinho
                                                    </a>
                                                </li>

                                                <!-- Minha Conta -->
                                                <li class="nav-item">                
                                                    <a class="nav-link" id="nav-link" href="/minhaconta"><img src="\img\perifl-icon.png" id="icon-menu"/> &nbsp; Minha Conta</a>
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
        <!-- Fim da navbar -->

        <main id="PrepTEC-Content">
            
            @yield('content')

        </main>

        <!--Popup Cadastro-->
        <div id="popup-CA-template-bg" class="overlay">

        <!--Popup-->
            <div class="d-template-center-vertAndHori" id="popup-logCA-template">

                <!--Botão Fechar-->
                    <a class="close" id="btn-popup-logCA-template-close" href="#">&times;</a>
                <!--Fim do Botão Fechar-->

                <!--Row-->
                    <div class="row row-cols-2">
                            
                        <!--Criar Conta A - Parte esquerda (Banner)-->
                            <div class="col" id="d-popup-logCA-template-col-banner">
                                <img src="/img/Banner-CA.png" alt="" id="img-popup-logCA-template-banner">
                            </div>
                        <!--Fim do Criar Conta A-->

                        <!--Criar Conta B - Parte Direita (Formulário)-->
                            <div class="col" id="d-popup-logCA-template-col">

                                <!--Titulo Login-->
                                    <div class="row row-cols-2" id="d-popup-logCA-template-row-title">

                                        <div class="col d-template-center-vert" id="d-popup-logCA-template-col-icon">
                                            <ion-icon name="person-circle-outline" id="icon-popup-logCA-template-personIcon"></ion-icon>
                                        </div>

                                        <div class="col d-template-center-vert" id="d-popup-logCA-template-col-title">
                                            <h1 class="d-template-center-hori" id="txt-popup-logCA-template-title">
                                                CADASTRE-SE
                                            </h1>
                                        </div>

                                    </div>
                                <!--Fim do Titulo Login-->

                                <!--Formulario de Cadastro-->
                                
                                    <form id="d-popup-logCA-template-form" method="POST" action="{{'/usuario/salvar'}}" enctype="multipart/form-data">
                                        @if(Session::has('Sucesso'))
                                            <div class="alert alert-success">{{Session::get('Sucesso')}}</div>
                                        @endif
                                        @if(Session::has('Falha'))
                                            <div class="alert alert-danger">{{Session::get('Falha')}}</div>
                                        @endif

                                        @csrf

                                        <!--Primeira Etapa-->
                                            <div id="prim-etapa">
                                                <!--Input Usuário-->
                                                    <div class="mb-3">
                                                        <label for="usuario" class="form-label"> Nome: </label>
                                                        <input required type="text" class="form-control" id="usuario" name="nome_usuario" value="{{old('nome_usuario')}}">
                                                        <span class="text-danger"> @error('nome_usuario') {{$message}} @enderror</span>
                                                    </div>
                                                <!--Fim do Input Usuário-->

                                                <!--Inpu Email-->
                                                    <div class="mb-3">
                                                        <label for="email" class="form-label"> Email: </label>
                                                        <input type="email" class="form-control" id="email" placeholder="exemplo@gmail.com" name="email_usuario" value="{{old('email_usuario')}}">
                                                        <span class="text-danger"> @error('email_usuario') {{$message}} @enderror</span>
                                                    </div>
                                                <!--Fim do Input Email-->

                                                <!--Input Senha-->
                                                    <div class="mb-3">
                                                        <label for="senha" class="form-label"> Senha: </label>
                                                        <input type="password" class="form-control" id="password" placeholder="********" name="senha_usuario" value="{{old('senha_usuario')}}">
                                                        <span class="text-danger"> @error('senha_usuario') {{$message}} @enderror</span>
                                                    </div>
                                                <!--Fim do Input Senha-->

                                                <!--Botão proxima parte-->
                                                    <center>
                                                        <button class="btn btn-templeate-appearance d-template-center-hori" id="btn-popup-logCA-template" type="button" onclick="ProxFase()"> Próxima Etapa </button>
                                                        <p id="txt-popup-logCA-template-text-2">
                                                            Já possui uma conta?
                                                            <a href="#popup-log-template-bg" id="txt-popup-CA-login"> Faça login!</a>
                                                        </p>
                                                    </center>
                                                <!--Fim do Botão proxima parte-->
                                            </div>
                                        <!--Fim da Primeira Etapa-->

                                        <!-- Segunda Etapa do Formulário -->
                                            <div id="segun-etapa" style="display: none;">

                                                <center>
                                                    <!-- Input: Imagem -->
                                                    <div class="mb-3">
                                                        <img src="img/userIcon.png" width="70"> <br>
                                                        <label for="foto" class="form-label"> Envie uma foto! </label>
                                                        <input type="file" name="fotoUsuario" class="form-control" accept="image/*">
                                                    </div>


                                                    <button type="button" onclick="FaseAnterior()" id="btn-popup-CA-backForm"> Voltar a etapa anterior </button>
                                                </center>

                                                <!--Confirmar Criar Conta-->
                                                    <center>
                                                        <button class="btn btn-templeate-appearance d-template-center-hori" id="btn-popup-logCA-template" type="submit"> 
                                                                Cria conta
                                                        </button>
                                                        <p id="txt-popup-logCA-template-text-2">
                                                            Já possui uma conta?
                                                            <a href="#popup-log-template-bg" id="txt-popup-CA-login"> Faça login!</a>
                                                        </p>                                
                                                    </center>
                                                <!--Fim do Confirmar Criar Conta-->

                                            </div>
                                        <!--Fim da Segunda Etapa-->

                                    </form>
                                <!--Fim do Formulario de Cadastro-->

                            </div>
                        <!--Fim do Criar Conta B-->

                    </div>
                <!--Fim do Row-->

            </div>
        <!--Fim do Popup-->

        </div>
        <!--Fim do Popup Cadastro-->

        <!--Popup Login-->
        <div id="popup-log-template-bg" class="overlay">

        <!--Popup-->
            <div class="d-template-center-vertAndHori" id="popup-logCA-template">

                <!--Botão Fechar-->
                    <a class="close" id="btn-popup-logCA-template-close" href="#">&times;</a>
                <!--Fim do Botão Fechar-->

                <!--Row-->
                    <div class="row">

                        <!--Login A - Parte Esquerda (Banner)-->
                            <div class="col" id="d-popup-logCA-template-col-banner">
                                <img src="/img/Banner-LOG.png" alt="" id="img-popup-logCA-template-banner">
                            </div>
                        <!--Fim do Login A-->

                        <!--Login B - Parte Direira (Formulário)-->
                            <div class="col" id="d-popup-logCA-template-col">

                                    <!--Titulo Login-->
                                            <div class="row row-cols-2" id="d-popup-logCA-template-row-title">

                                                <div class="col d-template-center-vert" id="d-popup-logCA-template-col-icon">
                                                    <ion-icon name="person-circle-outline" id="icon-popup-logCA-template-personIcon"></ion-icon>
                                                </div>

                                                <div class="col d-template-center-vert" id="d-popup-logCA-template-col-title">
                                                    <h1 class="d-template-center-hori" id="txt-popup-logCA-template-title">
                                                        LOGIN
                                                    </h1>
                                                </div>

                                            </div>
                                    <!--Fim do Titulo Login-->
                                
                                    <!--Formulario de Login-->
                                        <form id="d-popup-logCA-template-form" action="{{'/usuario/minha_conta'}}" method="POST">
                                            @csrf

                                            <!--Input Email-->
                                                <div class="mb-3">
                                                    <label for="email" class="form-label">&nbsp;&nbsp;Email:</label>
                                                    <input type="email" class="form-control" id="email" placeholder="exemplo@gmail.com" name="email_usuario">
                                                    <span class="text-danger"> @error('email_usuario') {{$message}} @enderror</span>
                                                </div>
                                            <!--Fim do Input Email-->

                                            <!--Input Senha-->
                                                <div class="mb-3">
                                                    <label for="senha" class="form-label">&nbsp;&nbsp;Senha:</label>
                                                    <input type="password" class="form-control" id="password" placeholder="********" name="senha_usuario">
                                                    <span class="text-danger"> @error('senha_usuario') {{$message}} @enderror</span>
                                                </div>
                                            <!--Fim do Input Senha-->

                                            <p id="txt-popup-logCA-template-text">
                                                Ainda não possui uma conta?
                                                <a href="#popup-CA-template-bg" id="txt-popup-CA-login"> Criar Conta!</a>
                                            </p>

                                            <!--Confirmar Login-->
                                                <center>   
                                                    <button class="btn btn-templeate-appearance d-template-center-hori" id="btn-popup-logCA-template" type="submit">
                                                            Entrar
                                                    </button>
                                                </center>
                                            <!--Fim do Confirmar Login-->

                                        </form>
                                    <!--Fim do Formulario de Login-->

                            </div>
                        <!--Fim do Login B-->

                    </div>
                <!--Fim do Row-->

            </div>
        <!--Fim do Popup-->

        </div>
        <!--Fim do Popup Login-->



        <!-- Footer -->
        <!-- <footer class="footer">
            <div class="container">
                <div class="row align-items-start">
                    <div class="col text-start">
                        <h5>Desenvolvedores</h5>  
                        <div class="row justify-content-end">                   
                            <ul>
                                <li>Ana Luísa Augusto do Val</li>
                                <li><a href="">Erick Pereira Bastos</a></li>
                                <li><a href="">Giovana Santos de França</a></li>
                            </ul>
                        </div>  
                    </div>
                    <div class="col">
                        <h5>PrepTEC</h5>                       
                        <p>PrepTEC  é um website que oferece recursos gratuitos para auxiliar na preparação do Vestibulinho da ETEC.</p>
                    </div>
                    <div class="col footer-content">
                        <h5 class="text-end">Artes Utilizadas</h5>
                        <ul class="text-end">
                            <li>Icons8</li>
                            <li>upklyaak</li>
                            <li>pikisuperstar</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="copyright">
                PrepTEC &copy; <?php echo date('Y') ?>
            </div>
        </footer> -->
        <!-- Fim do Footer -->
        
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>

</html>

