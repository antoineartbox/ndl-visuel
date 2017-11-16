$( document ).ready(function() {



	$("#bloc-home .button-video").click(function() {
		initVideo($("#bloc-home"), "https://www.youtube.com/embed/I3X_tj-MWPM?autoplay=1");
	})

	function initVideo(parentContainer, videoSrc) {

		// Clone the prototype node
		var videoContainer = $("#prototype .video-component");

		console.log($("évideo-component"));
		// Erase all references to the protoypeNode
		var prototypedVideoContainer = videoContainer;

		// Set the component to append to parent src
		parentContainer.append(prototypedVideoContainer);

		// Set the video src
		prototypedVideoContainer.find('iframe').attr("src", videoSrc);

		// Active display
		prototypedVideoContainer.find('iframe').addClass("active-video");

		blockScrolling($("body"));


	}
	function killScroll() {

	}
});