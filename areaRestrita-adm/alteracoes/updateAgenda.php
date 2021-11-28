<?php 
    require_once('../models/Agenda.php');
    require_once('../models/Cliente.php');
    require_once('../models/Usuario.php');
    header('Location: ../formularios/formulario-agenda.php');

    $agenda = new Agenda();
    $cliente = new Cliente();
    $servico = new Servico();
    
    $data = $_POST['dtAgenda'];

    $agenda->setId($_POST['idAgenda']);

    $agenda->setData($data);
    $agenda->setHora($_POST['timeAgenda']);

    $cliente->setId($_POST['slCliente']);
    $agenda->setCliente($cliente);

    $servico->setIdServico($_POST['slServico']);
    $agenda->setServico($servico);


    $agenda->update($agenda);


?>