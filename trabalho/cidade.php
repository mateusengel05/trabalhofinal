<?php


if(isset($_POST['descricao']) && !empty($_POST['descricao'])) {
    cadastrarCidade($_POST['descricao']);
}

if (isset($_GET['acao']) && (isset($_GET['registro'])) == 'deletar') {
    deletarCidade($_GET['registro']);
}

function montaFormCidade() {
    ?>
    <form action ="cidade.php" method="POST"> 
        Nome: <input type="text" name="descricao">
        <br>
        <button type="submit">Enviar</button>
    </form>
    <?php    
}