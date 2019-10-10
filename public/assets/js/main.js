window.onscroll = function () { fixedNavbar(), scrollFunction() };
var mybutton = document.querySelector("#toTop");
var entete = document.querySelector(".entete");
var sticky = entete.offsetTop;

//FIXED NAVBAR
function fixedNavbar() {
    if (window.pageYOffset >= sticky) {
        entete.classList.add("sticky")
    } else {
        entete.classList.remove("sticky");
    }
}

//SMOOTH SCROLLING TO ANCHORS
$('a[href*=\\#]').on('click', function (event) {
    event.preventDefault();
    $('html,body').animate({ scrollTop: $(this.hash).offset().top }, 500);
});

//TO TOP BUTTON
function scrollFunction() {
    if (document.body.scrollTop > 600 || document.documentElement.scrollTop > 600) {
        $(mybutton).fadeIn(800);
    } else {
        $(mybutton).fadeOut(800)
    }
}
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
    })
})

//VUEJS
/*var app = new Vue({
    el: '#app',
    data: {
        message: 'Hello Vue!'
    }
})*/