<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>

<?php
session_start();
include_once ('../cadastrar/conexao.php');
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$query = "SELECT * FROM estados WHERE id = $id ";
$result = mysqli_query($conexao, $query);
$linha = mysqli_fetch_assoc($result);
?>

<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                    <h5 class="card-title text-center">Alterar estado</h5>

                    <form action="alterar_estados.php" method="POST">
                        <div class="form-label-group">
                            <input type="hidden" name="id" value="<?php echo $linha['id'] ?>">
                            <label for="inputEmail">Sigla</label>
                            <input type="text" id="inputEmail" name="sigla" class="form-control" placeholder="Sigla" maxlength="2" value="<?php echo $linha['sigla']?>" required autofocus>
                        </div>
                        <div class="form-label-group">
                            <label for="inputPassword">Nome</label>
                            <input type="text" id="inputPassword" name="nome" class="form-control" placeholder="Nome" value="<?php echo $linha['nome']?>" required>
                            <br>
                        </div>
                        <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Registrar</button>
                        <hr class="my-4">
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>