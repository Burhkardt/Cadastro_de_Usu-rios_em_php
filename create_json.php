<?php
include("secret_code.php");
try {
    $connect = new mysqli("localhost","root","","curriculo_teste");
}
catch (Exception $e) {
    echo 'Erro: '. $e->getMessage();
}

$lista_completa = $connect->query("SELECT Nome, CPF FROM Usuario WHERE CPF IS NOT null");
$info = $lista_completa->fetch_all();
echo base64_encode($info[0][0]);
$connect->close();
$senhaSecreta = base64_encode($secretkey);
$lista = array();
foreach ($info as $teste){
    echo base64_encode($teste[0]);
    $ocodigo = array (md5($teste[1].$senhaSecreta.base64_encode($teste[0])));
    $lista = array_merge($lista,$ocodigo);
}

file_put_contents("listachaves.json",json_encode($lista));