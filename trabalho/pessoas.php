<?php
require_once('crud/crudpessoas.php');


function Pessoas()
{
?>
    <form>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label" name="id">ID</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail3" placeholder="ID">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label" name="nome">Nome</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword3" placeholder="Nome">
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Entrar</button>
            </div>
        </div>
    </form>
<?php
}

listarPessoa();
Pessoas();

?>