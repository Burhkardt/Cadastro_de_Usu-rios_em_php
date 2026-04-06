<!DOCTYPE html>
<?php
    if (isset($_COOKIE["access_token"])){
        $access_token = $_COOKIE["access_token"];
        $json = file_get_contents("../listachaves.json") or die("Arquivo não encontrado");
        $decoded_json = json_decode($json,true);
        foreach ($decoded_json as $key){
            if($key == $access_token && $_COOKIE["verify"] == true){
                $check = true;
                break;
            }
            else{
                $check = false;
            }
            }
        if($key != $access_token && $_COOKIE["verify"] == true){
            echo "<script language='javascript' type='text/javascript'>
                alert('Inconscistencia de dados detectada, faça login novamente');window.location.href='../logout.php'</script>";
        }
        elseif($check == true){
        }
        else{
            header("../token_controller.php");
        }
    }
    else{
        echo "<script language='javascript' type='text/javascript'>
            window.location.href='login.php'</script>";
    }

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="top-bar">
            
        </div>
            <div class="login-box">  
            <div class="container-login">
                <h3>Cadastro de currículo (Em desenvolvimento)</h2>
                <form class="cad-container" method="post" action="cadastro.php">
                    <label for="full-name">Nome completo</label>
                    <input type="text" id="full-name" name="Nome" required/>

                    <label for="full-name">Nome completo</label>
                    <input type="text" id="full-name" name="Nome" required/>

                    <label for="full-name">Nome completo</label>
                    <input type="text" id="full-name" name="Nome" required/>

                    <label for="full-name">Nome completo</label>
                    <input type="text" id="full-name" name="Nome" required/>

                    <label for="full-name">Nome completo</label>
                    <input type="text" id="full-name" name="Nome" required/>
                </form>
            </div>
        </div>
    
</body>
</html>