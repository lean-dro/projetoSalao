<?php 
session_start();

$_SESSION['user'] = $_POST['user'];
$_SESSION['cred'] = $_POST['pw'];

if (($_SESSION['user'] == 'adm') && ($_SESSION['cred'] == '123')) {
    header('Location: areaRestrita-adm/index.php');
}else{
    header('Location: login.php');
    setcookie('cred-erro', $aviso="<p class='text-danger'>Usuário ou senha incorretos.</p>", time()+1);
}


?>