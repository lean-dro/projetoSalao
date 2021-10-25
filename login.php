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
        <title>Login - Studio Papillon</title>
    </head>
    <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-rosa p-md-3">
            <div class="container">
                <img class="img-fluid" src="images/" alt="Logo do site" width="55%">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="mx-auto"></div>
                    <ul class="navbar-nav ">
                        <li class="nav-item"><a class="nav-link" href="http://">Serviços</a></li>
                        <li class="nav-item"><a class="nav-link" href="http://">Produtos</a></li>
                        <li class="nav-item"><a class="nav-link" href="http://">Galeria</a></li>
                        <li class="nav-item"><a class="nav-link" href="http://">Sobre nós</a></li>
                    </ul>  
                    <div class="mx-auto"></div>
                    <a href="login.html"></a><button class="btn btn-outline-light shadow">Login</button></a>
                </div>
            </div>
        </nav>
  
    <div class="container-login">
        <h3 style="text-align: center">Desfrute ainda mais de nosso site!</h3> 
        <form  action="autentica-login.php" method="POST">
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

        <br><p class="p-login">Não tem cadastro? <b>Cadastra-se</b></p>
        <br><p class="p-login">Ao continuar com o acesso, você concorda com a nossa <br><b>Política de Privacidade<b></p>

        <?php
            if (isset($_COOKIE['cred-erro'])) {
                echo $_COOKIE['cred-erro'];
            }
        ?>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="text/javascript">
        var nav = document.querySelector('nav');

        window.addEventListener('scroll', function () {
            if (window.pageYOffset > 100) {
            nav.classList.add('bg-rosa', 'shadow', 'transiscao');
            nav.style.transition = "all 0.8s";
            } else {
            nav.classList.remove('bg-rosa', 'shadow');
            }
        });
        </script>
    </body>
</html>