"use strict";
$(document).ready(function() {
    $("#clientes").length > 0 && $("#clientes").slick({
        slidesToShow: 5,
        slodesToScroll: 5,
        autoplay: !0,
        autoplaySpeed: 7e3,
        speed: 300,
        arrows: !0,
        dots: !1
    })
});
