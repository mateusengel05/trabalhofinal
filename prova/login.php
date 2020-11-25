<?php 
    require_once('conexao.php');
    session_start();
    if($login = 'Mateus' and $senha = '123' ){
        $_SESSION['login'] = $login;
        $_SESSION['senha'] = $senha;
     
    }
    else{
        unset ($_SESSION['login']);
        unset ($_SESSION['senha']);
        echo "Login errado: {$_POST['login']}";    
    
    }
?>

<form method="post" action="RealizadocomSucesso.php" id="formlogin" name="formlogin" >
    <fieldset id="fie">
        <legend>LOGIN</legend><br />
        <label>NOME : </label>
        <input type="text" name="login" id="login"  /><br />
        <label>sddddddsdsdddddd :</label>
        <input type="password" name="senha" id="senha" /><br />
        <input type="submit" value="Entrar  "  />
    </fieldset>
</form>