<!DOCTYPE html>
<?php
session_start();
if (isset($_COOKIE["access_token"])){
    echo "<script language='javascript' type='text/javascript'>window.redirect.href('teste.php')</script>";
}
?>
<html>
    <head>
        <title>Tela de login</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="top-bar">
            
        </div>
            <div class="login-box">  
            <div class="container-login">
                <h3>Login de usuário</h2>
                <form class="login-form" method="post" action="..\..\login.php">
                    <div class="login-input">
                        <label>Usuário</label>
                        <input type="text" name="login" id="login" required/>
                    </div>
                    <div class="login-input">
                        <label>Senha</label>
                        <input type="password" name="senha" id="senha" required/>
                    </div>
                    <input class="login-button" type="submit" value="Entrar" name="entrar" onclick="validaCampos()">
                </form>
            </div>
        </div>
    </body>
</html>