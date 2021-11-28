<?php 
    require_once('../models/Usuario.php');
    header('Location: ../formularios/formulario-usuario.php');

    $usuario = new Usuario();

    $usuario->setIdUsuario($_POST['idUsuario']);
    $usuario->setLoginUsuario($_POST['loginUsuario']);
    $usuario->setSenhaUsuario($_POST['senhaUsuario']);

    $usuario->update($usuario);

?>