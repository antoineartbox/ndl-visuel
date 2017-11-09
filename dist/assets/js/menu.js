// Define variables
var blocHome= [$("#bloc-home").offset().top, "blue", "bloc-home"];
var blocInfos = [$("#bloc-infos").offset().top, "blue", "bloc-infos"];
var blocEvents = [$("#bloc-events").offset().top, "transparent", "bloc-event"];
var blocInvolve = [$("#bloc-involve").offset().top, "transparent", "bloc-involve"];
var blocInvolveInfos = [$("#bloc-involve-infos").offset().top, "blue", "bloc-involve-infos"];
var blocQuestions = [$("#bloc-question").offset().top, "transparent", "block-question"]
var blocs = [blocInfos, blocEvents, blocInvolve,blocInvolveInfos, blocQuestions];

var menuInfos = $(".menu-infos");
var menuAbout = $(".menu-about");
var menuEvents = $(".menu-events");
var menuInvolve = $(".menu-involve");
var blocQuestion = $("#bloc-question");

// Define Pin
var homeAnchor = $(".menu-home-anchor");
var infosAchor = $(".menu-infos-anchor");
var eventAnchor = $(".menu-events-anchor");
var involveAnchor = $(".menu-involve-anchor");
var involeInfosAnchor = $(".menu-involve-infos-anchor");
var questionAnchor = $(".menu-question-anchor");

// Define user behaviour
$(window).scroll(function() {

    var currentScroll = $(window).scrollTop();
    // Loop through all blocks
    for (var i = 0; i < blocs.length; i++) {
        var currentBlock = blocs[i];
        if (currentScroll >= currentBlock[0] && currentScroll < currentBlock[0] + 500) {
            displayHeaderBackground(currentBlock)
        }
    }

    // Verify Menu
	printCurrentBlocMenu(currentScroll);

});

// Define functions
function displayHeaderBackground(blocInfos) {

    if (blocInfos[1] == "blue") {

    } else {

    }
}

// Handle menu color changing
// Get all menus items
function printCurrentBlocMenu(scroll) {
	clearMenu();

	clearAnchor();
	if(scroll > blocHome[0] && scroll < (blocHome[0] + window.innerHeight)) {



		$("#menu-linker li").addClass("all-blue");

		homeAnchor.addClass("single-white");

	} else if(scroll > blocInfos[0] && scroll < (blocInfos[0] + window.innerHeight)) {
        menuAbout.css({
            "background-color":"#004588",
            "color" : "white"
        });


		$("#menu-linker li").addClass("all-white");
		infosAchor.addClass("single-blue");

    } else if(scroll > blocEvents[0] && scroll < (blocEvents[0] + window.innerHeight)) {
		menuEvents.css({
            "background-color":"#004588",
            "color":"white"
        });


		$("#menu-linker li").addClass("all-blue");

		eventAnchor.addClass("single-white");


	} else if(scroll > blocInvolve[0] && scroll < (blocInvolve[0] + (window.innerHeight))) {
		menuInvolve.css({
			"background-color":"#004588",
			"color":"white"
		});

		$("#menu-linker li").addClass("all-blue");
		involveAnchor.addClass("single-white");

	} else if (scroll > blocInvolveInfos[0] && scroll <(blocInvolveInfos[0]) + window.innerHeight) {
		menuInvolve.css({
			"background-color":"#004588",
			"color":"white"
		});
		$("#menu-linker li").addClass("all-white");
		involveAnchor.addClass("single-blue");

	} else if (scroll > blocQuestions[0] && scroll <(blocQuestions[0]) + window.innerHeight) {


		questionAnchor.addClass("single-white");
	}
}

function clearMenu() {

    $("#menu-div li.menu-item").css({
        "background-color" : "transparent",
        'color' : "#004588"
    });
}

function clearAnchor() {



	$("#menu-linker li").removeClass("all-white");
	$("#menu-linker li").removeClass("all-blue");
	$("#menu-linker li").removeClass("single-white");
	$("#menu-linker li").removeClass("single-blue");

}

