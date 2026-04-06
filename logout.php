<?php 
    session_start();
    $_SESSION = array();
    session_destroy();
    if (isset($_COOKIE["nome"])) {
        setcookie("nome", "", time()-3600);
        setcookie("access_token","", time()-3600);
        setcookie("verify", false, time()-3600);
        echo "<script language = 'javascript' type='text/javascript'>alert('Limpo'); window.location.href='pages/login.php'</script>";
    }
?>