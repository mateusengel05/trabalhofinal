<html>

<?php
require_once 'conexao.php';
include('verifica_login.php');
?>

<body class="painel">
    <h2 class="entrada">Olá, <?php echo $_SESSION['usuario']; ?></h2>
    <h2 class="saida"><a href="logout.php">Sair</a></h2><br><br>
    <h2><a href="regiao.php">registrar regiao</a></h2>
    <?php
    //$result = "SELECT * FROM regiao";
    //$resultado = mysqli_query($conexao, $result);
    //while ($row_regiao = mysqli_fetch_array($resultado)) {
        //echo '<table class="tabela">
            //<tr>
               // <th>ID </th>
                //<th>Região</th>
            //</tr>
           // <tr>
                //<td>' . $row_regiao['IDRegiao'] . '</td>
                //<td>' . $row_regiao['DescricaoRegiao'] . '</td>
//</tr>';
    //}
    ?>



</body>

</html>