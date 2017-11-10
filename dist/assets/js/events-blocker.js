$(document).ready(function () {

	$(".single-event-container").click(function() {

		$(".menu-membership").trigger("click");
	});
	if ($(".blocked-access").length > 0) {
		$(".single-event-container").click(function () {
			$(this).addClass("animated shake");

			// Wait 600ms and then remove the previously addedd class
			setTimeout(function () {
				$(".single-event-container").removeClass("animated shake");
			}, 600);
		})
	}
});
