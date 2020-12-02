<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>
<nav class="navbar navbar-dark bg-dark">
    <a class="flex-sm-fill text-sm-center nav-link active" href="../menu.php">Home</a>
    <a class="flex-sm-fill text-sm-center nav-link" href="listagem_cidade.php">Listagem Cidade</a>
    <a class="flex-sm-fill text-sm-center nav-link" href="listagem_estados.php">Listagem Estados</a>
    <a class="flex-sm-fill text-sm-center nav-link" href="listagem_pessoas.php">Listagem Pessoa</a>
    <a class="flex-sm-fill text-sm-center nav-link" href="cadastrar/cidade.php">Cad. Cidades</a>
    <a class="flex-sm-fill text-sm-center nav-link" href="cadastrar/pessoa.php">Cad. Pessoas</a>
</nav>
<?php
include('cadastrar/conexao.php');

$query = ('SELECT * FROM estados');
$result = mysqli_query($conexao, $query);
?>
<table class="table table-striped">
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Sigla</th>
        <th scope="col">Nome</th>
        <th scope="col">Opções</th>
    </tr>
    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['sigla'] ?></td>
            <td><?php echo $row['nome'] ?></td>
            <td>
                <?php echo " <a href='remover/del_estados.php?id=" . $row['id'] . "'>Remover</a>" ?>
                <?php echo " <a href='alterar/alt_estados.php?id=" . $row['id'] . "'>Alterar</a>" ?>
            </td>
        </tr>
    <?php  } ?>
</table>
<a class="btn btn-primary" href="cadastrar/estados.php" role="button">Cadastrar novo Estado?</a> /
<a class="btn btn-primary" href="../menu.php" role="button">Voltar ao Menu!</a>