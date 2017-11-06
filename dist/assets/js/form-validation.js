$( document ).ready(function () {
	console.log("form validation file ready");

	// Get all input field
	var inputs = $(".form-user-input input");

	// Everytime a key is pressed, process to the single field validation
	inputs.keydown(function (){
		handleSingleField($(this));
	});
});

function handleSingleField(field) {

	// Case
	if(field[0].name == "email") {
		$(field[0]).addClass("not-valid");
		if(verifyEmail(field.val()) == "valid") {
			$(field[0]).removeClass("not-valid");
		}
	}

	if(field[0].name == "phone") {

	}
}


function verifyEmail(value) {


	var forcedCharacter = ["@", "."];
	var char = value.split("");
	var validator = 0;
	for(var i = 0; i < value.length; i++) {
		for(var j = 0; j < forcedCharacter.length; j++) {
			if(value[i] == forcedCharacter[j]) {
				validator++;
			}
		}
	}

	if(validator >= forcedCharacter.length) {
		return validateEmail(true);
	}
	return validateEmail(false);
}


function validateEmail(state) {
	if(state == true) {
		return "valid";
	} else {

		return "not";
	}
}