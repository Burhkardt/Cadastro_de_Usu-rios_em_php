<?php 
include("secret_code.php");
$login = md5($_POST["login"]);
$senha = md5($_POST["senha"]);
$botao = $_POST["entrar"];

try {
    $connect = new mysqli("localhost","root","","curriculo_teste");
}
catch (Exception $e) {
    echo 'Erro: '. $e->getMessage();
}
if (isset($botao)){
    $lista = $connect->query("SELECT * FROM usuario WHERE CPF = '$login' AND senha = '$senha'") 
    or die("Erro no login");
    if(mysqli_num_rows($lista) <=0){
        echo "<script language='javascript' type='text/javascript'>
        alert('login e/ou senha incorreto.');window.location.href = 'pages/login.php';</script>";
        die();
    }
    else{
        $info = $lista->fetch_array();
        $nome = $info["Nome"];
        $cpf = $info["CPF"];
        $ocodigo = base64_encode($secretkey);
        echo "<script language='javascript' type='text/javascript'>
        alert('$ocodigo');</script>";
        setcookie("access_token",md5($cpf.$ocodigo.base64_encode($nome)), time() + 60*30, '/');
        setcookie("nome", $nome, time() + 60*30,"/");
        setcookie("verify", 0);
        header("Location: token_controller.php");
        exit;
    }
}