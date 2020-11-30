<?php
include ('conexao.php');

$nome = $_POST['nome'];

if (!$conexao) {
    die ('Não conectou ao banco');
}
$query = "INSERT INTO pessoas(nome) VALUES ('".$nome."')";

mysqli_query($conexao,$query) or die ("Erro ao tentar registrar");
mysqli_close($conexao);
echo "Pessoa cadastrada";
?>
<h2><a href="../../menu.php">Voltar ao menu!</a></h2>
