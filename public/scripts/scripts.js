$(document).ready(function () {

    $(".select-cardapio").on("change", function () {
        // a = $(this).selectedIndex().text;
        link = $("option:selected", this).attr("data-href");

        window.location = link;
        // console.log(link);
    });

    $(".ranger .botoes a").click(function (e) {
        e.preventDefault();

        input = $(this).closest(".ranger").find("input");

        val = input.attr("value");

        if ($(this).hasClass('mais')) {
            input.attr("value", ++val);
        } else if ($(this).hasClass("menos")) {
            input.attr("value", (val > 1) ? (--val) : val);
        }
    });

    $('[data-toggle="popover"]').popover({
        html: true
    });

    /* Menu Mobile */
    $(".btn-menu-mob").click(function () {
        // alert("abrir");
        $(".menu-mob").animate({right: "0"});
    });

    $(".menu-mob .fechar").click(function () {
        $(".menu-mob").animate({right: "-100%"});
    });
    // Fechar se clicar fora do Menu
    $(".container").click(function () {
        $(".menu-mob").animate({right: "-100%"});
    })
    /* Fim Menu Mobile */

    /* OWL-CAROUSEL */
    $(".slide-1").owlCarousel({
        navigation: true, // Show next and prev buttons
        pagination: false,
        slideSpeed: 300,
        paginationSpeed: 400,
        singleItem: true,
        autoPlay: true
    });

    $(".slide-3").owlCarousel({
        navigation: true, // Show next and prev buttons
        slideSpeed: 300,
        paginationSpeed: 400,
        autoPlay: true,
        items: 3,
        // itemsDesktop : false,
        // itemsDesktopSmall : false,
        itemsTablet: 2,
        itemsMobile: 1
    });
    $(".slide-5").owlCarousel({
        navigation: true, // Show next and prev buttons
        pagination: false,
        slideSpeed: 300,
        paginationSpeed: 400,
        autoPlay: true,
        items: 5,
        itemsDesktop: [1000, 5], //5 items between 1000px and 901px
        itemsDesktopSmall: [900, 3], // betweem 900px and 601px
        itemsTablet: [600, 1], //1 item between 600 and 0
        itemsMobile: true
    });

    $(".owl-buttons .owl-prev").html("<i class='fa fa-angle-left'></i>");
    $(".owl-buttons .owl-next").html("<i class='fa fa-angle-right'></i>");
    /* FIM OWL-CAROUSEL */

    $(function () {
        //Abre o Popup
        $('[data-modal-open]').on('click', function (e) {
            $("html").addClass("modal-aberto");
            var targeted_modal_class = $(this).attr('data-modal-open');
            //$('[data-modal="' + targeted_modal_class + '"]').fadeIn(550);
            $('[data-modal="' + targeted_modal_class + '"]').css("display", "flex").hide().fadeIn();
            e.preventDefault();
        });

        //Fecha o Popup
        $('[data-modal-close]').on('click', function (e) {
            $("html").removeClass("modal-aberto");
            var targeted_modal_class = $(this).attr('data-modal-close');
            $('[data-modal="' + targeted_modal_class + '"]').fadeOut(550);
            e.preventDefault();
        });

        //Fecha o Popup quando clicar fora
        $('.modal').bind('click', function (e) {
            if (e.target === this) {
                $("html").removeClass("modal-aberto");
                $('.modal').fadeOut(550);
            }

        });
    });
});