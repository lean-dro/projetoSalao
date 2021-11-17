<?php 
    require_once('../models/Produto.php');
    require_once('../models/Usuario.php');
    $produto = new Produto();
    $usuario = new Usuario();
    
    $usuario->setIdUsuario($_POST['slUsuario']);
    $produto->setUsuario($usuario);
    

    $produto->setDesc($_POST['txtDesc']);
    $produto->setTexto($_POST['txtProd']);

    $nomeArquivo = $_FILES['fotoProduto']['name'];
    $arquivo = $_FILES['fotoProduto']['tmp_name'];
    $endereco = "../../images/".$nomeArquivo;
    move_uploaded_file($arquivo, $endereco);
    $produto->setFoto($endereco);
    

    $produto->cadastrar($produto);

?>