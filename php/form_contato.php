<?php
// Inicia a sessão
session_start();
// Conecta com o banco de dados
include_once("./conexao.php");

// Variáveis para receber o conteúdo do formulário e filtrar por tipo de dado
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$assunto = filter_input(INPUT_POST, 'assunto', FILTER_SANITIZE_STRING);
$mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_STRING);

// Envia os dados recebidos do formulário através das variáveis para a tabela do banco de dados através de MySQL
$sql_form_contato = "INSERT INTO form_contato (nome, email, telefone, assunto, mensagem) VALUES ('$nome', '$email', '$telefone', '$assunto', '$mensagem')";
$resultado_form_contato = mysqli_query($connect, $sql_form_contato);

// Exibe a mensagem de sucesso ou erro e retorna a página do formulário
if (mysqli_insert_id($connect)) {
    $_SESSION['msg'] = "<div class='alert alert-success ml-1' role='alert'>Sucesso $nome, aguarde que responderemos seu contato em breve!</div>";
    header ("Location: ../contato.php");
} else {
    $_SESSION['msg'] = "<div class='alert alert-danger ml-1' role='alert'>Erro, tente novamente!</div>";
    header ("Location: ../contato.php");
}