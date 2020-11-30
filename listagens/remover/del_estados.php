<?php
session_start();
include('../cadastrar/conexao.php');

if (!$conexao) {
    die('Não conectou ao banco');
}

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$query = "DELETE FROM estados WHERE id = '$id'";
$result = mysqli_query($conexao, $query) or die("Erro ao tentar apagar");
mysqli_close($conexao);
if (mysqli_affected_rows($conexao)) {
    $_SESSION['msg'] = "Usuario apagado";
    header("Location: ../listagem_estados.php");
} else {
    $_SESSION['msg'] = "a pessoa nao foi excluida";
    header("Location: ../listagem_estados.php");
}
