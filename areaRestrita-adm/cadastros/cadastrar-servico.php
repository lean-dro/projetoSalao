<?php 
    require_once('../models/Servico.php');

    header('Location: ../formularios/formulario-servico.php');

    $servico = new Servico();

    $servico->setDescServico($_POST['txtServico']);
    $servico->setTextoServico($_POST['txtTexto']);

    $nomeArquivo = $_FILES['fotoServico']['name'];
    $arquivo = $_FILES['fotoServico']['tmp_name'];

    $enderecoImagem = "../../images/servicos/".$nomeArquivo;
    move_uploaded_file($arquivo, $enderecoImagem);

    $servico->setFotoServico($enderecoImagem);
    $servico->cadastrar($servico);
?>