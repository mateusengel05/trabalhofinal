<?php
    require_once('conexao.php');
   
    if (isset($_POST["gravar"])) {
        $nome = $_POST["nome"] && $senha = $_POST["senha"];

        $query = "insert into usuarios (nome, senha) values ('{$nome}', '{$senha}')";
        if (mysqli_query($conn, $query)) {
            echo "Registro gravado com sucesso!";
        }
    }
?>



</form>