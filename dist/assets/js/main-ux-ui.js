"use strict"
$( document ).ready(function() {

// Code to be executed when the whole document object model has loaded
    // Handle closing toggling membership menu
    $(".become-member-container .button").click(function() {

        $("#bloc-membership-overlay").addClass("active-membership");
        blockScrolling('body')

        $(".membership-form-container .closing-button").click(function() {

            $(this).parent().parent().removeClass("active-membership");
            enableScrolling('body');
        });
    })

    // Handle closing of involve
    $(".become-involve").click(function() {
        $("#bloc-involve-overlay").addClass("active-involving");
        blockScrolling('body')

        $(".invole-form-container .closing-button").click(function() {

            $(this).parent().parent().removeClass("active-involving");
            enableScrolling('body');
        });
    });


    // Handle video
    $(".button.button-video").click(function() {
        displayVideo(true);

        $(".closing-button.video").click(function() {
            displayVideo(false);
        });

    });

});


function displayVideo(active) {
    var height;
    if(!active) {
        height = "0%";
    } else {
        height = "100%";
    }

    $(".video-foreground iframe").animate({
        "height" : height
    }, 1000, function() {
        // This function is trigger when the animation is done

        // Display Button for closing video
        $(".closing-button.video").addClass("active-button-video");
    });
}

function blockScrolling(element) {
    $(element).css({
        overflow: 'hidden',
        height: '100%'
    });
}

function enableScrolling(element) {
    $(element).css({
        overflow: 'auto',
        height: 'auto'
    });
}

/**/
