<?php 
        include_once ('../sentinela.php'); 
?>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="../images-arearestrita/logo-shortcut.png" type="image/x-icon">
        <link rel="stylesheet" href="../css/reset.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="../css-areaRestrita/style.css">
        <title>Home - Admin</title>
    </head>
    <body>
      <div class="container">
        <h1 class="mt-5 text-center">Logo</h1>
        <div class="dashboard flex-row">
          <div class="float-start col-6">
            <form style="margin-top: -13%; width: 50%;margin-left: 10%;" action="autentica-login.php" method="POST">
                <h3 style="text-align: center">Login do Cliente</h3><br>
                <div class="mb-3">
                    <label class="form-label">Usuário:</label>
                    <input class="form-control" type="text" name="txtLogin" id="txtLogin">
                </div>
                <div class="mb-3">
                    <label class="form-label mt-2">Senha:</label>
                    <input class="form-control" type="password" name="txtSenha" id="txtSenha">
                </div>
                <div class="d-grid gap-2" style="padding-top: 10px;">
                    <button type="submit" class="btn btn-primary" value="Login">Acessar</button>
                </div>
            </form>
          </div>
          <div class="float-end col-6">
            <div class="container overflow-hidden">
                <div class="row gy-3">
                  <div class="col-lg-6 col-md-6 col-sm-12">
                    <a href="formulario-usuario.php"><button class="p-3 w-100 btn btn-info"><i class="bi bi-person-plus"></i> Cadastrar Usuário</button></a>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12">
                    <a href="formulario-cliente.php"><button class="p-3 w-100 btn btn-success"><i  class="bi bi-person-circle"></i> Cadastrar Cliente</button></a>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12">
                    <a href="formulario-servico.php"><button class="p-3 w-100 btn btn-Warning"><i class="bi bi-hammer"></i> Cadastrar Serviço</button></a>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12">
                    <a href="formulario-publicacao.php"><button class="p-3 w-100 btn btn-Secondary"><i class="bi bi-phone"></i>Cadastrar Publicação</button></a>
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
      </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>