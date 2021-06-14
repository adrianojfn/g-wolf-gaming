<?php
// Inicia a sessão
session_start();
// Conecta com o banco de dados
include_once("./conexao.php");

// Variáveis para receber o conteúdo do formulário e filtrar por tipo de dados
$conteudo_msg = filter_input(INPUT_POST, 'mensagemTopico', FILTER_SANITIZE_STRING);
$topico = filter_input(INPUT_POST, 'topico', FILTER_SANITIZE_STRING);
$autor_msg = $_SESSION['usuarioNome'];
$url_pagina = $_SESSION['url_pag'];

// Envia os dados recebidos do formulário através das variáveis para a tabela do banco de dados através de MySQL
$sql_msg = "INSERT INTO mensagens_topico (conteudo_msg, autor_msg, topico_msg, data_msg) VALUES ('$conteudo_msg', '$autor_msg', '$topico', NOW())";
$resultado_msg = mysqli_query($connect, $sql_msg);

// Exibe o conteúdo enviado dentro da tabela ou uma mensagem de erro. Usa de URL dinâmica para criar mensagens em todos os tópicos
if (mysqli_insert_id($connect)) {
    header ("Location: $url_pagina#topic");
    unset ($_SESSION['url_pag']);
} else {
    $_SESSION['msgErro'] = "<div class='alert alert-danger text-center' role='alert'>Erro. Tente novamente!</div>";
    header ("Location: $url_pagina.php");
}