$( document ).ready(function() {



	$("#bloc-home .button-video").click(function() {

		initVideo($("#bloc-home"), "https://www.youtube.com/embed/I3X_tj-MWPM?autoplay=1");

	})

	function initVideo(parentContainer, videoSrc) {

		// Clone the prototype node
		var videoContainer = $("#prototype .video-component");

		// Erase all references to the protoypeNode
		videoContainer = videoContainer;

		parentContainer.html();
		// Set the component to append to parent src
		parentContainer.append(videoContainer);

		// Set the video src
		videoContainer.find('iframe').attr("src", videoSrc);

		// Active display
		videoContainer.find('iframe').addClass("active-video");

		blockScrolling($("body"));
		// handle close
		$(".closing-button.video").click(function() {
			console.log("meoiee");
			videoContainer.fadeOut(500);
			videoContainer.remove();

			enableScrolling($("body"));
		})
		return true;

	}
	function killScroll() {

	}
});