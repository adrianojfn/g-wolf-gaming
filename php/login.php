<?php
// Inicia a sessão
session_start();
// Conecta com o banco de dados
include_once("./conexao.php");
// Estrutura condicional para fazer login validando através do banco de dados
if ((isset($_POST['email'])) && (isset($_POST['senha']))) {
    // Variáveis para receber o conteúdo do formulário e filtrar por tipo de dados
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $senha = mysqli_real_escape_string($connect, $_POST['senha']);
    // Consulta se os dados informados existem no banco de dados e coincidem
    $sql_login = "SELECT * FROM usuarios WHERE email_usuario = '$email' && senha_usuario = '$senha' LIMIT 1";
    $sql_login_query = mysqli_query($connect, $sql_login);
    $resultado = mysqli_fetch_assoc($sql_login_query);
    // Verifica se o resultado não é vazio para não entrarem pelo link
    if (empty($resultado)) {
        $_SESSION['loginErro'] = "<div class='alert alert-danger text-center' role='alert'>Usuário ou senha inválido. Tente novamente!</div>";
        header("Location: ../preforum.php#login");
    // Verifica se o resultado existe e salva algumas variáveis globais
    } elseif (isset($resultado)) {
        $_SESSION['logado'] = true;
        $_SESSION['usuarioID'] = $resultado['id_usuario'];
        $_SESSION['usuarioNome'] = $resultado['nome_usuario'];
        $_SESSION['usuarioEmail'] = $resultado['email_usuario'];
        $_SESSION['usuarioDtNasc'] = $resultado['dt_nascimento_usuario'];
        $_SESSION['usuarioSenha'] = $resultado['senha_usuario'];
        header("Location: ../forum.php");
    } else {
        $_SESSION['loginErro'] = "<div class='alert alert-danger text-center' role='alert'>Usuário ou senha inválido. Tente novamente!</div>";
        header("Location: ../preforum.php#login");
    }
} else {
    $_SESSION['loginErro'] = "<div class='alert alert-danger text-center' role='alert'>Usuário ou senha inválido. Tente novamente!</div>";
    header("Location: ../preforum.php#login");
}