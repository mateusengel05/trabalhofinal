<?php
require('conexao.php');

$login = $_POST['login'];
$email = $_POST['email'];
$nome = $_POST['nome'];
$senha = md5($_POST['senha']);
if (!$conexao) {
    die ('Não conectou ao banco');
}

$query = "INSERT INTO usuarios (login, email, nome, password) VALUES ('".$login."','".$email."','".$nome."','".$senha."')";

mysqli_query($conexao,$query) or die ("Erro ao tentar registrar");
mysqli_close($conexao);
echo "Usuario cadastrado";
?>
<h2><a href="../../index.php">Voltar a tela de login!</a></h2>