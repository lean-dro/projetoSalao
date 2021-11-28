<?php 
    require_once('../models/Servico.php');
    header('Location: ../formularios/formulario-servico.php');

    $servico = new Servico();

    $servico->setIdServico($_POST['idServico']);

    $servico->delete($servico);
?>
