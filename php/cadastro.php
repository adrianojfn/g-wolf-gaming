<?php
// Inicia a sessão
session_start();
// Conecta com o banco de dados
include_once("./conexao.php");

// Variáveis para receber o conteúdo do formulário e filtrar por tipo de dados
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
$dataNasc = filter_input(INPUT_POST, 'dataNasc', FILTER_SANITIZE_STRING);
// Pega a extensão do arquivo e salva, cria um novo nome para o arquivo e define o diretório onde ele ficará
$arquivo = $_FILES['imgPerfil'];
$extensao = pathinfo($arquivo['name'], PATHINFO_EXTENSION);
$nome_arquivo = md5(uniqid($arquivo['name'])).".".$extensao;
$diretorio = "../upload/";
// Move o arquivo da pasta temporária do PHP para a pasta definida na variável $diretorio
move_uploaded_file($_FILES['imgPerfil']['tmp_name'], $diretorio.$nome_arquivo);

// Envia os dados recebidos do formulário através das variáveis para a tabela do banco de dados através de MySQL
$sql_cadastro = "INSERT INTO usuarios (nome_usuario, email_usuario, senha_usuario, dt_nascimento_usuario, imagem_usuario) VALUES ('$nome', '$email', '$senha', '$dataNasc', '$nome_arquivo')";
$resultado_cadastro = mysqli_query($connect, $sql_cadastro);

// Exibe a mensagem de sucesso ou erro e retorna a página pré fórum
if (mysqli_insert_id($connect)) {
    $_SESSION['msgCadastro'] = "<div class='alert alert-success text-center' role='alert'>Usuário cadastrado com sucesso! Já pode realizar o login $nome!</div>";
    header ("Location: ../preforum.php#cadastro");
} else {
    $_SESSION['msgCadastro'] = "<div class='alert alert-danger text-center' role='alert'>Erro, tente se cadastrar novamente.</div>";
    header ("Location: ../preforum.php#cadastro");
}