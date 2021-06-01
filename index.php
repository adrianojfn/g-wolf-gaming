<?php
// Inicia a sessão
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonte de texto -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/25c0615b0a.js" crossorigin="anonymous"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="./css/style.css">
    <!-- Título da página -->
    <title>G-Wolf Gaming</title>
</head>
<body>
    <!-- Cabeçalho da página -->
    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-black">
            <div class="container-fluid py-0">
                <a class="navbar-brand text-white p-0" href="./index.php">
                    <img id="logo" src="./assets/logo-sem-texto.png" alt="G-Wolf Gaming">
                    G-Wolf Gaming
                </a>
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite"> <!-- Botão para telas menores -->
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSite">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="./index.php">Página Inicial</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./forum.php">Fórum</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./avaliacoes.html">Avaliações</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./equipe.html">Equipe</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="./contato.php">Contato</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Carousel -->
        <div class="carousel slide" id="carouselSite" data-ride="carousel">
            <!-- Indicadores de imagem -->
            <ol class="carousel-indicators">
                <li data-target="#carouselSite" data-slide-to="0" class="active"></li>
                <li data-target="#carouselSite" data-slide-to="1"></li>
                <li data-target="#carouselSite" data-slide-to="2"></li>
                <li data-target="#carouselSite" data-slide-to="3"></li>
            </ol>

            <!-- Imagens -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="img-fluid d-block" src="./assets/banner-dw-1.png" alt="Death Wisdom">
                </div>
                <div class="carousel-item">
                    <img class="img-fluid d-block" src="./assets/banner-dw-2.png" alt="Bosses Death Wisdom">
                </div>
                <div class="carousel-item">
                    <img class="img-fluid d-block" src="./assets/banner-dw-3.png" alt="Demo Disponível">
                    <!-- Legenda imagem com link para download do jogo -->
                    <div class="carousel-caption d-none d-md-block">
                        <a href="#" class="btn btn-outline-success"><i class="fas fa-download mr-2"></i>Download</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="img-fluid d-block" src="./assets/banner-dw-4.png" alt="Link Fórum">
                </div>
            </div>
            <!-- Controle de imagem -->
            <a class="carousel-control-prev" href="#carouselSite" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselSite" role="button" data-slide="next">
                <span class="carousel-control-next-icon"></span>
                <span class="sr-only">Próximo</span>
            </a>
        </div>
    </header>

    <main>
        <div class="container">
            <!-- Mensagem de boas-vindas -->
            <div class="row">
                <div class="col-12 text-center my-4">
                    <h1 class="display-3">Olá,</h1>
                    <p class="font-size-maior">Seja bem vindo!</p>
                </div>
            </div>
            <!-- Scrollspy -->
            <div class="row mb-5">
                <div class="col-sm-6 col-md-4 mb-3">
                    <nav class="navbar navbar-light bg-light" id="navbarVertical">
                        <nav class="nav nav-pills flex-column">
                            <a class="nav-link" href="#item1">Sobre</a>
                            <a class="nav-link" href="#item2">Missão</a>
                            <a class="nav-link" href="#item3">Visão</a>
                            <a class="nav-link" href="#item4">Valores</a>
                        </nav>
                    </nav>
                </div>
                <div class="col-sm-6 col-md-8">
                    <div class="scrollspySobre" data-spy="scroll" data-target="#navbarVertical" data-offset="0">
                        <h4 id="item1">Sobre</h4>
                        <p>A G-Wolf Gaming é uma empresa de desenvolvimento de jogos e sites fundada em 2020 por um trio de amigos, a princípio com o objetivo de trazer as notícias mais recentes relacionadas ao mundo dos jogos, buscávamos criar uma plataforma de disseminação de notícias com transparência e imparcialidade, porém, conforme o tempo passou a paixão pelos jogos que já era eloquente aumentou, com isso veio a gana de desenvolver seus próprios games. O primeiro projeto da empresa veio em conjunto ao seu novo site, abandono de um antigo membro e adição de mais 3 membros na equipe, assim sendo um time de 5. Death Wisdom era o nome, um game plataforma 2D, feito 100% pela equipe de 5 desenvolvedores, utilizando a plataforma GameMaker Studio 2 em sua programação.</p>
                        
                        <h4 id="item2">Missão</h4>
                        <p>Nós da G-Wolf Gaming somos apaixonados por tecnologia e jogos eletrônicos. Desde sempre ficamos deslumbrados com a ideia de poder vivenciar e explorar outros mundos, novas histórias, narrativas e até mesmo termos a oportunidade de sermos heróis do passado, presente e de futuros distantes. A transmissão de sentimentos através dos jogos é indescritível e é algo que nos estimula cada vez mais a trabalhar, continuar criando e trazendo emoções aos nossos jogadores.</p>
                        
                        <h4 id="item3">Visão</h4>
                        <p>O nosso principal objetivo é de agregar e ajudar a expandir o mercado de jogos no Brasil. Temos muito amor a comunidade dos jogos e a comunidade de desenvolvedores independentes em nosso país, embora seja uma das áreas que mais crescem no Brasil hoje, os desenvolvedores juntamente com as suas obras raramente recebem a atenção e apoios merecidos em seus projetos. Queremos mudar isso e estamos trabalhando duro com nossos colaboradores para atingir esse objetivo ambicioso.</p>

                        <h4 id="item4">Valores</h4>
                        <p>Devemos ter responsabilidade e disposição com nosso trabalho, esses dois ingredientes são indispensáveis no nosso processo criativo até o desenvolvimento das obras de nossa empresa, juntamente com o pensamento de inovação, devemos criar universos únicos, histórias envolventes e desafios que intriguem a todos que apertem o botão de “Novo Jogo”.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Jumbotron apresentando o jogo (futuramente Death Wisdom) -->
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="display-4">Death Wisdom</h1>
                        <p class="lead">Death Wisdom é um jogo eletrônico 2D de ação-suspense desenvolvido pela G-Wolf Gaming. É o primeiro jogo da empresa e foi lançado em 15 de junho de 2021 exclusivamente para Windows.</p>
                        <hr>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <!-- Botões para conteúdo sobre o jogo -->
                        <ul class="nav nav-pills justify-content-center mb-4" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="nav-pills-01" data-toggle="pill" href="#trailer-game">Trailer</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="nav-pills-02" data-toggle="pill" href="#about-game">Sobre</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="nav-pills-03" data-toggle="pill" href="#forum-game">Fórum</a>
                            </li>
                        </ul>
                        <!-- Conteúdo sobre o jogo (trailer, sobre e fórum) -->
                        <div class="tab-content" id="nav-pills-content">
                            <!-- Trailer (por enquanto genérico) -->
                            <div class="tab-pane fade show active" id="trailer-game" role="tabpanel">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="embed-responsive embed-responsive-16by9 mb-4">
                                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/W2Wnvvj33Wo"></iframe>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="font-size-maior text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis tempore illo beatae labore itaque deleniti, facilis modi temporibus eius ipsam corporis repellendus assumenda omnis qui natus dignissimos aut consequatur! Hic?</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Sobre + call to action para o download do game -->
                            <div class="tab-pane fade" id="about-game" role="tabpanel">
                                <div class="row">
                                    <div class="col-sm-12 text-center">
                                        <p class="font-size-maior">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt tenetur distinctio, officiis dignissimos provident, quibusdam iure sequi, voluptates quae laboriosam rerum. Sed iure praesentium dignissimos magni nemo at cumque eum?</p>
                                        <a href="#" class="btn btn-outline-success"><i class="fas fa-download mr-2"></i>Download</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Fórum -->
                            <div class="tab-pane fade" id="forum-game" role="tabpanel">
                                <div class="row">
                                    <div class="col-sm-12 text-center">
                                        <p class="font-size-maior">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque corporis nam maxime, delectus distinctio possimus deleniti quia ipsum, quaerat esse fugiat sapiente id provident officiis eveniet magni, sint veniam voluptatibus.</p>
                                        <a href="./forum.php" class="btn btn-outline-info ">Quero participar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- E-mail marketing através de notícias sobre o desenvolvimento dos jogos -->
        <div class="container" id="email-mkt">
            <div class="row">
                <div class="col-12 text-center mb-4">
                    <h1 class="display-4">Atenção!</h1>
                    <p class="font-size-maior">Gostaria de receber as notícias e até atualizações antecipadamente em seu e-mail? Informe-o abaixo e fique sempre ligado nas novidades de Death Wisdom e mais!</p>
                </div>
            </div>
            <!-- Form recebendo nome e e-mail do usuário -->
            <div class="row justify-content-center mb-5">
                <div class="col-sm-12 col-md-10 col-lg-8">
                    <form action="./php/form_email_mkt.php" method="POST" enctype="multipart/form-data">
                        <div class="form-row">
                            <div class="form-group col-sm-6">
                                <label for="inputName">Nome</label>
                                <input type="text" class="form-control" name="nome" id="inputName" placeholder="Digite aqui">
                            </div>

                            <div class="form-group col-sm-6">
                                <label for="inputEmail">E-mail</label>
                                <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Digite aqui">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary col-sm-12">Enviar</button>

                        <!-- Mensagem de sucesso ou erro para o formulário vindo direto do arquivo form_email_mkt.php --> 
                        <?php
                            if (isset($_SESSION['msg'])) {
                            echo $_SESSION['msg'];
                            unset ($_SESSION['msg']);
                            }
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <!-- Rodapé da página com links da navbar (para não precisar rodar até em cima novamente) e redes sociais -->
    <footer>
        <div class="container-fluid">
            <div class="row">
                <!-- Linha para dividir o rodapé do e-mail marketing -->
                <div class="col-12 mb-3">
                    <hr>
                </div>

                <div class="col-sm-6 mb-4 text-center">
                    <h3>Menu</h3>
                    <div class="list-group">
                        <a class="list-group-item list-group-item-action list-group-item-primary" href="./forum.php">Fórum</a>
                        <a class="list-group-item list-group-item-action list-group-item-success" href="./avaliacoes.html">Avaliações</a>
                        <a class="list-group-item list-group-item-action list-group-item-primary" href="./equipe.html">Equipe</a>
                        <a class="list-group-item list-group-item-action list-group-item-success" href="./contato.php">Contato</a>
                    </div>
                </div>

                <div class="col-sm-6 mb-1 text-center">
                    <h3>Social</h3>
                    <div class="btn-group-vertical btn-block btn-group-lg" role="group">
                        <a class="btn btn-outline-warning" href="https://www.instagram.com/oficialgwolf/" target="_blank"><i class="fab fa-instagram-square mr-1"></i>Instagram</a>
                        <a class="btn btn-outline-primary" href="https://twitter.com/oficialgwolf" target="_blank"><i class="fab fa-twitter-square mr-1"></i>Twitter</a>
                        <a class="btn btn-outline-dark" href="https://github.com/oficialgwolf" target="_blank"><i class="fab fa-github-square mr-1"></i>GitHub</a>
                    </div>
                </div>

                <div class="col-12 text-center bg-black pt-3 mt-4">
                    <p class="font-size-maior text-white">Copyright © 2021 - G-Wolf Gaming</p>
                    <p class="font-size-maior text-white">Todos os direitos reservados.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>