
$(document).ready(function(){
    $("#residencias").change(function(){
        var id = $("#residencias").val();
        listaGastos(id);
    });

    $(".gastos > form").submit(function(e) {
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
				url: "../php/insere-gastos.php",
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

function listaGastos(id){
    var formData = $(this).serialize();

    $.ajax({
        type:"POST",
        data:{id: id},
        dataType: "json",
        url: "../php/informar-gastos.php",
        
        success: function(array){
            console.log(array["aparato"]);
            var conteudo_gastos = '';

            for(var i = 0; i < array["aparato"].length; i++){
                conteudo_gastos += '<option value="'+ array["aparato"][i]["id_aparato"] + '">' + array["aparato"][i]["aparato"] + '</option>';
            }


            $("#aparato").html(conteudo_gastos);
        }
    })

}