<?php 
require_once('../models/Agenda.php');
header('Location: ../formularios/formulario-agenda.php');
$agenda = new Agenda();

$agenda->setId($_POST['idAgenda']);

$agenda->delete($agenda)

?>