<?php
// Verificação para o usuário não acessar o fórum pela URL
include_once('./php/verificaLogin.php');
// Inclui a página de contagem para as estatísticas
include_once("./php/contagem.php");
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
    <link rel="stylesheet" href="./css/homeforum.css">
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
    </header>

    <main>
        <div class="container mt-2">
            <!-- Mensagem de boas-vindas e botão para sair da conta -->
            <div class="bg-white mb-3 rounded-bottom">
                <div class="container">
                    <div class="row py-4 d-flex align-items-center">
                        <div class="col-md-12 text-center">
                            <button class="btn btn-outline-dark mt-2" id="btn-welcome" onclick="console.log('Muito obrigado por tornar isso possível Sandro <3')">Seja bem-vindo <b><?php echo $_SESSION['usuarioNome']; ?></b>!</button>
                            <a href="./php/sair.php"><button class="btn btn-danger mt-2">Sair</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Categorias e Tópicos Fórum -->
            <div class="row">
                <div class="col-12 col-lg-9 col-xl-9">
                    <h2 class="h4 categoria mb-0 p-4 rounded-top text-light">Death Wisdom - Bosses</h2>
                    <table class="table table-striped table-bordered table-responsive">
                        <thead class="thead-light">
                            <tr>
                                <th class="topics-col" scope="col">Tópicos</th>
                                <th scope="col">Mensagens</th>
                                <th class="lastpost-col" scope="col">Último Post</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <!-- Tópico -->
                                <td>
                                    <h3 class="h5 mb-0"><a href="./topicos/first-boss.php">Primeiro Boss</a></h3>
                                </td>
                                <!-- Quantidade de mensagens neste tópico -->
                                <td>
                                    <div>
                                    <?php 
                                        $sql_firstb = "SELECT * FROM mensagens_topico WHERE topico_msg = 'Primeiro Boss'";
                                        $resultado_firstb = mysqli_query($connect, $sql_firstb);
                                        $total_msg_firstb = mysqli_num_rows($resultado_firstb);
                                        echo $total_msg_firstb;
                                    ?>
                                    </div>
                                </td>
                                <!-- Último post info -->
                                <td>
                                    <div>
                                        Por: <b><?php echo $last_pb['autor_msg']; ?></b>
                                    </div> 
                                    <div>
                                        <?php echo $last_pb['data_msg'];?>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <!-- Tópico -->
                                <td>
                                    <h3 class="h5 mb-0"><a href="./topicos/second-boss.php">Segundo Boss</a></h3>
                                </td>
                                <!-- Quantidade de mensagens neste tópico -->
                                <td>
                                    <div>
                                    <?php 
                                        $sql_secondb = "SELECT * FROM mensagens_topico WHERE topico_msg = 'Segundo Boss'";
                                        $resultado_secondb = mysqli_query($connect, $sql_secondb);
                                        $total_msg_secondb = mysqli_num_rows($resultado_secondb);
                                        echo $total_msg_secondb;
                                    ?>
                                    </div>
                                </td>
                                <!-- Último post info -->
                                <td>
                                    <div>
                                        Por: <b><?php echo $last_sb['autor_msg'];?></b>
                                    </div> 
                                    <div>
                                        <?php echo $last_sb['data_msg'];?>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <!-- Tópico -->
                                <td>
                                    <h3 class="h5 mb-0"><a href="./topicos/third-boss.php">Terceiro Boss</a></h3>
                                </td>
                                <!-- Quantidade de mensagens neste tópico -->
                                <td>
                                    <div>
                                    <?php 
                                        $sql_thirdb = "SELECT * FROM mensagens_topico WHERE topico_msg = 'Terceiro Boss'";
                                        $resultado_thirdb = mysqli_query($connect, $sql_thirdb);
                                        $total_msg_thirdb = mysqli_num_rows($resultado_thirdb);
                                        echo $total_msg_thirdb;
                                    ?>
                                    </div>
                                </td>
                                <!-- Último post info -->
                                <td>
                                    <div>
                                        Por: <b><?php echo $last_tb['autor_msg'];?></b>
                                    </div> 
                                    <div>
                                        <?php echo $last_tb['data_msg'];?>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <h2 class="h4 categoria mb-0 p-4 rounded-top text-light">Death Wisdom - Easter Eggs</h2>
                    <table class="table table-striped table-bordered table-responsive">
                        <thead class="thead-light">
                            <tr>
                                <th class="topics-col" scope="col">Tópicos</th>
                                <th scope="col">Mensagens</th>
                                <th class="lastpost-col" scope="col">Último Post</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <!-- Tópico -->
                                <td>
                                    <h3 class="h5 mb-0"><a href="./topicos/caverna-secreta.php">Caverna Secreta</a></h3>
                                </td>
                                <!-- Quantidade de mensagens neste tópico -->
                                <td>
                                    <div>
                                    <?php 
                                        $sql_caverna = "SELECT * FROM mensagens_topico WHERE topico_msg = 'Caverna Secreta'";
                                        $resultado_caverna = mysqli_query($connect, $sql_caverna);
                                        $total_msg_caverna = mysqli_num_rows($resultado_caverna);
                                        echo $total_msg_caverna;
                                    ?>
                                    </div>
                                </td>
                                <!-- Último post info -->
                                <td>
                                    <div>
                                        Por: <b><?php echo $last_cs['autor_msg'];?></b>
                                    </div> 
                                    <div>
                                        <?php echo $last_cs['data_msg'];?>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <!-- Tópico -->
                                <td>
                                    <h3 class="h5 mb-0"><a href="./topicos/municao-dourada.php">Munição Dourada</a></h3>
                                </td>
                                <!-- Quantidade de mensagens neste tópico -->
                                <td>
                                    <div>
                                    <?php 
                                        $sql_municao = "SELECT * FROM mensagens_topico WHERE topico_msg = 'Munição Dourada'";
                                        $resultado_municao = mysqli_query($connect, $sql_municao);
                                        $total_msg_municao = mysqli_num_rows($resultado_municao);
                                        echo $total_msg_municao;
                                    ?>
                                    </div>
                                </td>
                                <!-- Último post info -->
                                <td>
                                    <div>
                                        Por: <b><?php echo $last_md['autor_msg'];?></b>
                                    </div> 
                                    <div>
                                        <?php echo $last_md['data_msg'];?>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <!-- Tópico -->
                                <td>
                                    <h3 class="h5 mb-0"><a href="./topicos/zumbi-divergente.php">Zumbi Divergente</a></h3>
                                </td>
                                <!-- Quantidade de mensagens neste tópico -->
                                <td>
                                    <div>
                                    <?php 
                                        $sql_zumbi = "SELECT * FROM mensagens_topico WHERE topico_msg = 'Zumbi Divergente'";
                                        $resultado_zumbi = mysqli_query($connect, $sql_zumbi);
                                        $total_msg_zumbi = mysqli_num_rows($resultado_zumbi);
                                        echo $total_msg_zumbi;
                                    ?>
                                    </div>
                                </td>
                                <!-- Último post info -->
                                <td>
                                    <div>
                                        Por: <b><?php echo $last_zd['autor_msg'];?></b>
                                    </div> 
                                    <div>
                                        <?php echo $last_zd['data_msg'];?>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <h2 class="h4 categoria mb-0 p-4 rounded-top text-light">Death Wisdom - Sugestões</h2>
                    <table class="table table-striped table-bordered table-responsive">
                        <thead class="thead-light">
                            <tr>
                                <th class="topics-col" scope="col">Tópicos</th>
                                <th scope="col">Mensagens</th>
                                <th class="lastpost-col" scope="col">Último Post</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <!-- Tópico -->
                                <td>
                                    <h3 class="h5 mb-0"><a href="./topicos/gerais.php">Gerais</a></h3>
                                </td>
                                <!-- Quantidade de mensagens neste tópico -->
                                <td>
                                    <div>
                                    <?php 
                                        $sql_gerais = "SELECT * FROM mensagens_topico WHERE topico_msg = 'Gerais'";
                                        $resultado_gerais = mysqli_query($connect, $sql_gerais);
                                        $total_msg_gerais = mysqli_num_rows($resultado_gerais);
                                        echo $total_msg_gerais;
                                    ?>
                                    </div>
                                </td>
                                <!-- Último post info -->
                                <td>
                                    <div>
                                        Por: <b><?php echo $last_g['autor_msg'];?></b>
                                    </div> 
                                    <div>
                                        <?php echo $last_g['data_msg'];?>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <!-- Tópico -->
                                <td>
                                    <h3 class="h5 mb-0"><a href="./topicos/armamento.php">Armamento</a></h3>
                                </td>
                                <!-- Quantidade de mensagens neste tópico -->
                                <td>
                                    <div>
                                    <?php 
                                        $sql_armamento = "SELECT * FROM mensagens_topico WHERE topico_msg = 'Armamento'";
                                        $resultado_armamento = mysqli_query($connect, $sql_armamento);
                                        $total_msg_armamento = mysqli_num_rows($resultado_armamento);
                                        echo $total_msg_armamento;
                                    ?>
                                    </div>
                                </td>
                                <!-- Último post info -->
                                <td>
                                    <div>
                                        Por: <b><?php echo $last_a['autor_msg'];?></b>
                                    </div> 
                                    <div>
                                        <?php echo $last_a['data_msg'];?>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <!-- Tópico -->
                                <td>
                                    <h3 class="h5 mb-0"><a href="./topicos/bosses.php">Bosses</a></h3>
                                </td>
                                <!-- Quantidade de mensagens neste tópico -->
                                <td>
                                    <div>
                                    <?php 
                                        $sql_bosses = "SELECT * FROM mensagens_topico WHERE topico_msg = 'Bosses'";
                                        $resultado_bosses = mysqli_query($connect, $sql_bosses);
                                        $total_msg_bosses = mysqli_num_rows($resultado_bosses);
                                        echo $total_msg_bosses;
                                    ?>
                                    </div>
                                </td>
                                <!-- Último post info -->
                                <td>
                                    <div>
                                        Por: <b><?php echo $last_b['autor_msg'];?></b>
                                    </div> 
                                    <div>
                                        <?php echo $last_b['data_msg'];?>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Aside -->
                <div class="col-12 col-lg-3 col-xl-3">
                    <aside>
                        <div class="row">
                            <!-- Perfil do usuário com dados cadastrados -->
                            <div class="col-12 col-sm-6 col-lg-12 col-xl-12">
                                <div class="card mb-3 mb-sm-3 mb-xl-3">
                                    <img src="./assets/privateinvestocat.jpg" class="card-img-top"> <!-- Pegar do Banco de Dados -->
                                    <div class="card-body">
                                        <h4 class="card-title"><b><?php echo $_SESSION['usuarioNome']; ?></b></h4>
                                        <h6 class="card-subtitle mb-2 text-muted"><?php echo $_SESSION['usuarioEmail']; ?></h5>
                                        <p class="card-text text-dark"><?php echo $_SESSION['usuarioDtNasc']; ?></p>
                                    </div>
                                </div>
                            </div>
                            <!-- Estatísticas gerais do Fórum -->
                            <div class="col-12 col-sm-6 col-lg-12 col-xl-12">
                                <div class="card mb-3 mb-sm-3 mb-xl-3">
                                    <div class="card-body">
                                        <h2 class="h4 card-title">Estatísticas do Fórum</h1>
                                        <p>Tópicos: <b>9</b></p>
                                        <p>Mensagens: <b><?php echo $total_msg_forum; ?></b></p>
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
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>