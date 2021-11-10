<?php
    require_once('../models/Cliente.php');

    $cliente = new Cliente();
    
    $cliente->setNomeCliente($_POST['txtNome']);
    
    $cliente->setCpfCliente($_POST['txtCpf']);
    
    $cliente->setCelularCliente($_POST['txtCel']);

    $cliente->cadastro($cliente);
?>