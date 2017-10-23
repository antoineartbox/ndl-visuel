// Define variables
var blocInfos = [$("#bloc-infos").offset().top, "blue", "bloc-infos"];
var blocEvents = [$("#bloc-events").offset().top, "transparent", "bloc-event"];
var blocInvolve = [$("#bloc-involve").offset().top, "transparent", "bloc-involve"];
var blocInvolveInfos = [$("#bloc-involve-infos").offset().top, "blue", "bloc-involve-infos"];
var blocQuestions = [$("#bloc-question").offset().top, "transparent", "block-question"]
var blocs = [blocInfos, blocEvents, blocInvolve,blocInvolveInfos, blocQuestions];


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
});

// Define functions
function displayHeaderBackground(blocInfos) {

    if (blocInfos[1] == "blue") {
        $('header').css({"background-color":"white"});
    } else {
        $('header').css({"background-color":"transparent"});
    }
}
