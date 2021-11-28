<?php 
    require_once('../models/Produto.php');
    header('location: ../formularios/formulario-produto.php');
    
    $produto = new Produto();

    $produto->setIdProduto($_POST['idProduto']);
    $produto->setDesc($_POST['txtDesc']);
    $produto->setTexto($_POST['txtProd']);
    
    $nomeArquivo = $_FILES['fotoProduto']['name'];
    $arquivo = $_FILES['fotoProduto']['tmp_name'];
    $endereco = "../../images/".$nomeArquivo;
    move_uploaded_file($arquivo, $endereco);
    $produto->setFoto($endereco);
    
    $produto->update($produto);
?>