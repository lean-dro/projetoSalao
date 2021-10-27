var nav = document.querySelector('nav');
      window.addEventListener('scroll', function () {
            if (window.pageYOffset > 100) {
                nav.classList.add('bg-white', 'shadow');
                nav.style.transition = "all 0.8s";
            } else {
                nav.classList.remove('bg-white', 'shadow');
                nav.style.transition = "all 0.8s";
            }
        });

    var imgNav = document.getElementById('imgNav');
        window.addEventListener('scroll', function () {
            if (window.pageYOffset > 100) {
            imgNav.setAttribute('src', 'images/logo-papillonR.png')
            nav.style.transition = "all 1s";
            } else {
            imgNav.setAttribute('src', 'images/logo-papillonT.png');
            nav.style.transition = "all 1s";
            }
        });
    
        var li = document.querySelector("#navbarSupportedContent > ul > li:nth-child(1) > a");
        var li2 = document.querySelector("#navbarSupportedContent > ul > li:nth-child(2) > a");
        var li3 = document.querySelector("#navbarSupportedContent > ul > li:nth-child(3) > a");
        var li4 = document.querySelector("#navbarSupportedContent > ul > li:nth-child(4) > a");
        window.addEventListener('scroll', function () {
            if (window.pageYOffset > 100) {
                li.style.color = "black";
                li2.style.color = "black";
                li3.style.color = "black";
                li4.style.color = "black";
                li.style.transition = "all 1.3s";
                li2.style.transition = "all 1.4s";
                li3.style.transition = "all 1.5s";
                li4.style.transition = "all 1.6s";
            } else {
                li.style.color = "white";
                li2.style.color = "white";
                li3.style.color = "white";
                li4.style.color = "white";
                li.style.transition = "all 1.3s";
                li2.style.transition = "all 1.4s";
                li3.style.transition = "all 1.5s";
                li4.style.transition = "all 1.6s";
            }
        });
        window.scroll({
            top: 1000, // Captura a distancia do topo onde deseja ser rolado
            left: 0,// Faz o mesmo do top mas em um ambito horizontal
            behavior: 'smooth' // Aqui eh onde vem toda a magica, ele suporta duas opcoes, o `smooth` e o `normal`
        })