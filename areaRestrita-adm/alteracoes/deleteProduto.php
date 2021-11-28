<?php 
    require_once('../models/Produto.php');
    header('location: ../formularios/formulario-produto.php');
    $produto = new Produto();
    
    $produto->setIdProduto($_POST['idProduto']);
    
    $produto->delete($produto);
    
?>