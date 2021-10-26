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
        <link rel="shortcut icon" href="">
        <title>Home - Studio Papillon | Salão de Beleza</title>
    </head>
    <body>
    <header>
        <div class="menu-toggle" id="hamburger">
            <i class="fas fa-bars"></i>
        </div>
        <div class="overlay"></div>
        <div class="container-nav">
            <nav>
                <h1 class="brand"><a href="index.html">Br<span>a</span>nd</a></h1>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="text/javascript">
        var open = document.getElementById('hamburger');
        var changeIcon = true;

        open.addEventListener("click", function(){

            var overlay = document.querySelector('.overlay');
            var nav = document.querySelector('nav');
            var icon = document.querySelector('.menu-toggle i');

            overlay.classList.toggle("menu-open");
            nav.classList.toggle("menu-open");

            if (changeIcon) {
                icon.classList.remove("fa-bars");
                icon.classList.add("fa-times");

                changeIcon = false;
            }
            else {
                icon.classList.remove("fa-times");
                icon.classList.add("fa-bars");
                changeIcon = true;
            }
        });
        </script>
    </body>
</html>