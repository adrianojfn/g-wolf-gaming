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
    <!-- Título da página -->
    <title>Contato</title>
</head>
<body>
    <!-- Cabeçalho da página -->
    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-black">
            <div class="container-fluid py-0">
                <a class="navbar-brand text-white p-0" href="./index.html">
                    <img id="logo" src="./assets/logo-sem-texto.png" alt="G-Wolf Gaming">
                    G-Wolf Gaming
                </a>
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite"> <!-- Botão para telas menores -->
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSite">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="./index.html">Página Inicial</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./forum.html">Fórum</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./avaliacoes.html">Avaliações</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./equipe.html">Equipe</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="./contato.html">Contato</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <!-- Jumbotron para a sessão de contato -->
        <div class="jumbotron jumbotron-fluid pt-4">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1>CONTATO</h1>
                        <hr>
                    </div>
                </div>
                <div class="row mb-4">
                    <!-- Formulário de contato sobre assuntos específicos -->
                    <div class="col-12 col-lg-8 col-xl-8 mb-5">
                        <h4 class="text-center">Formulário de Contato</h4>
                        <form action="./php/form_contato.php" method="POST" enctype="multipart/form-data">
                            <div class="form-row mt-4 border pt-2">
                                <!-- Mensagem de sucesso ou erro para o formulário vindo direto do arquivo form_contato.php -->
                                <?php
                                    if (isset($_SESSION['msg'])) {
                                    echo $_SESSION['msg'];
                                    unset ($_SESSION['msg']);
                                    }
                                ?>
                                <div class="form-group col-sm-12">
                                    <label for="nome">Nome:</label>
                                    <input class="form-control" name="nome" type="text" id="nome" placeholder="Nome e Sobrenome" required>
                                </div>
                                <div class="form-group col-sm-12">
                                    <label for="email">Email:</label>
                                    <input class="form-control" name="email" type="email" id="email" placeholder="Seu melhor e-mail" required>
                                </div>
                                <div class="form-group col-sm-12">
                                    <label for="telefone">Telefone:</label>
                                    <input class="form-control" name="telefone" type="tel" id="telefone" placeholder="(11) 94751-2985" required>
                                </div>
                                <div class="form-group col-sm-12">
                                    <label for="assunto">Assunto:</label>
                                    <select class="form-control" name="assunto" id="assunto">
                                        <option value="...">...</option>
                                        <option value="Sugestão">Sugestão</option>
                                        <option value="Reclamação">Reclamação</option>
                                        <option value="Trabalhe Conosco">Trabalhe Conosco</option>
                                        <option value="Outros">Outros</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-12">
                                    <label for="mensagem">Mensagem:</label>
                                    <textarea class="form-control" name="mensagem" id="mensagem" rows="3" maxlength="1000" placeholder="Sua mensagem com no máximo 1000 caracteres" required></textarea>
                                </div>
                                <!-- Botão para enviar os dados do formulário -->
                                <button type="submit" class="btn btn-primary col-sm-12">Enviar</button>
                            </div>
                        </form>
                    </div>
                    <!-- Contatos gerais (endereço, número etc) -->
                    <div class="col-12 col-lg-4 col-xl-4 text-center">
                        <h4 class="mb-3">Atendimentos Gerais</h4>
                        <div class="pt-4 text-muted">
                            <p class="text-dark">G-Wolf Gaming</p>
                            <p>Rua Guanabara Deschamps, 404</p>
                            <p>Jardim Dev - Python | SP</p>
                            <p>CEP: 04040-404</p>
                            <hr>
                            <p class="text-dark">Horário de atendimento</p>
                            <p>Seg. à Sex. das 10h às 18h</p>
                            <hr>
                            <p class="text-dark">Contato pelo WhatsApp</p>
                            <!-- Botão para ir direto a conversa com número específico -->
                            <p><a class="text-success" href="https://web.whatsapp.com/send?phone=5511963524366" target="_blank"><i class="fab fa-whatsapp mr-2"></i>(11) 96352-4366</a></p>
                            <hr>
                            <p class="text-dark">E-mail de atendimento</p>
                            <p>gwolfcontato@gmail.com</p>
                        </div>
                    </div>
                </div>
                <!-- API Google Maps para mostrar o endereço da empresa -->
                <div class="row mt-5">
                    <iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Etec%20Jardim%20%C3%82ngela&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                </div>
            </div>
        </div>
    </main>

    <!-- Rodapé da página com links da navbar (para não precisar rodar até em cima novamente) e redes sociais -->
    <footer>
        <div class="container-fluid">
            <div class="row">
                <!-- Linha para dividir o rodapé do restante do conteúdo -->
                <div class="col-12 mb-3">
                    <hr>
                </div>

                <div class="col-sm-6 mb-4 text-center">
                    <h3>Menu</h3>
                    <div class="list-group">
                        <a class="list-group-item list-group-item-action list-group-item-primary" href="./index.php">Página Inicial</a>
                        <a class="list-group-item list-group-item-action list-group-item-success" href="./forum.php">Fórum</a>
                        <a class="list-group-item list-group-item-action list-group-item-primary" href="./avaliacoes.html">Avaliações</a>
                        <a class="list-group-item list-group-item-action list-group-item-success" href="./equipe.html">Equipe</a>
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