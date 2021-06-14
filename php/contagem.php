<?php
// Conecta com o banco de dados
include_once("./php/conexao.php");

// Conta o total de usuários do fórum
$sql_usuarios = "SELECT * FROM usuarios";
$resultado_usuarios = mysqli_query($connect, $sql_usuarios);
$total_usuarios = mysqli_num_rows($resultado_usuarios);

// Conta quantas mensagens tem em todo fórum
$sql_total_msg = "SELECT * FROM mensagens_topico";
$resultado_total_msg = mysqli_query($connect, $sql_total_msg);
$total_msg_forum = mysqli_num_rows($resultado_total_msg);

// Recebe o autor e data do último post do tópico Primeiro Boss
$sql_last_pb = "SELECT * FROM mensagens_topico WHERE topico_msg = 'Primeiro Boss' ORDER BY id_msg DESC LIMIT 0, 1";
$resultado_last_pb = mysqli_query($connect, $sql_last_pb);
$last_pb = mysqli_fetch_assoc($resultado_last_pb);

// Recebe o autor e data do último post do tópico Segundo Boss
$sql_last_sb = "SELECT * FROM mensagens_topico WHERE topico_msg = 'Segundo Boss' ORDER BY id_msg DESC LIMIT 0, 1";
$resultado_last_sb = mysqli_query($connect, $sql_last_sb);
$last_sb = mysqli_fetch_assoc($resultado_last_sb);

// Recebe o autor e data do último post do tópico Terceiro Boss
$sql_last_tb = "SELECT * FROM mensagens_topico WHERE topico_msg = 'Terceiro Boss' ORDER BY id_msg DESC LIMIT 0, 1";
$resultado_last_tb = mysqli_query($connect, $sql_last_tb);
$last_tb = mysqli_fetch_assoc($resultado_last_tb);

// Recebe o autor e data do último post do tópico Caverna Secreta
$sql_last_cs = "SELECT * FROM mensagens_topico WHERE topico_msg = 'Caverna Secreta' ORDER BY id_msg DESC LIMIT 0, 1";
$resultado_last_cs = mysqli_query($connect, $sql_last_cs);
$last_cs = mysqli_fetch_assoc($resultado_last_cs);

// Recebe o autor e data do último post do tópico Munição Dourada
$sql_last_md = "SELECT * FROM mensagens_topico WHERE topico_msg = 'Munição Dourada' ORDER BY id_msg DESC LIMIT 0, 1";
$resultado_last_md = mysqli_query($connect, $sql_last_md);
$last_md = mysqli_fetch_assoc($resultado_last_md);

// Recebe o autor e data do último post do tópico Zumbi Divergente
$sql_last_zd = "SELECT * FROM mensagens_topico WHERE topico_msg = 'Zumbi Divergente' ORDER BY id_msg DESC LIMIT 0, 1";
$resultado_last_zd = mysqli_query($connect, $sql_last_zd);
$last_zd = mysqli_fetch_assoc($resultado_last_zd);

// Recebe o autor e data do último post do tópico Gerais
$sql_last_g = "SELECT * FROM mensagens_topico WHERE topico_msg = 'Gerais' ORDER BY id_msg DESC LIMIT 0, 1";
$resultado_last_g = mysqli_query($connect, $sql_last_g);
$last_g = mysqli_fetch_assoc($resultado_last_g);

// Recebe o autor e data do último post do tópico Armamento
$sql_last_a = "SELECT * FROM mensagens_topico WHERE topico_msg = 'Armamento' ORDER BY id_msg DESC LIMIT 0, 1";
$resultado_last_a = mysqli_query($connect, $sql_last_a);
$last_a = mysqli_fetch_assoc($resultado_last_a);

// Recebe o autor e data do último post do tópico Bosses
$sql_last_b = "SELECT * FROM mensagens_topico WHERE topico_msg = 'Bosses' ORDER BY id_msg DESC LIMIT 0, 1";
$resultado_last_b = mysqli_query($connect, $sql_last_b);
$last_b = mysqli_fetch_assoc($resultado_last_b);