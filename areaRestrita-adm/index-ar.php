<?php
include_once('sentinela.php');

include_once('models/Servico.php');
$servico = new Servico();

include_once('models/Cliente.php');
$cliente = new Cliente();

include_once('models/Produto.php');
$produto = new Produto();

include_once('models/Agenda.php');
$agenda = new Agenda();


  try {
    $linhaServico = $servico->qtd();
    $linhaCliente = $cliente->qtd();
    $linhaProduto = $produto->qtd();
    $linhaAgenda = $agenda->semana();
  } catch (Exception $e) {
    print_r($e);
  }
?>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="images-arearestrita/logo-shortcut.png" type="image/x-icon">
  <link rel="stylesheet" href="css/reset.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="css-areaRestrita/style.css">
  <title>Home - Admin</title>
</head>

<body>
  <div class="container">
    <img class="img-fluid mx-auto d-block mt-2" src="images-arearestrita/logo-shortcut.png" width="100px">
    <div class="dashboard row">
      <div class="float-start mt-4 col-6">
        <h1 style="font-family: Century Gothic; font-weight: bold;">Seja bem vindo, Adm. <h2 style="font-family: Century Gothic">Utilize o dashboard para controlar o sistema.</h2>
        </h1>
      </div>
      <div class="float-end col-6">
        <div class="container">
          <div class="row gy-3">
            <div class="col-lg-6 col-md-6 col-sm-12">
              <a href="formularios/formulario-usuario.php"><button class="p-3 w-100 btn btn-bgrosa"><i class="bi bi-person-plus"></i> Cadastrar Usuário</button></a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
              <a href="formularios/formulario-cliente.php"><button class="p-3 w-100 btn btn-bgrosa"><i class="bi bi-person-circle"></i> Cadastrar Cliente</button></a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
              <a href="formularios/formulario-servico.php"><button class="p-3 w-100  btn btn-bgrosa"><i class="bi bi-hammer"></i> Cadastrar Serviço</button></a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
              <a href="formularios/formulario-produto.php"><button class="p-3 w-100  btn btn-bgrosa"><i class="bi bi-basket"></i> Cadastrar Produto</button></a>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
              <a href="formularios/formulario-agenda.php"><button class="p-3 w-100 btn btn-bgrosa"><i class="bi bi-calendar-week"></i> Agendar</button></a>
            </div>
            <div class="col-lg-6 col-sm-12">
              <a href="../logout.php"><button class="text-center p-3 w-100 btn btn-danger"><i class="bi bi-box-arrow-right"></i> Sair</button></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    
    <div class="">

    </div>

    <h1 class="mt-5 h1 text-center">Infos:</h1>
    <div id="carouselExampleDark" class="carousel carousel-dark slide mb-3" data-bs-ride="carousel">
      <div class="carousel-inner">
        
        <!-- Card 1 -->
        <div class="carousel-item active ">
          <div class="card d-block mx-auto" style="width: 18rem;">
            <img src="images-arearestrita/cliente.jpg" class="card-img-top" >
            <div class="card-body text-center">
              <h5 class="card-title text-center">Clientes</h5>
              <p class="card-text">Temos 
               <?php foreach($linhaCliente as $qtdC){
                  echo $qtdC ['Qtd'];
                }?> clientes cadastrados</p>
            </div>
          </div>
        </div>
        
        <!-- Card 2 -->
        <div class="carousel-item">
          <div class="card d-block mx-auto" style="width: 18rem;">
            <img src="images-arearestrita/servico.jpg" class="card-img-top" >
            <div class="card-body">
              <h5 class="card-title text-center">Serviços</h5>
              <p class="card-text text-center">Temos 
                <?php foreach($linhaServico as $qtdS){ 
                  echo $qtdS['Qtd']; }?> 
              serviços cadastrados.</p>
            </div>
          </div>
        </div>
        
        <!--Card  3-->
        <div class="carousel-item">  
          
          <div class="card d-block mx-auto" style="width: 18rem;">
            <img src="images-arearestrita/produto.jpg" class="card-img-top" >
            <div class="card-body">
              <h5 class="card-title text-center">Produtos</h5>
              <p class="card-text text-center">Temos 
              <?php foreach ($linhaProduto as $qtdP) {
                echo $qtdP['Qtd'];
              }?>  
              produtos cadastrados.</p>
            </div>
          </div>
        </div>

<!-- Card 4 -->
        <div class="carousel-item"> 
        <div class="card d-block mx-auto" style="width: 18rem;">
            <img src="images-arearestrita/agenda.jpg" class="card-img-top" >
            <div class="card-body">
              <h5 class="card-title text-center">Agenda</h5>
              <p class="card-text text-center">A próxima data na agenda é 
              <?php foreach ($linhaAgenda as $qtdA) {
              echo $qtdA['Prox'];
              }?>.</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Botões -->
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>