<?php
session_start();
?>
<html>
<body>
    <section>
        <?php
        if (isset($_SESSION['nao_autenticado'])) :
        ?>
            <div class="notification is-danger">
                <p>ERRO: Usuário ou senha inválidos.</p>
            </div>
        <?php
        endif;
        unset($_SESSION['nao_autenticado']);
        ?>
        <div>
            <form action="login.php" method="POST">
                <input type="text" name="login" placeholder="Login">
                <input type="password" name="password" placeholder="Senha">
                <input type="submit">
            </form>
            <h2>Não possui uma conta?<a href="usuario.php">Cadastre-se</a></h2>
        </div>
    </section>
</body>
</html>