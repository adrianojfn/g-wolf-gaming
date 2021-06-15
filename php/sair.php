<?php
// Inicia a sessão
session_start();

// Destrói todas as variáveis globais atuais
unset(
    $_SESSION['logado'],
    $_SESSION['usuarioID'],
    $_SESSION['usuarioNome'],
    $_SESSION['usuarioEmail'],
    $_SESSION['usuarioDtNasc'],
    $_SESSION['usuarioSenha']
);

// Redireciona o usuário a página de login
header("Location: ../preforum.php");