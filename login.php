<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="shortcut icon" href="images-arearestrita/logo-shortcut.png" type="image/x-icon">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">    
        <link rel="stylesheet" href="css/nav.css">   
        <title>Login - Studio Papillon | Salão de Beleza</title>
        <style>
            body{
                background-color: white!important;
                color: black;
            }
            
            .navbar-dark .navbar-nav .nav-link {
                font-family: Century Gothic;
                color: black;
                font-weight: 500;
                font-size: 20px;
            }       
            .navbar-dark .navbar-nav .nav-link:hover {
                font-weight: 600;
                color: black;
            }


        </style>
    </head>
    <body>

    <nav class="navbar navbar-expand-lg bg-white navbar-dark p-md-1 shadow">
            <div class="container">
                <a class="navbar-brand" href="index.php"><img id="imgNav" class="logoNav" src="images/logo-papillonR.png" alt="Logo do site" width="200px"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                    </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="mx-auto"></div>
                        <ul class="navbar-nav">
                            <li class="nav-item hover-underline-animation"><a class="nav-link" href="index.php#Servicos">SERVIÇOS</a></li>
                            <li class="nav-item hover-underline-animation"><a class="nav-link" href="index.php#Produtos">PRODUTOS</a></li>
                            <li class="nav-item hover-underline-animation"><a class="nav-link" href="index.php#Galeria">GALERIA</a></li>
                            <li class="nav-item me-md-0 me-lg-5 hover-underline-animation"><a class="nav-link" href="index.php">SOBRE NÓS</a></li>
                        </ul>  
                </div>
            </div>
        </nav>
  
    <div class="container-login">
        <h3 style="text-align: center; font-family: Century Gothic;">Desfrute ainda mais de nosso site!</h3><br>
        <form action="autentica-login.php" method="POST">
            <h3 style="text-align: center; font-family: Century Gothic;">LOGIN</h3><br>
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

        <br><p class="p-login">Ao continuar com o acesso, você concorda com a nossa <br><b>Política de Privacidade<b></p>

        <?php
            if (isset($_COOKIE['cred-erro'])) {
                echo $_COOKIE['cred-erro'];
            }
        ?>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="text/javascript">

    </script>
    </body>
</html>