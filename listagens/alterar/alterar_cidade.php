<?php
session_start();
include_once('../cadastrar/conexao.php');

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$codigo = filter_input(INPUT_POST, 'codigo', FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$estado = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_NUMBER_INT);


$query = "UPDATE cidades SET codigo= '$codigo', nome= '$nome', estado= '$estado' WHERE id='$id'";
$result = mysqli_query($conexao, $query);

if (mysqli_affected_rows($conexao)) {
    header("Location: ../listagem_cidade.php");
} else {
    header("location: alt_cidade.php");
}
