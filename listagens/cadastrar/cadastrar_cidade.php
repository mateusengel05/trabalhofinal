<?php
include ('conexao.php');

$codigo = $_POST['codigo'];
$nome   = $_POST['nome'];
$estado = $_POST['estado'];

if (!$conexao) {
    die ('Não conectou ao banco');
}

$query = "INSERT INTO cidades(codigo, nome, estado) VALUES ('".$codigo."','".$nome."','".$estado."')";

mysqli_query($conexao,$query) or die ("Erro ao tentar registrar");
mysqli_close($conexao);
echo "Cidade cadastrada";
?>
<h2><a href="../../menu.php">Voltar ao menu!</a></h2>

