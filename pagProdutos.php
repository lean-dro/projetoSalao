<?php
include_once('areaRestrita-adm/models/Produto.php');

$produto = new Produto();
try {
  $listaProduto = $produto->listar();
} catch (Exception $e) {
  print_r($e);
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
            body{
              background-image: url('images/bgHome.jpg');
              background-size: cover;
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

    <nav class="navbar navbar-expand-lg bg-white navbar-dark p-md-1">
            <div class="container">
                <a class="navbar-brand" href="index.php"><img id="imgNav" class="logoNav " src="images/logo-papillonR.png" alt="Logo do site" width="200px"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="mx-auto"></div>
                    <li class="nav-item hover-underline-animation display-1" style="color: #2B0E64;">Nossos Produtos</li>                </div>
            </div>
        </nav>

        .div.
        <?php foreach ($listaProduto as $linha) { ?>
        <div class="card col-lg-3 mx-auto p-3 mb-4" style="width: 18rem;">
          <img  src=<?php echo $linha['fotoProduto'] ?> alt=<?php echo $linha['descProduto'] ?> class="card-img-top">
          
          <div class="card-body">
            <h5 class="card-title">
              <?php echo $linha['descProduto'] ?>
            </h5>
            <ul class="list-group list-group-flush">
              <li class="list-group-item "><b>ID:</b>
                <?php echo $linha['idProduto'] ?>
              </li>
              <li class="list-group-item "><b>Texto:</b>
                <?php echo $linha['textoProduto'] ?>
              </li>
              <li class="list-group-item "><b>Endereço:</b>
                <?php echo $linha['fotoProduto'] ?>
              </li>
            </ul>
            <div class="card-text row ">
              <div class="editar text-center col-6">
                <i class="bi bi-pencil">
                  <a style="text-decoration: none;" data-bs-toggle="collapse" href="#collapseExample" role="button"
                    aria-expanded="false" aria-controls="collapseExample">
                    Editar
                  </a>
                </i>
              </div>

              <div class="excluir text-center float-end col-6">
                <i class="bi bi-trash"></i>
                <a class="excluir" style="text-decoration: none;"  data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false"
                aria-controls="collapseExample2">
                  Excluir
                </a>
              </div>

            </div>
          </div>
        </div>
        <?php } ?>
        
    </body>
</html>