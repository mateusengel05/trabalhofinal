<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>

<?php
include('conexao.php');
?>

<!-- MENU PROVISÓRIO-->

<nav class="nav nav-pills flex-column flex-sm-row">
    <a class="flex-sm-fill text-sm-center nav-link active" href="menu.php">Home</a>
    <a class="flex-sm-fill text-sm-center nav-link" href="listagens/listagem_cidade.php">Listagem Cidade</a>
    <a class="flex-sm-fill text-sm-center nav-link" href="listagens/listagem_estados.php">Listagem Estados</a>
    <a class="flex-sm-fill text-sm-center nav-link" href="listagens/listagem_pessoas.php">Listagem Pessoa</a>
    <a class="flex-sm-fill text-sm-center nav-link" href="listagens/cadastrar/cidade.php">Cad. Cidades</a>
    <a class="flex-sm-fill text-sm-center nav-link" href="listagens/cadastrar/estados.php">Cad. Estados</a>
</nav>

<!-- MENU PROFESSOR -->

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>

<?php
include_once('conexao.php');
$query = "SELECT * FROM menu ORDER BY ordem,descricao";
$result = mysqli_query($conexao, $query);
?>
<div class="row">
    <?php
    foreach ($result as $linha) {
    ?>
        <a href="<?= $linha['endereco'] ?>" class="<?= $linha['classe'] ?>"><?= $linha['descricao'] ?></a>
    <?php
    }
    ?>
</div>
<hr>