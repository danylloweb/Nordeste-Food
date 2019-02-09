$(document).ready(function(){
	/* Menu Mobile */
	$(".btn-menu-mob").click(function() {
		// alert("abrir");
		$(".menu-mob").animate({right: "0"});
	});

	$(".menu-mob .fechar").click(function(){
		$(".menu-mob").animate({right: "-100%"});
	});
	// Fechar se clicar fora do Menu
	$(".container").click(function(){
		$(".menu-mob").animate({right: "-100%"});
	})
	/* Fim Menu Mobile */

	/* OWL-CAROUSEL */   
	$(".slide-1").owlCarousel({
		navigation : true, // Show next and prev buttons
		pagination: false,
		slideSpeed : 300,
		paginationSpeed : 400,
		singleItem:true,
		autoPlay: true
	});

	$(".slide-3").owlCarousel({
		navigation : true, // Show next and prev buttons
		slideSpeed : 300,
		paginationSpeed : 400,
		autoPlay: true,
		items : 3, 
		// itemsDesktop : false,
		// itemsDesktopSmall : false,
		itemsTablet: 2,
		itemsMobile : 1
	});
	$(".slide-5").owlCarousel({
		navigation : true, // Show next and prev buttons
		pagination : false,
		slideSpeed : 300,
		paginationSpeed : 400,
		autoPlay: true,
		items : 5,
		itemsTablet: 2,
		itemsMobile : 1
	});

	$(".owl-buttons .owl-prev").html("<i class='fa fa-chevron-left'></i>");
	$(".owl-buttons .owl-next").html("<i class='fa fa-chevron-right'></i>");
	/* FIM OWL-CAROUSEL */   
});