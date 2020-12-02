<?php
session_start();
include_once('../cadastrar/conexao.php');

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);

$query = "UPDATE pessoas SET nome= '$nome' WHERE id='$id'";
$result = mysqli_query($conexao, $query);

if (mysqli_affected_rows($conexao)) {
    header("Location: ../listagem_pessoas.php");
} else {
    header("location: alt_pessoa.php");
}
