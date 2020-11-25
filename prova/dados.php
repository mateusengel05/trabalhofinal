<?php
   require_once('conexao.php');

    $query = "select * from usuarios where nome = ".$_GET['nome'];
    $result = mysqli_query($conn, $query);
    $linha  = mysqli_fetch_array($result);

?>


Dados da Pessoa.<br>

Primeiro Nome: <?=$linha['nome']?>
<br>
Cidade: <?=$linha['cidade']?>
<br>
Estado: <?=$linha['estado']?>

<br>

