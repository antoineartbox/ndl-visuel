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

	// Capitalize first character



}



function handleNewUserForm(form) {

}



function capitalizer(value) {
	value += value.charAt(0).toUpperCase();
	return value;
}