$( document ).ready(function() {
	var counter = 0;
	$(".menu-hambuger").click(function() {

		$(this).toggleClass("activated-menu-container");
		$(this).find($("span")).toggleClass("active-menu");

		$("#menu-container").toggleClass("display-menu-mobile");

		console.log(counter);
		if(counter % 2 == 0) {
			blockScrolling($("body"));
		} else {
			enableScrolling($("body"));
		}
		counter++;

	});

})