<?php
include_once('../sentinela-form.php');
include_once('../models/Produto.php');
include_once('../models/Usuario.php');

$usuario = new Usuario();
$produto = new Produto();
try {
  $listaUsuario = $usuario->listar();
  $listaProduto = $produto->listar();
} catch (Exception $e) {
  print_r($e);
}
?>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="../images-arearestrita/logo-shortcut.png" type="image/x-icon">
  <link rel="stylesheet" href="../css-areaRestrita/reset.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="../css-areaRestrita/style.css">
  <title>Cadastro | Produto</title>
</head>

<body>
  <div class="container">
    <a href="../index-ar.php"><img class="img-fluid mx-auto d-block mt-2" src="../images-arearestrita/logo-shortcut.png"
        width="100px"></a>
    <div class="dashboard row">
      <div class="float-start col-lg-6 col-md-12 col-sm-12">
        <form style="margin-top: -14%; width: 50%;margin-left: 25%;" action="../cadastros/cadastrar-produto.php"
          method="POST" enctype="multipart/form-data">
          <h3 class="text-center">Produto</h3><br>
          <div class="mb-3">
            <label class="form-label">Usuário:</label>
            <select class="form-select" name="slUsuario" id="slUsuario">
              <?php
              foreach ($listaUsuario as $linha) {
                echo "<option value=$linha[idUsuario]>$linha[nomeUsuario]</option>";
              }
              ?>
            </select>
          </div>
          <div class="mb-3">
            <label class="form-label mt-2">Descrição:</label>
            <input class="form-control" type="text" name="txtDesc" id="txtDesc">
          </div>
          <div class="mb-3">
            <label class="form-label mt-2">Texto:</label>
            <input class="form-control" type="text" name="txtProd" id="txtProd">
          </div>
          <div class="mb-3">
            <label class="form-label mt-2">Foto:</label>
            <input class="form-control" type="file" name="fotoProduto" id="fotoProduto">
          </div>
          <div class="d-grid gap-2" style="padding-top: 10px;">
            <button type="submit" class="btn btn-primary mb-5" value="Login">Enviar</button>
          </div>
        </form>
      </div>
      <div class="float-end col-lg-6 col-md-12 col-sm-12">
        <div class="container overflow-hidden">
          <div class="row gy-3">
            <div class="col-lg-6 col-md-6 col-sm-12">
              <a href="formulario-usuario.php"><button class="p-3 w-100 btn btn btn-bgrosa"><i
                    class="bi bi-person-plus"></i> Cadastrar Usuário</button></a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
              <a href="formulario-cliente.php"><button class="p-3 w-100 btn btn-bgrosa"><i
                    class="bi bi-person-circle"></i> Cadastrar Cliente</button></a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
              <a href="formulario-servico.php"><button class="p-3 w-100 btn btn-bgrosa"><i class="bi bi-hammer"></i>
                  Cadastrar Serviço</button></a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
              <a href="formulario-produto.php"><button class="p-3 w-100 btn btn-bgrosa"><i class="bi bi-basket"></i>
                  Cadastrar Produto</button></a>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
              <a href="formulario-agenda.php"><button class="p-3 w-100 btn btn-bgrosa"><i
                    class="bi bi-calendar-week"></i> Agendar</button></a>
            </div>
            <div class="col-lg-6 col-sm-12">
              <a href="../../logout.php"><button class="text-center p-3 w-100 btn btn-danger"><i
                    class="bi bi-box-arrow-right"></i> Sair</button></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <h1 class="text-center">Produtos no sistema:</h1>
    <div class="container overflow-hidden">
      <div class="row gy-3">
        <?php foreach ($listaProduto as $linha) { ?>
        <div class="card col-lg-3 mx-auto p-3 mb-4" style="width: 18rem;">
          <img  src=<?php echo $linha['fotoProduto'] ?> alt=<?php echo $linha['descProduto'] ?> class="card-img-top">
          
          <div class="card-body">
            <h5 class="card-title">
              <?php echo $linha['descProduto'] ?>
            </h5>
            <ul class="list-group list-group-flush">
              <li class="list-group-item "><b>ID:</b>
                <?php echo $linha['idProduto'] ?>
              </li>
              <li class="list-group-item "><b>Texto:</b>
                <?php echo $linha['textoProduto'] ?>
              </li>
              <li class="list-group-item "><b>Endereço:</b>
                <?php echo $linha['fotoProduto'] ?>
              </li>
            </ul>
            <div class="card-text row ">
              <div class="editar text-center col-6">
                <i class="bi bi-pencil">
                  <a style="text-decoration: none;" data-bs-toggle="collapse" href="#collapseExample" role="button"
                    aria-expanded="false" aria-controls="collapseExample">
                    Editar
                  </a>
                </i>
              </div>

              <div class="excluir text-center float-end col-6">
                <i class="bi bi-trash"></i>
                <a class="excluir" style="text-decoration: none;"  data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false"
                aria-controls="collapseExample2">
                  Excluir
                </a>
              </div>

            </div>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </div>


  <!-- COLLAPSES -->
  <div class="collapse" id="collapseExample">

    <div class="position-fixed bottom-0 end-0 p-3 me-3 formularioTab rounded-2 shadow border border-3"
      style="z-index: 11">
      <button class="btn-close float-end" data-bs-toggle="collapse" href="#collapseExample" role="button"
        aria-expanded="false" aria-controls="collapseExample">
        <!-- Formulário para edição -->
        <form class="form-floating  text-center" action="../alteracoes/updateProduto.php" method="post" enctype="multipart/form-data">
      </button>
      <div class="mb-3">
        <label class="form-label mt-2">ID:</label>
        <input class="form-control" type="text" name="idProduto" id="idProduto">
      </div>
      <div class="mb-3">
        <label class="form-label mt-2">Descrição:</label>
        <input class="form-control" type="text" name="txtDesc" id="txtDesc">
      </div>
      <div class="mb-3">
        <label class="form-label mt-2">Texto:</label>
        <input class="form-control" type="text" name="txtProd" id="txtProd">
      </div>
      <div class="mb-3">
        <label class="form-label mt-2">Foto:</label>
        <input class="form-control" type="file" name="fotoProduto" id="fotoProduto">
      </div>

      <button type="submit" class="btn bgazul  shadow float-end">Enviar</button>
    </div>

    </form>
  </div>
  <div class="collapse" id="collapseExample2">
    <div class="position-fixed bottom-0 end-0 p-3 me-3 formularioTab rounded-2 shadow border border-3"
      style="z-index: 11">
      <button class="btn-close float-end" data-bs-toggle="collapse" href="#collapseExample2" role="button"
        aria-expanded="false" aria-controls="collapseExample2">
        <!-- Formulário para edição -->
        <form class="form-floating  text-center" action="../alteracoes/deleteProduto.php" method="post">
      </button>
      <div class="mb-3">
        <label class="form-label">ID:</label>
        <input type="text" class="form-control" name="idProduto" id="idProduto">
        <button type="submit" class="btn bgazul  shadow float-end mt-3">Excluir</button>
      </div>
      </form>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>