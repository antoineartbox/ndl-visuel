$( document ).ready(function() {

	$(".menu-hambuger").click(function() {
		$(this).toggleClass("activated-menu-container");
		$(this).find($("span")).toggleClass("active-menu");

		$("#menu-container").toggleClass("display-menu-mobile");
	});

})