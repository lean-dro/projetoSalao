<?php 
    require_once('../models/Agenda.php');
    require_once('../models/Cliente.php');
    require_once('../models/Servico.php');
    require_once('../models/Usuario.php');
    header('location: ../formularios/formulario-agenda.php');

    $agenda = new Agenda();
    $cliente = new Cliente();
    $servico = new Servico();
    $usuario = new Usuario();

    $data = $_POST['dtAgenda'];

    $agenda->setData($data);
    $agenda->setHora($_POST['timeAgenda']);

    $cliente->setId($_POST['slCliente']);
    $agenda->setCliente($cliente);

    $servico->setIdServico($_POST['slServico']);
    $agenda->setServico($servico);

    $usuario->setIdUsuario($_POST['slUsuario']);
    $agenda->setUsuario($usuario);

    $agenda->cadastrar($agenda);

    
?>