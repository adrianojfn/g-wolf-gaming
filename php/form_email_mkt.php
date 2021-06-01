<?php
// Inicia a sessão
session_start();
// Conecta com o banco de dados
include_once("./conexao.php");

// Variáveis para receber o conteúdo do formulário e filtrar por tipo de dados
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);

// Envia os dados recebidos do formulário através das variáveis para a tabela do banco de dados através de MySQL
$sql_email_mkt = "INSERT INTO email_marketing (nome, email) VALUES ('$nome', '$email')";
$resultado_email_mkt = mysqli_query($connect, $sql_email_mkt);

// Exibe a mensagem de sucesso ou erro e retorna a página inicial
if (mysqli_insert_id($connect)) {
    $_SESSION['msg'] = "<div class='alert alert-success text-center mt-3' role='alert'><p>Boa! Fique atento ao seu e-mail $nome!</p><p>A partir de agora você receberá notícias e atualizações de Death Wisdom antecipadamente em seu e-mail :)</p></div>";
    header ("Location: ../index.php#email-mkt");
} else {
    $_SESSION['msg'] = "<div class='alert alert-danger text-center mt-3' role='alert'>Erro, tente novamente!</div>";
    header ("Location: ../index.php#email-mkt");
}