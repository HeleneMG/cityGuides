window.onscroll = function () { scrollFunction() };
var mybutton = document.querySelector("#toTop");

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
