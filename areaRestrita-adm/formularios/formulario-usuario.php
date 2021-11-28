<?php
include_once('../sentinela-form.php');
include_once('../models/Usuario.php');

$usuario = new Usuario();
try {
  $linhasUsuario =  $usuario->listar();
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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="../css-areaRestrita/style.css">
  <title>Cadastro | Usuário</title>
</head>

<body>
  <div class="container">
    <a href="../index-ar.php"><img class="img-fluid mx-auto d-block mt-2" src="../images-arearestrita/logo-shortcut.png" width="100px"></a>
    <div class="dashboard row">
      <div class="float-start col-lg-6 col-md-12 col-sm-12">
        <form style="margin-top: -14%; width: 50%;margin-left: 25%;" action="../cadastros/cadastrar-usuario.php" method="POST">
          <h3 class="text-center">Usuário</h3><br>
          <div class="mb-3">
            <label class="form-label">Nome:</label>
            <input class="form-control" type="text" name="txtNome" id="txtNome" required>
          </div>
          <div class="mb-3">
            <label class="form-label mt-2">Login:</label>
            <input class="form-control" type="text" name="txtLogin" id="txtLogin" required>
          </div>
          <div class="mb-3">
            <label class="form-label mt-2">Senha:</label>
            <input class="form-control" type="password" name="txtSenha" id="txtSenha" required>
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
              <a href="formulario-usuario.php"><button class="p-3 w-100 btn btn-bgrosa"><i class="bi bi-person-plus"></i> Cadastrar Usuário</button></a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
              <a href="formulario-cliente.php"><button class="p-3 w-100 btn btn-bgrosa"><i class="bi bi-person-circle"></i> Cadastrar Cliente</button></a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
              <a href="formulario-servico.php"><button class="p-3 w-100 btn btn-bgrosa"><i class="bi bi-hammer"></i> Cadastrar Serviço</button></a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
              <a href="formulario-produto.php"><button class="p-3 w-100 btn btn-bgrosa"><i class="bi bi-basket"></i> Cadastrar Produto</button></a>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
              <a href="formulario-agenda.php"><button class="p-3 w-100 btn btn-bgrosa"><i class="bi bi-calendar-week"></i> Agendar</button></a>
            </div>
            <div class="col-lg-6 col-sm-12">
              <a href="../../logout.php"><button class="text-center p-3 w-100 btn btn-danger"><i class="bi bi-box-arrow-right"></i> Sair</button></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="mx-auto col-lg-8 col-md-12 col-sm-12 mt-4 table-responsive">
      <h1 class="text-center">Usuários</h1>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">
              <b>ID</b>
            </th>
            <th scope="col">
              <b>Nome</b>
            </th>
            <th scope="col">
              <b>Login</b>
            </th>
            <th scope="col">
              <b>Senha</b>
            </th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($linhasUsuario as $linha) { ?>
            <tr>
              <td scope="row">
                <?php echo $linha['idUsuario']; ?>
              </td>
              <td>
                <?php echo $linha['nomeUsuario']; ?>
              </td>
              <td>
                <?php echo $linha['loginUsuario']; ?>
              </td>
              <td>
                <?php echo $linha['senhaUsuario']; ?>
              </td>

              <td class="editar"> <i class="bi bi-pencil"></i>
                <!-- Botão de edição -->
                <a style="text-decoration: none;" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                  Editar</a>
                <!-- Collapse para edição -->

              </td>

              <td class="excluir" data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample2">
                <i class="bi bi-trash"></i>
                <a class="excluir" style="text-decoration: none;" href="#">
                  Excluir
                </a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
  <!-- COLLAPSES -->
  <div class="collapse" id="collapseExample">

    <div class="position-fixed bottom-0 end-0 p-3 me-3 formularioTab rounded-2 shadow border border-3" style="z-index: 11">
      <button class="btn-close float-end" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
        <!-- Formulário para edição -->
        <form class="form-floating  text-center" action="../alteracoes/updateUsuario.php" method="post">
      </button>
      <div class="mb-3">
        <label class="form-label">ID:</label>
        <input type="text" class="form-control" name="idUsuario" id="idUsuario" required autofocus>
      </div>
      <div class="mb-3">
        <label class="form-label">Login</label>
        <input type="text" class="form-control" name="loginUsuario" id="loginUsuario">
      </div>
      <div class="mb-3">
        <label class="form-label">Senha</label>
        <input type="text" class="form-control" name="senhaUsuario" id="senhaUsuario">
      </div>


      <button type="submit" class="btn bgazul  shadow float-end">Enviar</button>
    </div>
    </form>
  </div>


  <div class="collapse" id="collapseExample2">
    <div class="position-fixed bottom-0 end-0 p-3 me-3 formularioTab rounded-2 shadow border border-3" style="z-index: 11">
      <button class="btn-close float-end" data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample2">
        <!-- Formulário para edição -->
        <form class="form-floating  text-center" action="../alteracoes/deleteUsuario.php" method="post">
      </button>
      <div class="mb-3">
        <label class="form-label">ID:</label>
        <input type="text" class="form-control" name="idUsuario" id="idUsuario" autofocus required>
        <button type="submit" class="btn bgazul  shadow float-end mt-3">Excluir</button>
      </div>
      </form>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>