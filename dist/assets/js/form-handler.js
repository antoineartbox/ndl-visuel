$(document).ready(function () {

	// Detect click on button
	$(".button.become-member.submit").click(function () {

		var datastring = $("#form-membership").serialize();
		submitMembershipForm(datastring);

	});

	// Detect click on button
	$(".button.get-involve.submit").click(function () {
		console.log("salut");
		// Then submit related form
		$("form#form-involve").submit();
	});

	// Detect click on button
	$(".button.question.submit").click(function () {

		// Then submit related form
		$("form#question").submit();
	});


	function submitMembershipForm(datastring) {


		killFormDisplay($("#form-membership"));
		enableLoader($(".membership-form-container"));



		// Submit form via post method
		if (true) {
			$.ajax({
				method: "POST",
				url: "utils/forms/forms_process.php",
				data: datastring,
				success: function(output) {

					// If the response have a length then decode to JSON
					if(output.length > 0) {
						var decode = JSON.parse(output);
						if(decode.flag) {
							verifyError(decode.flag);
						}
					}

					enableFormDisplay($("#form-membership"));
					killLoader();
				}
			})
		}

		function verifyError(errors) {
			if(errors.length > 0) {
				console.log("errors have been spotte");
			}
		}
	}



	/*
	* Functions bellow allows display and hiding of element plus for the processing
	*
	* */
	function killFormDisplay(element) {
		element.fadeOut(25);
	}

	function enableFormDisplay(element) {
		element.fadeIn(50);
	}

	/*void f(x)
		x -> the parent element on wich you would like to happend the loader.image
	*/
	function enableLoader(elementToHappen) {
		elementToHappen.append("<img id='loader-image' src='assets/images/component/Spinner.svg'>")
	}

	// Fadeout all loader image then remove them from the dom
	function killLoader() {
		$("#loader-image").fadeOut(75).remove();
	}
});


