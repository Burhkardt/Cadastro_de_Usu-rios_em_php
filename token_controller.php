<?php
    $access_token = $_COOKIE["access_token"];
    $check = $_COOKIE["verify"];
    $json = file_get_contents("listachaves.json") or die("Arquivo não encontrado");
    $decoded_json = json_decode($json,true);
    foreach ($decoded_json as $key){
        if($key == $access_token && $check == true){
            header("Location: pages/home.php");
            exit;
        }
        elseif($key == $access_token){
            setcookie("verify", true, time() + 60*30,"/");
            header("Location: pages/home.php");
            exit;

        }
        else{
            setcookie("verify", false);
            echo "<script language='javascript' type='text/javascript'>
            alert('Token de acesso inválido, realize o login novamente.');window.location.href = 'logout.php';</script>";
        }
    }
?>
