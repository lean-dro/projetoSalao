<?php 
session_start();

$_SESSION['user'] = $_POST['user'];
$_SESSION['cred'] = $_POST['pw'];

if (($_SESSION['user'] == 'adm') && ($_SESSION['cred'] == '123')) {
    header('Location: areaRestrita-adm/index.php');
}else{
    header('Location: index.php');
    setcookie('cred-erro', $aviso='Usuário ou senha incorretos.', time()+1);
}


?>