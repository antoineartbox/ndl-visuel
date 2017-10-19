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

    $(".become-involve").click(function() {
        $("#bloc-involve-overlay").addClass("active-involving");
        blockScrolling('body')

        $(".invole-form-container .closing-button").click(function() {

            $(this).parent().parent().removeClass("active-involving");
            enableScrolling('body');
        });
    });


});


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
