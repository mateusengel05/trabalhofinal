<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

</html>

<?php
require_once 'conexao.php';

function listarPessoa()
{
    $sql = 'SELECT * FROM pessoas';
    $Resultado = pg_query(conectar(), $sql);

    echo '<table class="table table-borderless table-dark">';
    echo '
    <tr>
    <th scope="col">Registros</th>
    <th scope="col">Nomes</th>
    <th scope="col">Complemento</th>
    </tr>
    </thead>';

    while ($Linha = pg_fetch_assoc($Resultado)) {
        echo '    <tr>';
        echo '    <td>' . $Linha['id'] . '</td>';
        echo '    <td>' . $Linha['nome'] . '</td>';
        echo '    </tr>';
    };
    echo '</table>';
}


