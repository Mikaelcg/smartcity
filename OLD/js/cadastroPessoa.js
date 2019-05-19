$(document).ready(function() {

	listaIdResidencia();

	$(".mc_embed_signup > form").submit(function(e) {
		e.preventDefault(); // Prevent a new window from opening upon clicking 'Subscribe now' button

		var validForm = true; // Set initial state of valid form to true
		var inputArray = $(this).find("input.required"); // Find all required inputs and store them in array

		// Simple check for all inputs to make sure the value is not empty
		inputArray.each(function(item) {
			if ($(this).val() == "") {
				validForm = false;
				$(".mc_embed_signup .error-message").show(); // if empty, show error message
				$('.mc_embed_signup input.required').addClass('error'); // and highlight empty inputs
			}
		});

		// Everything checks out! Continue...
		if (validForm == true) {
			var formContainer = $(".mc_embed_signup");
			var formData = $(this).serialize(); // Format all info and get it ready for sendoff

			// AJAX magic coming up...
			$.ajax({
				type:"POST",
				url: "../php/insere-habitante.php",
				data: formData,
				// cache: false,
				// dataType: "json",
				// contentType: "application/json; charset=utf-8",
				// encode: true,

				error: function(err) {
					console.log("Uh, oh. There was an error:", err); // You broke something...
				},

				success: function(data) {
					console.log("Success! Here is the data:", data); // Yay!
				}
			}) 
			
			// All done! Let's show the user a success message:
			.done(function(data) {
				$(formContainer).hide(); // Hide the initial form

				$(".success-message").show(); // Show the checkmark
				$("svg").addClass("active"); // Start animation of checkmark
			});
		}

		return; // No go on form...
	}); // end of submit function
});

function listaIdResidencia(){
	$.ajax({
		type:"POST",
		dataType: "json",
		url: "../php/listar-residencia.php",

		success: function(array){
			console.log(array["residencia"]);
			
			var conteudo_residencias = '';

			for(var i = 0; i < array["residencia"].length; i++){
				conteudo_residencias += '<option value=' + '"' + array["residencia"][i]["id"] + '">' + array["residencia"][i]["id"] + ' - ' + array["residencia"][i]["endereco"] +', ' + array["residencia"][i]["numero"]  +', ' + array["residencia"][i]["cidade"] + "</option>";

			}


			$("#residencias").append(conteudo_residencias);
		}
	})
}
