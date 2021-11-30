<?php 
    require_once('../models/Servico.php');
    header('Location: ../formularios/formulario-servico.php');
   

    $servico = new Servico();

    $servico->setIdServico($_POST['idServico']);
    $servico->setDescServico($_POST['descServico']);
    $servico->setTextoServico($_POST['textServico']);


    $nomeArquivo = $_FILES['fotoServico']['name'];
    $arquivo = $_FILES['fotoServico']['tmp_name'];

    $enderecoImagem = "../../images/servicos".$nomeArquivo;
    move_uploaded_file($arquivo, $enderecoImagem);

    $servico->setFotoServico($enderecoImagem);
    
    $servico->update($servico);
?>