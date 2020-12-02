<?php
session_start();
include_once('../cadastrar/conexao.php');

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$sigla = filter_input(INPUT_POST, 'sigla', FILTER_SANITIZE_STRING);

$query = "UPDATE estados SET nome= '$nome', sigla= '$sigla' WHERE id='$id'";
$result = mysqli_query($conexao, $query);

if (mysqli_affected_rows($conexao)) {
    header("Location: ../listagem_estados.php");
} else {
    header("location: alt_estados.php");
}
