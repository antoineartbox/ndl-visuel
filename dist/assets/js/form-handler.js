$(document).ready(function () {

	// Detect click on button
	$(".button.become-member.submit").click(function () {

		// Build datas
		var datastring = $("#form-membership").serialize();

		// Clear error message
		$(".errors-container").html("");

		submitMembershipForm(datastring);

	});

	// Detect click on button
	$(".button.get-involve.submit").click(function () {

		// Build datas
		var datastring = $("#form-involve").serialize();
		console.log(datastring);

		// Clear error message
		$(".errors-container").html("");
		if(false){
			submitMembershipForm(datastring);
		}


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
				success: function (output) {
					console.log(output);
					if (output.length > 2) {
						var decode = JSON.parse(output);
						console.log(decode);
						if (decode.flag) {
							verifyError($(".membership-form-container .errors-container"), decode.flag);
							enableFormDisplay($("#form-membership"));
							killLoader();
						}
					} else {
						// If no error
						killLoader();
						validatedFormSuccess($(".membership-form-container"), "<h4>Merci de vous être inscrit</h4>");
						setTimeout(function(){ otherMessage(); }, 300);
						function otherMessage() {
							validatedFormSuccess($(".membership-form-container"), "<h4>Contactez vos courriels pour terminer l'inscription.</h4>");
						}
						$(document).click(function(){
							$("#bloc-membership-overlay").fadeOut(500);

						});
					}


				}
			})
		}
	}


	/*
	* void fx(x,y)
	* inputs => x = Dom element to use a parent à
	* 			y = erorrs

	* */
	function verifyError(domElement, errors) {

		// Each error case are done like this
		if(errors.email) {
			domElement.append("<div class='error email-error'>" + errors.email + "</div>");
			domElement.parent().find(".email-container").addClass("animated shake");
		}

		if(errors.username) {
			domElement.append("<div class='error username-error'>" + errors.username + "</div>");
			domElement.parent().find(".username-container").addClass("animated shake");
		}

	}

	function validatedFormSuccess(domElement, validationMessage) {
		domElement.append("<div class='animated bounceInLeft form-validation-message'>" + validationMessage + "</div>")
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


