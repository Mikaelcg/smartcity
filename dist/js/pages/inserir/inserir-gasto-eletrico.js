$(document).ready(function() {

    listaIdResidencia();

    var today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
    var yyyy = today.getFullYear();
    var data =String(dd + '/' + mm + '/' + yyyy);
    

    $("#datepicker").val(data);
    
    $("#residencias").change(function(){
        listaAparatos($("#residencias").val());
    })

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
        
        if( $('#residencias').val() == '' || $('#residencias').val() == null ){
            validForm = false;
        }
        if( $('#aparatos').val() == '' || $('#aparatos').val() == null ){
            validForm = false;
        }
        
        if(validForm == true){
            var formData = $(this).serializeArray(); // Format all info and get it ready for sendoff
            console.log(formData);
    
            $.ajax({
                type:"POST",
                url: "../../dist/php/pages/inserir/inserir-gasto-eletrico.php",
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

function listaAparatos(idResidencia){
    $.ajax({
		type:"POST",
		dataType: "json",
		url: "../../dist/php/pages/relatorios/relatorios-aparatos.php",

		success: function(array){
			console.log(array);
			
			var conteudo_residencias = '';
            
			for(var i = 0; i < array.length; i++){
                if(array[i].id_residencia == idResidencia){
                    conteudo_residencias += '<option value=' + '"' + array[i]["id"] + '">' + array[i]["id"] +  "</option>";
                }
			}

            
			$("#aparatos").append(conteudo_residencias);
		}
	})
}

function listaIdResidencia(){
	$.ajax({
		type:"POST",
		dataType: "json",
		url: "../../dist/php/pages/relatorios/relatorios-residencias.php",

		success: function(array){
			// console.log(array);
			
			var conteudo_residencias = '';

			for(var i = 0; i < array.length; i++){
				conteudo_residencias += '<option value=' + '"' + array[i]["id"] + '">' + array[i]["id"] + ' - ' + array[i]["endereco"] +', ' + array[i]["numero"]  +', ' + array[i]["cidade"] + "</option>";

			}


			$("#residencias").append(conteudo_residencias);
		}
	})
}

