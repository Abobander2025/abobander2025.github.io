var isMobile_android = /Android/i.test(navigator.userAgent);
var isMobile_ios = /iPhone|iPad|iPod/i.test(navigator.userAgent);

if (isMobile_android) {
    document.getElementById("testContent").style.display = "block";
}

if (isMobile_ios) {
    document.getElementById("testContent_1").style.display = "block";
}



function mySidenav() {
    document.getElementById("mySidenav").style.width = "300px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0%";
}



$(document).ready(function() {


    $('.message span').click(function(){
        $('.message').fadeOut(120);
    });


    $('.hidden-xx i').click(function () {
        $('.the-after').fadeIn(500);
    });

    $('.closebtn').click(function () {
        $('.the-after').fadeOut(500);
    });

    $('.fast-code .code').click(function () {
        $('.done').fadeIn(500);


        setTimeout(function(){
            $('.done').fadeOut(700);
        }, 3000);

    });






});

$('.the-slider').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    rtl: true,
    autoplay: true,
    pagination: true,
    autoplayTimeout: 6000,
    smartSpeed: 5000,
    dragEndSpeed: 5000,
    animate: true,
    animateOut: 'fadeOutUp',
    animateIn: 'fadeIn',
    navText: [
        "<i class='fa fa-chevron-right'></i> ",
        "<i class='fa fa-chevron-left'></i>"
    ],
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
});


$('.testmonials-slider').owlCarousel({
    loop: true,
    margin: 20,
    nav:false,
    rtl: true,
    autoplay: true,
    pagination: true,
    autoplayTimeout: 6000,
    smartSpeed: 1200,
    dragEndSpeed: 1500,
    animate: true,
    animateOut: 'fadeOutUp',
    animateIn: 'fadeIn',
    navText: [
        "<i class='fa fa-chevron-right'></i> ",
        "<i class='fa fa-chevron-left'></i>"
    ],
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        1000: {
            items: 3
        }
    }
});


function myFunction() {
    var x = document.getElementById("myInput");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.maxHeight) {
            panel.style.maxHeight = null;
        } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
        }
    });
}