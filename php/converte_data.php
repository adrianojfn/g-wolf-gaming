<?php
// Converte data de nascimento usuário
$datadobanco = $_SESSION['usuarioDtNasc'];
$dataconvertida = implode("/", array_reverse(explode("-", $datadobanco)));
