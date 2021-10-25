<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="css/reset.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">    
        <style>
        .navhover:hover{
            color: #03989E !important;
            font-weight: 700;
            transition: 0.1s;
        }
        </style>
        <link rel="shortcut icon" href="">
        <title>Home - Studio Papillon | Salão de Beleza</title>
    </head>
    <body>

    <nav class="navbar navbar-expand-md navbar-dark p-md-3 fixed-top">
            <div class="container">
                <img  class="img-fluid"  src="images/" alt="Logo do site" width="55%">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="mx-auto"></div>
                    <ul class="navbar-nav ">
                        <li class="nav-item"><a class="nav-link navhover" href="http://">Serviços</a></li>
                        <li class="nav-item"><a class="nav-link navhover" href="http://">Produtos</a></li>
                        <li class="nav-item"><a class="nav-link navhover" href="http://">Galeria</a></li>
                        <li class="nav-item"><a class="nav-link navhover" href="http://">Sobre nós</a></li>
                    </ul>  
                    <div class="mx-auto"></div>
                    <a href="login.php"><button class="btn btn-outline-light shadow">Login</button></a>
                </div>
            </div>
        </nav>
        


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