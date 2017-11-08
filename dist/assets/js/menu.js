// Define variables
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
        $('header').css({"background-color":"white"});
    } else {
        $('header').css({"background-color":"transparent"});
    }
}

// Handle menu color changing
// Get all menus items
function printCurrentBlocMenu(scroll) {
	clearMenu();

    if(scroll > blocInfos[0] && scroll < (blocInfos[0] + 700)) {
        menuAbout.css({
            "background-color":"#004588",
            "color" : "white"
        });
    } else if(scroll > blocEvents[0] && scroll < (blocEvents[0] + 700)) {
		menuEvents.css({
            "background-color":"#004588",
            "color":"white"
        });
    } else if(scroll > blocInvolve[0] && scroll < (blocInvolve[0] + 700)) {
		menuInvolve.css({
			"background-color":"#004588",
			"color":"white"
		});
    }
}

function clearMenu() {

    $("#menu-div li.menu-item").css({
        "background-color" : "transparent",
        'color' : "#004588"
    });
}


