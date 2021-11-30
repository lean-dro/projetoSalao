<?php
include_once('areaRestrita-adm/models/Servico.php');

$servico = new Servico();

try {
    $listaServico = $servico->listar();
    $qtd = $servico->qtd();
} catch (Exception $e) {
    print_r($e);
}
foreach ($qtd as $linhaQtd) {
    $quantidadeServicos = $linhaQtd['Qtd'];
}
?>
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

            @media only screen and (max-width:710px) {
                .banner-image {
                    background-image: url('images/bgHomePhone.jpg') !important;
                }
            }

            /* css da barra de rolagem */
            ::-webkit-scrollbar {
                width: 10px;
                
            }
            
            /* Track */
            ::-webkit-scrollbar-track {
                background: #03989E; 
            }
            
            /* Handle */
            ::-webkit-scrollbar-thumb {
                background: #2B0E64; 
                border-radius: 4px;
            }
            
            /* Handle on hover */
            ::-webkit-scrollbar-thumb:hover {
                background: #2B0E64; 
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
                        <p class="fs-6" style="text-align:left">Um salão pequeno, planejado apenas para oferecer alguns serviços
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
                    <div class="col-lg-12 col-md-12 text-center" style="padding-top: 110px; ">
                        <div style="width: 140px; height: 3px; background: #03989E; margin-bottom: 15px; margin-left: 5px"></div>
                        <h2 id="Produtos" style="font-size: 38px; font-weight: 600; text-align: left;">SERVIÇOS</h2>
                    </div>

                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <?php for ($i=0; $i < $quantidadeServicos; $i++) { ?>    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to=<?php echo $i+1?> aria-label=<?php echo "Slide ".$i+2?>></button><?php } ?>
                        </div>
                        <div class="carousel-inner mx-auto">
                            <div class="carousel-item active">
                                <img src="images/bgHome.jpg" class="d-block w-75 mx-auto  rounded-2" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>First slide label</h5>
                                    <p>Some representative placeholder content for the first slide.</p>
                                </div>
                            </div>
            
                        
                            
                            <?php foreach ($listaServico as $linha) { ?>
                                <div class="carousel-item">
                                    <img class="d-block w-75 mx-auto  rounded-2" src = <?php echo str_replace("../../"," ",$linha['fotoServico']);?>>
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5><?php echo $linha['descServico'];?></h5>
                                        <p><?php echo $linha['textoServico'];?></p>
                                    </div> 
                                </div>   
                            <?php }?>
                            
                            
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true" style="color: #03989E;"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
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



        <div class="container-sm">
            <hr class="featurette-divider" style="margin: 3rem 0;">

        </div>

        <div class="parallax">
            <div class="text-end me-5">
            <p class="pt-5 me-5 fs-4"><img  src="images/telefone.svg" width="32px" alt="" srcset=""> 11 11111-1111</p>
            <p class="mt-4 me-5 fs-4"><img  src="images/zap.svg" width="32px" alt="" srcset=""> 11 11111-1111</p>
            <p class="mt-4 me-5 fs-5"><img  src="images/email.svg" width="32px" alt="" srcset=""> studiopapillon_sac@studiopapillon.com.br</p>
            </div>
        </div>

        <!-- parte do fale conosco -->
        <div class="container-conteudo">
            <div class="container-fale" style="padding-top: 60px">
                    <div class="row row-cols-2">
                        <div class="col-lg-6">
                            <div style="width: 140px; height: 3px; background: #03989E; margin-bottom: 15px; margin-left: 5px"></div>
                                <p style="font-size: 38px; font-weight: 600; text-align: left;"> Fale conosco! Envie <font color="#03989E">sugestões</font>
                                ou solicite um <font color="#03989E">orçamento</font> pelo formulário.</p><br>
                                <p style="text-align: left;">Rua Felíciano Mendonça, 290 <br> Guaianases, São Paulo - SP
                        </div>

                        <div class="col">
                        
                        </div>
                    </div>
            </div>
        </div>



        <!-- arrumar um jeito de centralizar o footer, tentei centralizar apenas utilizando o "padding-left"
            porém tava cagando tudo, tava deixando de ser responsivo no celular-->


        <!-- footer -->
        <footer class="bg-light text-center text-lg-start">
                <!-- Grid container -->
                <div class="container-footer p-3 t">
                    <!--Grid row-->
                    <div class="row " style="text-align: left;">
                        <div class="col-lg-1 col-md-12 mb-4 mb-md-0" style="padding-top: 30px;">
                            <img src="images/lg-papillon2.png" width="80px">
                        </div>

                        <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
                                <p style="padding-top: 10px"> Nosso salão planejado para oferecer serviços à beleza e estética feminina, assim como,
                                conta com salas estruturadas para serviços específicos. E possuímos um espaço
                                preparado para tornar a permanência de nossos clientes mais agradável.
                                </p>
                        </div>

                        <div class="col-lg-5 col-md-6 mb-4 mb-md-0">
                                <ul class="list-unstyled">
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

                <div class="text-center py-2" style="background-color: #F1C5A9;">
                    © Copyright 2021 Studio Papillon - Salão de Beleza. Todos os direitos reservados.
                </div>
            </footer>


        <script src="https://kit.fontawesome.com/a076d05399.js%22%3E"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="js/script.js"></script>
    </body>
</html>