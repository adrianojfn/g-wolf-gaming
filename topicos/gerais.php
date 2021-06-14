<?php
// Inicia a sessão
session_start();
$_SESSION['url_pag'] = $_SERVER['REQUEST_URI'];
// Conecta com o banco de dados
include_once("../php/conexao.php");
// Conta quantas mensagens tem este tópico
$contar_msg = "SELECT * FROM mensagens_topico WHERE topico_msg = 'Gerais'";
$resultado_contar_msg = mysqli_query($connect, $contar_msg);
$total_msg = mysqli_num_rows($resultado_contar_msg);
// Conta quantos usuários participaram deste tópico
$contar_usuarios = "SELECT autor_msg, COUNT(autor_msg) as total FROM mensagens_topico WHERE topico_msg = 'Gerais' GROUP BY autor_msg";
$resultado_contar_usuarios = mysqli_query($connect, $contar_usuarios);
$total_usuarios = mysqli_num_rows($resultado_contar_usuarios);
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
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../css/homeforum.css">
    <!-- Título da página -->
    <title>Fórum</title>
</head>
<body>
    <!-- Cabeçalho da página -->
    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-black">
            <div class="container-fluid py-0">
                <a class="navbar-brand text-white p-0" href="../index.php">
                    <img id="logo" src="../assets/logo-sem-texto.png" alt="G-Wolf Gaming">
                    G-Wolf Gaming
                </a>
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite"> <!-- Botão para telas menores -->
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSite">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="../index.php">Página Inicial</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../forum.php">Fórum</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../avaliacoes.html">Avaliações</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../equipe.html">Equipe</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="../contato.php">Contato</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <div class="container mt-2">
            <!-- Botões de voltar para a página anterior e de sair de sua conta -->
            <div class="bg-white mb-3 rounded-bottom">
                <div class="container">
                    <div class="row py-4 d-flex align-items-center">
                        <div class="col-md-12 text-center">
                            <a href="../forum.php" class="btn btn-outline-dark mt-2">Voltar</a>
                            <a href="../php/sair.php"><button class="btn btn-danger mt-2">Sair</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tópico Fórum -->
            <div class="row">
                <div class="col-12 col-lg-9 col-xl-9">
                    <div id="topic" class="d-flex bg-warning mb-0 p-4 rounded-top justify-content-between">
                        <h2 class="h4 mb-0">Gerais</h2>
                        <a href class="h4 text-dark mb-0" data-toggle="modal" data-target="#createMsgModal"><i class="fas fa-plus fa-lg"></i></a>
                    </div>
                    <!-- Mensagens deste tópico -->
                    <table class="table table-striped table-bordered table-responsive">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" class="autor-col">Autor</th>
                                <th scope="col" class="msg-col">Mensagem</th>
                                <th scope="col" class="date-col">Data e hora</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                //Recebe o número da página
                                $pagina_atual = filter_input(INPUT_GET, 'pagina', FILTER_SANITIZE_NUMBER_INT);
                                $pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;

                                // Quantidade de itens por página
                                $qnt_pagina = 20;

                                // Página inicial
                                $inicio = ($qnt_pagina * $pagina) - $qnt_pagina;

                                // Query para mostrar as mensagens do tópico vindo do BD
                                $show_msg = "SELECT * FROM mensagens_topico WHERE topico_msg = 'Gerais' LIMIT $inicio, $qnt_pagina";
                                $resultado_show_msg = mysqli_query($connect, $show_msg);

                                while($row_msg = mysqli_fetch_assoc($resultado_show_msg)): 
                            ?>
                            <tr>
                                <td>
                                    <div class="text-center">
                                        <b><?php echo $row_msg['autor_msg']; ?></b>
                                    </div>
                                </td>
                                <td>
                                    <?php echo $row_msg['conteudo_msg']; ?>
                                </td>
                                <td>
                                    <div><?php echo $row_msg['data_msg']; ?></div>
                                </td>
                            </tr>
                            <?php
                                endwhile;
                                // Caso falhe em adicionar uma nova mensagem
                                if (isset($_SESSION['msgErro'])) {
                                echo $_SESSION['msgErro'];
                                unset ($_SESSION['msgErro']);
                                }
                            ?>
                        </tbody>
                    </table>
                    <div>
                        <!-- Páginação das mensagens (para não ter muitas mensagens por página) -->
                        <nav>
                            <ul class="pagination justify-content-end">
                        <?php
                            // Query para saber quantas mensagens temos e adicionar em uma váriavel
                            $result_pg = "SELECT COUNT(id_msg) AS num_result FROM mensagens_topico WHERE topico_msg = 'Gerais'";
                            $resultado_pg = mysqli_query($connect, $result_pg);
                            $row_pg = mysqli_fetch_assoc($resultado_pg);

                            // Quantidade de páginas
                            $quantidade_pg = ceil($row_pg['num_result'] / $qnt_pagina);
                            // Limitação de links antes e depois
                            $maximo_links = 1;
                            // Primeira página
                            echo "<li class='page-item'><a class='page-link' href='./gerais.php?pagina=1'>Primeira</a></li>";
                            // Página anterior
                            for($pagina_ant = $pagina - $maximo_links; $pagina_ant <= $pagina - 1; $pagina_ant ++) {
                                if($pagina_ant >= 1) {
                                    echo "<li class='page-item'><a class='page-link' href='./gerais.php?pagina=$pagina_ant'>$pagina_ant</a></li>";
                                }
                            }
                            // Página atual
                            echo "<li class='page-item'><a class='page-link'>$pagina</a></li>";
                            // Página posterior
                            for($pagina_prox = $pagina + 1; $pagina_prox <= $pagina + $maximo_links; $pagina_prox ++) {
                                if($pagina_prox <= $quantidade_pg) {
                                    echo "<li class='page-item'><a class='page-link' href='./gerais.php?pagina=$pagina_prox'>$pagina_prox</a></li>";
                                }
                            }
                            // Última página
                            echo "<li class='page-item'><a class='page-link' href='./gerais.php?pagina=$quantidade_pg'>Última</a></li>";
                        ?>
                            </ul>
                        </nav>
                    </div>
                </div>

                <!-- Aside -->
                <div class="col-12 col-lg-3 col-xl-3">
                    <aside>
                        <div class="row">
                            <!-- Perfil do usuário com dados cadastrados -->
                            <div class="col-12 col-sm-6 col-lg-12 col-xl-12">
                                <div class="card mb-3 mb-sm-3 mb-xl-3">
                                    <img src="../assets/privateinvestocat.jpg" class="card-img-top"> <!-- Pegar do Banco de Dados -->
                                    <div class="card-body">
                                        <h4 class="card-title"><b><?php echo $_SESSION['usuarioNome']; ?></b></h4>
                                        <h6 class="card-subtitle mb-2 text-muted"><?php echo $_SESSION['usuarioEmail']; ?></h5>
                                        <p class="card-text text-dark"><?php echo $_SESSION['usuarioDtNasc']; ?></p>
                                    </div>
                                </div>
                            </div>
                            <!-- Estatísticas deste tópico -->
                            <div class="col-12 col-sm-6 col-lg-12 col-xl-12">
                                <div class="card mb-3 mb-sm-3 mb-xl-3">
                                    <div class="card-body">
                                        <h2 class="h4 card-title">Estatísticas deste tópico</h1>
                                        <p>Mensagens: <b><?php echo $total_msg; ?></b></p>
                                        <p>Usuários: <b><?php echo $total_usuarios; ?></b></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
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
                        <a class="list-group-item list-group-item-action list-group-item-primary" href="../index.php">Página Inicial</a>
                        <a class="list-group-item list-group-item-action list-group-item-success" href="../avaliacoes.html">Avaliações</a>
                        <a class="list-group-item list-group-item-action list-group-item-primary" href="../equipe.html">Equipe</a>
                        <a class="list-group-item list-group-item-action list-group-item-success" href="../contato.php">Contato</a>
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

    <!-- Modal Create Msg -->
    <div class="modal fade" id="createMsgModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Escreva sua mensagem</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="../php/criarMsg.php" method="POST" enctype="multipart/form-data">
                    <div class="form-row">
                        <div class="form-group col-12">
                            <label class="h5" for="topico">Tópico:</label>
                            <select class="form-control" name="topico" id="topico">
                                <option value="Gerais">Gerais</option>
                            </select>
                        </div>
                        <div class="form-group col-12">
                            <label class="h5" for="mensagemTopico">Mensagem:</label>
                            <textarea class="form-control" name="mensagemTopico" id="mensagemTopico" rows="3" maxlength="1000" placeholder="Sua mensagem com no máximo 3000 caracteres" required></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Criar</button>
                </form>
            </div>
        </div>
    </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>