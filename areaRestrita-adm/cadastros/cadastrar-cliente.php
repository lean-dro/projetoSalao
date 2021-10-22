<?php
    require_once("model/Cliente.php");
    header('Location: indexRestrito.php');

    $cliente = new Cliente();
    
    $cliente->setNomeCliente($_POST['txtNome']);
    
    $cliente->setCpfCliente($_POST['txtCpf']);
    
    $cliente->setCelularCliente($_POST['txtCelular']);
    


?>