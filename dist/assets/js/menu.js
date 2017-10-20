// Data structures as [0] => blocInfos, [1] => "color"
var blocInfos = [$("#bloc-infos").offset().top, "blue", "bloc-infos"];
var blocEvents = [$("#bloc-events").offset().top, "transparent", "bloc-event"];
var blocInvolve = [$("#bloc-involve").offset().top, "transparent", "bloc-involve"];
var blocInvolveInfos = [$("#bloc-involve-infos").offset().top, "blue", "bloc-involve-infos"];
var blocQuestions = [$("#bloc-question").offset().top, "transparent", "block-question"]
var blocs = [blocInfos, blocEvents, blocInvolve,blocInvolveInfos, blocQuestions];

$(window).scroll(function() {

    var currentScroll = $(window).scrollTop();
    // Loop through all blocks
    for (var i = 0; i < blocs.length; i++) {
        var currentBlock = blocs[i];
        if (currentScroll >= currentBlock[0] && currentScroll < currentBlock[0] + 500) {
            displayMenuBackground(currentBlock)
        }
    }
});


function displayMenuBackground(blocInfos) {
    console.log(blocInfos);
    if (blocInfos[1] == "blue") {
        $('#menu-container').css({"background-color":"white"});
    } else {
        $('#menu-container').css({"background-color":"transparent"});
    }
}
