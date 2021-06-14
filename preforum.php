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
    <title>Fórum</title>
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
                            <a class="nav-link" href="./preforum.php">Fórum</a>
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
    </header>

    <main>
        <!-- Jumbotron com login e cadastro visualmente dinâmico através de JavaScript -->
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <!-- Mensagem de erro caso o usuário tente acessar diretamente pela URL ou os dados de login sejam inválidos -->
                        <?php
                            if (isset($_SESSION['loginErro'])) {
                            echo $_SESSION['loginErro'];
                            unset ($_SESSION['loginErro']);
                            }
                        ?>
                        <!-- Mensagem de sucesso ou erro para cadastro de usuário -->
                        <?php
                            if (isset($_SESSION['msgCadastro'])) {
                            echo $_SESSION['msgCadastro'];
                            unset ($_SESSION['msgCadastro']);
                            }
                        ?>
                        <h1 class="display-4">Fórum</h1>
                        <p class="lead">Para acessar nosso fórum você precisa estar <b>cadastrado</b> em nosso sistema.</p>
                        <p class="lead">Escolha abaixo o que deseja fazer:</p>
                        <p><a href="#login" class="btn btn-primary text-white col-sm-6" onclick="loginForum()">Login</a></p>
                        <p><a href="#cadastro" class="btn btn-success text-white col-sm-6" onclick="cadastroForum()">Cadastro</a></p>
                    </div>
                </div>
                <!-- Formulário de login -->
                <div class="row d-none" id="loginForum">
                    <div class="col-12 text-center">
                        <hr>
                        <h3 class="text-primary mb-4" id="login">Login</h3>
                        <form class="text-center" action="./php/login.php" method="POST" enctype="multipart/form-data">
                            <div class="form-row text-left justify-content-lg-center">
                                <div class="form-group col-12 col-lg-8">
                                    <label class="h5" for="inputEmail">E-mail:</label>
                                    <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Digite aqui">
                                </div>
                            </div>
                            <div class="form-row text-left justify-content-lg-center">
                                <div class="form-group col-12 col-lg-8">
                                    <label class="h5" for="inputSenha">Senha:</label>
                                    <input type="password" class="form-control" name="senha" id="inputSenha" placeholder="Digite aqui">
                                </div>
                            </div>

                            <p><a href="#">Esqueceu sua senha?</a></p>
                            <button type="submit" class="btn btn-primary">Logar</button>
                        </form>
                    </div>
                </div>
                <!-- Formulário de cadastro -->
                <div class="row d-none" id="cadastroForum">
                    <div class="col-12 ">
                        <hr>
                        <h3 class="text-success text-center mb-4" id="cadastro">Cadastro</h3>
                        <form class="text-center" action="./php/cadastro.php" method="POST" enctype="multipart/form-data">
                            <div class="form-row text-left justify-content-lg-center">
                                <div class="form-group col-12 col-lg-8">
                                    <label class="h5" for="nomeUsuario">Nome:</label>
                                    <input type="text" class="form-control" name="nome" id="nomeUsuario" placeholder="Digite aqui">
                                </div>
                                <div class="form-group col-12 col-lg-8">
                                    <label class="h5" for="emailUsuario">E-mail:</label>
                                    <input type="email" class="form-control" name="email" id="emailUsuario" placeholder="Digite aqui">
                                </div>
                                <div class="form-group col-12 col-lg-8">
                                    <label class="h5" for="senhaUsuario">Senha:</label>
                                    <input type="password" class="form-control" name="senha" id="senhaUsuario" placeholder="Digite aqui">
                                </div>
                                <div class="form-group col-12 col-lg-8">
                                    <label class="h5" for="dataDeNascUsuario">Data de Nascimento:</label>
                                    <input type="date" class="form-control" name="dataNasc" id="dataDeNascUsuario">
                                </div>
                                <div class="form-group col-12 col-lg-8">
                                    <label class="h5" for="imgPerfil">Foto de Perfil</label>
                                    <input type="file" accept="image/png, image/jpeg, image/jpg" class="form-control" name="imgPerfil" id="imgPerfil">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success mt-3">Cadastrar-se</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Rodapé da página com links da navbar (para não precisar rodar até em cima) e redes sociais -->
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
    <script src="./js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>