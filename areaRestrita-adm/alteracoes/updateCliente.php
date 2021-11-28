<?php 
require_once('../models/Cliente.php');
header('Location: ../formularios/formulario-cliente.php');


$cliente = new Cliente();

$cliente->setId($_POST['idCliente']);
$cliente->setNomeCliente($_POST['nomeCliente']);
$cliente->setCelularCliente($_POST['celularCliente']);

$cliente->update($cliente);

