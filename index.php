<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="css/reset.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link rel="stylesheet" href="css/nav.css">
        <link rel="stylesheet" href="css/style.css">    
        <link rel="shortcut icon" href="images/logo-shortcut.png">
        <style>
        .banner-image {
            background-image: url('images/bgHome.jpg');
            background-size: cover;
         }
         .parallax {
            /* The image used */
            background-image: url('../images/pallx.jpg');
        
            /* Full height */
            height: 200%!important; 
        
            /* Create the parallax scrolling effect */
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        </style>
        <title>Home - Studio Papillon | Salão de Beleza</title>
    </head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-dark p-md-1 fixed-top ">
            <div class="container">
                <a class="navbar-brand" href="index.php"><img id="imgNav" class="logoNav" src="images/logo-papillonT.png" alt="Logo do site" width="200px"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                    </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="mx-auto"></div>
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="#Servicos">SERVIÇOS</a></li>
                        <li class="nav-item"><a class="nav-link" href="#Produtos">PRODUTOS</a></li>
                        <li class="nav-item"><a class="nav-link" href="#Galeria">GALERIA</a></li>
                        <li class="nav-item me-md-0 me-lg-5"><a class="nav-link" href="#Sobre">SOBRE NÓS</a></li>
                    </ul>  
                    <div class="botaoNavLogin"><a href="login.php"><button class="btn btn-outline-light shadow col-md-12">Login</button></a></div>
                </div>
            </div>
        </nav>
        
        <div class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center"></div>
        <div class="container-sm"><hr class="featurette-divider" style="margin: 3rem 0;"></div>
       
            <div class="container">
                <div class="row">
                    <div class="lead col-lg-6 col-md-12">
                        <h2 id="Servicos" class="text-center">Serviços</h2>
                        <p class="fs-4 text-center textCont">Nós oferecemos serviços com foco na beleza e estética capilar. Por aqui você encontra diversos serviços, como: hidratação, corte, pintura, botox, progressiva, escova, penteados, luzes,  relaxamento, cauterização, entre outros! </p>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <img class="imgCont img-fluid mx-auto d-block" src="images/servicos1.jpg" width="100%" alt="">
                    </div>
                </div>
            </div>
        
            <div class="container-sm"><hr class="featurette-divider" style="margin: 3rem 0;"></div>
       
            <div class="container">
               
                <div class="row">   
                   
                    <div class="col-lg-6 col-md-12">
                        <h2 id="Produtos" class="text-center">Produtos</h2>
                        <p class="fs-4 text center textCont">Produtos que podém esta presente no nosso salão: Shampoo, Condicionador, Mascaras de tratamento, Finalizador, Creme para pentear, Tintas e materiais para pintura de cabelo e Produtos para frizz! </p>
                    </div>
                
                <div class="col-lg-6 col-md-12">
                    <img class="imgCont img-fluid mx-auto d-block" src="#" width="#" alt="">
                </div>
                </div>
            </div>
        
            <div class="container-sm"><hr class="featurette-divider" style="margin: 3rem 0;"></div>

            <div class="container">
                  
                    <h2 id="Galeria" class="text-center">Galeria</h2>
                    <h3 class="text-center">Confira nossa galeria!</h3>
                    
            </div>
               


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/script.js">
    </script>
    </body>
</html>