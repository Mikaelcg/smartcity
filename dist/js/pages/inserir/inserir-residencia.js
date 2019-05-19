$(document).ready(function() {

	// listaIdResidencia();

	$("#form").submit(function(e) {
        $('#loading').css("display", "initial");
        $('#alert-success').css("display", "none");
        $('#alert').css("display", "none");

        var validForm = true; // Set initial state of valid form to true
		var inputArray = $(this).find("input"); // Find all required inputs and store them in array

		// Simple check for all inputs to make sure the value is not empty
		inputArray.each(function(item) {
			if ($(this).val() == "") {
				validForm = false;
			}
		});
        
        if(validForm == true){
            var formData = $(this).serializeArray(); // Format all info and get it ready for sendoff
    
            $.ajax({
                type:"POST",
                url: "../../dist/php/pages/inserir/inserir-residencia.php",
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

                    setTimeout(() => {
                        $('#loading').css("display", "none");
                        $('#alert-success').css("display", "block");
                    }, 1000);
                }
            })
        }else{
            $('#alert').css("display", "block");
            $('#loading').css("display", "none");
        }

		return false; 
    }); 
});

// function listaIdResidencia(){
// 	$.ajax({
// 		type:"POST",
// 		dataType: "json",
// 		url: "../php/listar-residencia.php",

// 		success: function(array){
// 			console.log(array["residencia"]);
			
// 			var conteudo_residencias = '';

// 			for(var i = 0; i < array["residencia"].length; i++){
// 				conteudo_residencias += '<option value=' + '"' + array["residencia"][i]["id"] + '">' + array["residencia"][i]["id"] + ' - ' + array["residencia"][i]["endereco"] +', ' + array["residencia"][i]["numero"]  +', ' + array["residencia"][i]["cidade"] + "</option>";

// 			}


// 			$("#residencias").append(conteudo_residencias);
// 		}
// 	})
// }
