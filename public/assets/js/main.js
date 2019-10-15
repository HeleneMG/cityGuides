//SCROLLREVEAL
ScrollReveal().reveal('.titres', {
    duration: 400,
    distance: '10px',
    origin: 'top',
    delay: 300,
    interval: 300,
    reset: true
});
ScrollReveal().reveal('.inscription', {
    duration: 400,
    distance: '10px',
    origin: 'top',
    delay: 500,
    interval: 300,
    reset: true
});
ScrollReveal().reveal('.login', {
    duration: 400,
    distance: '10px',
    origin: 'top',
    delay:800,
    interval: 300,
    reset: true
});
ScrollReveal().reveal('.reserver button', {
    duration: 400,
    delay: 200,
    interval: 200,
    reset: true
});
ScrollReveal().reveal('#contact-form', {
    duration: 1000,
    origin: 'bottom',
    distance: '20px',
    delay: 200,
    reset: true
});
ScrollReveal().reveal('#search-form', {
    duration: 1000,
    origin: 'bottom',
    distance: '30px',
    delay: 200,
    reset: true
});

//NAVBAR+TOTOP
window.onscroll = function () { fixedNavbar(), scrollFunction() };
var mybutton = document.querySelector("#toTop");
var entete = document.querySelector(".entete");
var sticky = entete.offsetTop;


//FIXED NAVBAR
function fixedNavbar() {
    if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
        entete.classList.add("sticky");
    } else {
        entete.classList.remove("sticky");
    }
}

//SMOOTH SCROLLING TO ANCHORS
$('a[href*=\\#]').on('click', function (event) {
    event.preventDefault();
    $('html,body').animate({scrollTop: $(this.hash).offset().top}, 500);
});

//TO TOP BUTTON
function scrollFunction() {
    if (document.body.scrollTop > 600 || document.documentElement.scrollTop > 600) {
        $(mybutton).fadeIn(600);
    } else {
        $(mybutton).fadeOut(800)
    }
};

mybutton.addEventListener('click', function topFunction() {
    $("html, body").animate({ scrollTop: 0 }, 900);
});

//MENU HAMBURGER
$(document).ready(function () {
    $(".menuNav").hide();
    $(function () {
        $(".menuHamb").on("click", function () {
            $(".menuNav").toggle(200);
        })
        $(".arrow-back").on('click', function () {
            $(".menuNav").toggle(200);
        })
    })
})

//VUEJS
/*var app = new Vue({
    el: '#app',
    data: {
        message: 'Hello Vue!'
    }
})*/