<?php
// Variáveis para conectar com o banco de dados
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "gwolfgaming";

// Conecta com o banco de dados
$connect = mysqli_connect($servidor, $usuario, $senha, $dbname);

// Especifica o conjunto de caracteres padrão (nesse caso utf8) ao enviar os dados para o banco de dados
mysqli_set_charset($connect, "utf8");