<?php
    $login = $_POST['txtLogin'];
    $senha = $_POST['txtSenha'];

    if (($login == 'adm') && ($senha == '123')){
        session_start();
        
        $_SESSION['login-session'] = $login;
        $_SESSION['senha-session'] = $senha;
        header("Location: areaRestrita-adm/index-ar.php"); 
    } else {
        header('Location: login.php');
        setcookie('cred-erro', $aviso="<center><p class='text-danger'>Usuário ou senha incorretos.</p></center>", time()+1);
    }

?>