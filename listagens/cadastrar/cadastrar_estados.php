<?php
include ('conexao.php');

$sigla = $_POST['sigla'];
$nome   = $_POST['nome'];

if (!$conexao) {
    die ('Não conectou ao banco');
}

$query = "INSERT INTO estados(sigla, nome) VALUES ('".$sigla."','".$nome."')";

mysqli_query($conexao,$query) or die ("Erro ao tentar registrar");
mysqli_close($conexao);
echo "Estado cadastrado";
?>
<h2><a href="../../menu.php">Voltar ao menu!</a></h2>
