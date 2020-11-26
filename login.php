<?php
session_start();
include('conexao.php');

if(empty($_POST['login']) || empty($_POST['password'])) {
	header('Location: index.php');
	exit();
}

$login = mysqli_real_escape_string($conexao, $_POST['login']);
$password = mysqli_real_escape_string($conexao, $_POST['password']);

$query = "SELECT login FROM usuarios WHERE login = '{$login}' and password = '{$password}'";
$result = mysqli_query($conexao, $query);
$row = mysqli_num_rows($result);

if($row == 1) {
	$_SESSION['login'] = $usuario;
	header('Location: menu.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: index.php');
	exit();
}