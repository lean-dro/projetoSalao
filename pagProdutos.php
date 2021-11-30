<?php
include_once('areaRestrita-adm/models/Produto.php');

$produto = new Produto();
try {
  $listaProduto = $produto->listar();
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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="../css-areaRestrita/style.css">
  <title> Produtos </title>
    </head>

    <body>
    <div class="container">
    <?php foreach ($listaProduto as $linha) { ?>
        <img  src=<?php echo $linha['fotoProduto'] ?> alt=<?php echo $linha['descProduto'] ?>>
        <?php } ?>
    </div>
    </body>
</html> me ajuda a montar esse carousel, eu vou te dar a string de quantos servicos tem e vc vai montar essa parte aqui se liga