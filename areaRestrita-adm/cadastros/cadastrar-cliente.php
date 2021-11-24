<?php
    require_once('../models/Cliente.php');
    header('location: ../formularios/formulario-cliente.php');
    
    $cliente = new Cliente();
    
    $cliente->setNomeCliente($_POST['txtNome']);
    
    $cliente->setCpfCliente($_POST['txtCpf']);
    
    $cliente->setCelularCliente($_POST['txtCel']);

    $cliente->cadastro($cliente);
?>