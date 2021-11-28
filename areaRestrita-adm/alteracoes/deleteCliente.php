<?php 
require_once('../models/Cliente.php');
header('Location: ../formularios/formulario-cliente.php');


$cliente = new Cliente();

$cliente->setId($_POST['idCliente']);

$cliente->delete($cliente);

