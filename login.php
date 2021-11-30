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
        <link rel="shortcut icon" href="images/logo-shortcut.png">
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
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="mx-auto"></div>
                </div>
            </div>
        </nav>
  
    <div class="container-login"><br><br>
        <h3 style="text-align: center; font-family: Century Gothic; font-size: 50px">LOGIN</h3><br>
        <form action="autentica-login.php" method="POST">
            <div class="mb-3">
                <label class="form-label">Usuário:</label>
                <input class="form-control" type="text" name="txtLogin" id="txtLogin">
            </div>
            <div class="mb-3">
                <label class="form-label mt-2">Senha:</label>
                <input class="form-control" type="password" name="txtSenha" id="txtSenha">
            </div>
            <div class="d-grid gap-2" style="padding-top: 10px;">
                <button type="submit" class="btn btn-primary" value="Login"><b>Acessar</b></button>
            </div>
        </form>

        <br><p class="p-login">Ao continuar com o acesso, você concorda com a nossa <br><b>Política de Privacidade<b></p>

        <?php
            if (isset($_COOKIE['cred-erro'])) {
                echo $_COOKIE['cred-erro'];
            }
        ?>

    </div>

    <footer class="pag-footer-copyright fixed-bottom">
            <div class="footer-copyright text-center py-2" style="background-color: #F1C5A9;font-weight: 500;">
                © Copyright 2021 Studio Papillon - Salão de Beleza. Todos os direitos reservados.
            </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>