<?php
include_once('../sentinela-form.php');
include_once('../models/Cliente.php');

$cliente = new Cliente();
try {
  $linhasCliente = $cliente->listar();
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
  <title>Cadastro | Cliente</title>
</head>

<body>
  <div class="container">
    <a href="../index-ar.php"><a href="../index-ar.php"><img class="img-fluid mx-auto d-block mt-2"
          src="../images-arearestrita/logo-shortcut.png" width="100px"></a></a>
    <div class="dashboard row">
      <div class="float-start col-lg-6 col-md-12 col-sm-12">
        <form style="margin-top: -14%; width: 50%;margin-left: 25%;" action="../cadastros/cadastrar-cliente.php"
          method="POST">
          <h3 class="text-center">Cliente</h3>
          <div class="mb-3">
            <label class="form-label">Nome:</label>
            <input class="form-control" type="text" name="txtNome" id="txtNome" required>
          </div>
          <div class="mb-3">
            <label class="form-label mt-2">CPF:</label>
            <input class="form-control" oninput="mascara(this)" type="text" name="txtCpf" id="txtCpf" required>
            <?php if (isset($_COOKIE['aviso'])) {
              echo "<h6 class=text-danger text-center>".$_COOKIE['aviso']."</h6>";
          } ?>
          </div>
          <div class="mb-3">
            <label class="form-label mt-2">N° do celular:</label>
            <input class="form-control" oninput="mascaraCell(this)" type="text" name="txtCel" id="txtCel" required>
          </div>
          <div class="d-grid gap-2" style="padding-top: 10px;">
            <button type="submit" class="btn btn-primary mb-5">Enviar</button>
          </div>
         
        </form>
      </div>
      <div class="float-end col-lg-6 col-md-12 col-sm-12">
        <div class="container overflow-hidden">
          <div class="row gy-3">
            <div class="col-lg-6 col-md-6 col-sm-12">
              <a href="formulario-usuario.php"><button class="p-3 w-100 btn btn-bgrosa"><i
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



    <div class="mx-auto col-lg-8 col-md-12 col-sm-12 mt-4 table-responsive">
      <h1 class="text-center">Clientes</h1>
      <table class="table">
        <thead>
          <tr>
            <th>
              <b>ID</b>
            </th>
            <th>
              <b>Nome</b>
            </th>
            <th>
              <b>CPF</b>
            </th>
            <th>
              <b>Celular</b>
            </th>
        </thead>

        <tbody>
          <?php foreach ($linhasCliente as $linha) { ?>
          <tr>
            <td>
              <?php echo $linha['idCliente']; ?>
            </td>
            <td>
              <?php echo $linha['nomeCliente']; ?>
            </td>
            <td>
              <?php echo $linha['cpfCliente'] ?>
            </td>
            <td>
              <?php echo $linha['celularCliente'] ?>
            </td>
            <td class="editar"> <i class="bi bi-pencil"></i>
              <!-- Botão de edição -->
              <a style="text-decoration: none;" data-bs-toggle="collapse" href="#collapseExample" role="button"
                aria-expanded="false" aria-controls="collapseExample">
                Editar</a>
              <!-- Collapse para edição -->
             
            </td>
            <td class="excluir" data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false"
              aria-controls="collapseExample2">
              <i class="bi bi-trash"></i>
              <a class="excluir" style="text-decoration: none;" href="#">
                Excluir
              </a>
            </td>
          </tr>
          <?php }?>
        </tbody>
      </table>
    </div>
  </div>


  <div class="collapse" id="collapseExample">

<div class="position-fixed bottom-0 end-0 p-3 me-3 formularioTab rounded-2 shadow border border-3"
  style="z-index: 11">
  <button class="btn-close float-end" data-bs-toggle="collapse" href="#collapseExample" role="button"
    aria-expanded="false" aria-controls="collapseExample">
    <!-- Formulário para edição -->
    <form class="form-floating  text-center" action="../alteracoes/updateCliente.php" method="post">
  </button>

  <div class="mb-3">
    <label class="form-label">ID</label>
    <input class="form-control" type="text" name="idCliente" id="idCliente required">
  </div>

  <div class="mb-3">
    <label class="form-label">Nome:</label>
    <input class="form-control" type="text" name="nomeCliente" id="nomeCliente" required>
  </div>


  <div class="mb-3">
    <label class="form-label">Celular:</label>
    <input class="form-control" type="text" name="celularCliente" oninput="mascaraCell(this)" id="celularCliente" required>
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
                  <form class="form-floating  text-center" action="../alteracoes/deleteCliente.php" method="post">
                </button>
                <div class="mb-3">
                  <label class="form-label">ID:</label>
                  <input type="text" class="form-control" name="idCliente" id="idCliente">
                  <button type="submit" class="btn bgazul  shadow float-end mt-3">Excluir</button>
                </div>
                </form>
              </div>
</div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

  <script>
    // créditos: https://pt.stackoverflow.com/questions/290505/m%C3%A1scara-de-entrada-para-cpf-no-formul%C3%A1rio-html-sem-plugin
    function mascara(i) {

      var v = i.value;

      if (isNaN(v[v.length - 1])) { // impede entrar outro caractere que não seja número
        i.value = v.substring(0, v.length - 1);
        return;
      }

      i.setAttribute("maxlength", "14");
      if (v.length == 3 || v.length == 7) i.value += ".";
      if (v.length == 11) i.value += "-";

    }

    function mascaraCell(i) {

      var v = i.value;

      if (isNaN(v[v.length - 1])) { // impede entrar outro caractere que não seja número
        i.value = v.substring(0, v.length - 1);
        return;
      }

      i.setAttribute("maxlength", "13");
      if (v.length == 2) i.value += " ";
      if (v.length == 8) i.value += "-";

    }
  </script>

</body>

</html>