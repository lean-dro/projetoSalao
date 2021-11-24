var nav = document.querySelector('nav');
var imgNav = document.getElementById('imgNav');
var li = document.querySelector("#navbarSupportedContent > ul > li:nth-child(1) > a");
var li2 = document.querySelector("#navbarSupportedContent > ul > li:nth-child(2) > a");
var li3 = document.querySelector("#navbarSupportedContent > ul > li:nth-child(3) > a");
var li4 = document.querySelector("#navbarSupportedContent > ul > li:nth-child(4) > a");
var li5 = document.querySelector("#navbarSupportedContent > ul > li:nth-child(5) > a");

      
    window.addEventListener('scroll', function () {
            if (window.pageYOffset > 130) {
                nav.classList.add('bg-white', 'shadow');
                nav.style.transition = "all 0.8s";

                imgNav.setAttribute('src', 'images/logo-simple.png')
                imgNav.setAttribute('width', '240px')
                imgNav.style.transition = "all 1s";

                li.style.color = "black";
                li2.style.color = "black";
                li3.style.color = "black";
                li4.style.color = "black";
                li5.style.color = "black";

            } else {
                nav.classList.remove('bg-white', 'shadow');
                nav.style.transition = "all 0s";

                imgNav.setAttribute('src', 'images/logo-papillonT.png');
                imgNav.setAttribute('width', '200px')
                imgNav.style.transition = "all 1s";
                
                li.style.color ="white";
                li2.style.color ="white";
                li3.style.color ="white";
                li4.style.color ="white";
                li5.style.color ="white";
            }
        });




