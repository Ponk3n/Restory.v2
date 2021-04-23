$(document).ready(function () {

    $(window).scroll(function () {
        if ($(this).scrollTop() > 1) {
            $('.page-title').addClass("sticky");
        }
        else {
            $('.page-title').removeClass("sticky");
        }
    });

});


// Under this comment comes a toggle for removing/adding the responsive class to topnavbar
/* function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnavbar") {
        x.className += " responsive";
    } else {
        x.className = "topnavbar";
    }
} */