<?php
session_start();
// Caso não estiver logado volta a página de login
if (!isset($_SESSION['logado'])) {
    session_destroy();
    header("Location: ../preforum.php#login");
}