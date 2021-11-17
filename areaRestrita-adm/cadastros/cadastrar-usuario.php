<?php 
   header('location:../formularios/formulario-usuario.php');
   require_once('../models/Usuario.php');
   
   $usuario = new Usuario();

   $usuario->setNomeUsuario($_POST['txtNome']);
   $usuario->setLoginUsuario($_POST['txtLogin']);
   $usuario->setSenhaUsuario($_POST['txtSenha']);

   
      $usuario->cadastrar($usuario);
      setcookie('aviso', $msg="<p class='text-sucess'>Cadastro realizado com sucesso.<p>", time()+1);
?>