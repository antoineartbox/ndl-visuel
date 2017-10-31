$(document).ready(function() {

    // Detect click on button
    $(".button.become-member.submit").click(function() {

        // Then submit related form
        $("form#form-membership").submit();
    });

    // Detect click on button
    $(".button.get-involve.submit").click(function() {
        console.log("salut");
        // Then submit related form
        $("form#form-involve").submit();
    });

    // Detect click on button
    $(".button.question.submit").click(function() {

        // Then submit related form
        $("form#question").submit();
    });

});
