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
                height: 200% !important;

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
                        <li class="nav-item hover-underline-animation"><a class="nav-link" href="#Servicos">SOBRE NÓS</a></li>
                        <li class="nav-item hover-underline-animation"><a class="nav-link" href="#Produtos">SERVIÇOS</a></li>
                        <li class="nav-item hover-underline-animation"><a class="nav-link" href="#Galeria">PRODUTOS</a></li>
                        <li class="nav-item hover-underline-animation"><a class="nav-link" href="#Sobre">GALERIA</a></li>
                        <li class="nav-item hover-underline-animation"><a class="nav-link" href="login.php">ADMIN</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center"></div>
        
        <!-- container do conteudo todo -->
        <div class="container-conteudo">

            <div class="container-sobre">
                <div class="row featurette">
                    <div class="col-lg-6 col-md-12" style="padding-top: 100px; ">
                    <!-- pequeno traço -->
                    <div style="width: 140px; height: 3px; background: #03989E; margin-bottom: 15px; margin-left: 5px"></div>
                    <h2 id="Sobre" style="font-size: 38px; font-weight: 600; text-align: left; padding-bottom: 12px">SOBRE NÓS</h2>
                    <h5 style="text-align:left; text-transform:uppercase; font-weight: 700">Agradável e moderno, tendo os melhores profissionais.</h5>
                    <p class="fs-5" style="text-align:left">Um salão pequeno, planejado apenas para oferecer alguns serviços
                        à beleza e estética feminina, nasceu em Guaianases, com o objetivo de se tornar um espaço grande
                        capaz de ter serviços diversificados, salas estruturadas. Com o passar do anos, isso se tornou
                        realidade e viramos um dos melhores salões de beleza e estética de São Paulo, possuindo um espaço
                        preparado para tornar a permanência de nossos clientes mais agradável. Aqui fazemos mudanças acontecerem, de acordo com o significado que a borboleta, símbolo
                        do nosso salão, traz.</p>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12" style="padding-top: 40px;">
                        <img class="img-fluid" src="images/sobre-salao2.png" width="600px">
                    </div>
            </div>
        </div>

            <div class="container-produto">
                <div class="row">
                    <div class="col-lg-6 col-md-12 " style="padding-top: 110px; ">
                    <div style="width: 140px; height: 3px; background: #03989E; margin-bottom: 15px; margin-left: 5px"></div>
                        <h2 id="Produtos" style="font-size: 38px; font-weight: 600; text-align: left;">PRODUTOS</h2>
                        <p class="fs-4 text center textCont">Produtos que podém esta presente no nosso salão: Shampoo, Condicionador, Mascaras de tratamento, Finalizador, Creme para pentear, Tintas e materiais para pintura de cabelo e Produtos para frizz! </p>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <img class="imgCont img-fluid mx-auto d-block" src="#" width="#" alt="">
                    </div>
                </div>
            </div>

            <!--<div class="container-sm">
                <hr class="featurette-divider" style="margin: 3rem 0;">
            </div>-->

            <div class="container-servicos">
                <div class="row">
                    <div class="col-lg-6 col-md-12 " style="padding-top: 110px; ">
                    <div style="width: 140px; height: 3px; background: #03989E; margin-bottom: 15px; margin-left: 5px"></div>
                        <h2 id="Produtos" style="font-size: 38px; font-weight: 600; text-align: left;">SERVIÇOS</h2>
                    </div>

                    <div class="card">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img
                            src="https://mdbootstrap.com/img/new/standard/nature/111.jpg"
                            class="img-fluid"
                            />
                            <a href="#!">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">HAIR STYLISTS
                            </h5>
                            <p class="card-text">
                            Some quick example text to build on the card title and make up the bulk of the
                            card's content.
                            </p>
                            <a href="#!" class="btn btn-primary">Button</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-galeria">
                <div class="row">
                    <div class="col-lg-6 col-md-12 " style="padding-top: 110px; ">
                    <div style="width: 140px; height: 3px; background: #03989E; margin-bottom: 15px; margin-left: 5px"></div>
                        <h2 id="Produtos" style="font-size: 38px; font-weight: 600; text-align: left;">GALERIA</h2>
                        
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <img class="imgCont img-fluid mx-auto d-block" src="#" width="#" alt="">
                    </div>
                </div>
            </div>

        </div> <!-- fim do container-conteudo -->

        <div class="container-sm">
            <hr class="featurette-divider" style="margin: 3rem 0;">
        </div>
        
        <p class="text-center">parallax</p>

        <div class="container-sm">
            <hr class="featurette-divider" style="margin: 3rem 0;">
        </div>

        <p class="text-center">fale conosco</p>


        <!-- arrumar um jeito de centralizar o footer, tentei centralizar apenas utilizando o "padding-left"
        porém tava cagando tudo, tava deixando de ser responsivo no celular-->


        <!-- footer -->
        <footer class="bg-light text-center text-lg-start">
            <!-- Grid container -->
            <div class="container p-4">
                <!--Grid row-->
                <div class="row" style="text-align: left;">
                    <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                            <h5 class="text-uppercase">Footer text</h5>
                            <p style="font-weight:inherit"> Nosso salão planejado para oferecer serviços à beleza e estética feminina, assim como,
                            conta com salas estruturadas para serviços específicos. E possuímos um espaço
                            preparado para tornar a permanência de nossos clientes mais agradável.
                            </p>
                    </div>

                    <div class="col-lg-5 col-md-6 mb-4 mb-md-0">
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <p style="padding: 0px; font-weight: 600;"><span style="color: #03989E; margin-right: 10px; font-family: Arial;">▻</span>
                                    <a href="#!" class="text-dark">SOBRE NÓS</a></p>
                                </li>
                                <li>
                                    <p style="padding: 0px; font-weight: 600;"><span style="color: #03989E; margin-right: 10px;">▻</span>
                                    <a href="#!" class="text-dark">PRODUTOS</a></p>
                                </li>
                                <li>
                                    <p style="padding: 0px; font-weight: 600;"><span style="color: #03989E; margin-right: 10px;">▻</span>
                                    <a href="#!" class="text-dark">SERVIÇOS</a></p>
                                </li>
                                <li>
                                    <p style="padding: 0px; font-weight: 600;"><span style="color: #03989E; margin-right: 10px;">▻</span>
                                    <a href="#!" class="text-dark">GALERIA</a></p>
                                </li>
                            </ul>
                    </div>
                </div>
            </div>

            <div class="text-center p-3" style="background-color: #F1C5A9;">
                © Copyright 2021 Studio Papillon - Salão de Beleza. Todos os direitos reservados.
            </div>
        </footer>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="js/script.js"></script>
        </body>
</html>