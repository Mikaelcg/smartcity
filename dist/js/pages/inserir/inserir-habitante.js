$(document).ready(function() {

    listaIdResidencia();
    
    $("#nomePopover").popover({
        html: true,
        trigger: 'click',
        placement: 'right',
        content: '<div class="media"><a href="#" class="pull-left"><img src="/smartcity/dist/img/Nome-libras.png" class="media-object" alt="Sample Image"></a></div>' 
    });

    $("#sobrenomePopover").popover({
        html: true,
        trigger: 'click',
        placement: 'right',
        content: '<div class="media"><a href="#" class="pull-left"><img src="/smartcity/dist/img/Sobrenome-libras.png" class="media-object" alt="Sample Image"></a></div>' 
    });

    $("#dataPopover").popover({
        html: true,
        trigger: 'click',
        placement: 'right',
        content: '<div class="media"><a href="#" class="pull-left"><img src="/smartcity/dist/img/Data-nascimento.png" class="media-object" alt="Sample Image"></a></div>' 
    });

    $("#mascPopover").popover({
        html: true,
        trigger: 'click',
        placement: 'right',
        content: '<div class="media"><a href="#" class="pull-left"><img src="/smartcity/dist/img/Masculino.png" class="media-object" alt="Sample Image"></a></div>' 
    });

    $("#femPopover").popover({
        html: true,
        trigger: 'click',
        placement: 'right',
        content: '<div class="media"><a href="#" class="pull-left"><img src="/smartcity/dist/img/Feminino.png" class="media-object" alt="Sample Image"></a></div>' 
    });

    $("#resPopover").popover({
        html: true,
        trigger: 'click',
        placement: 'right',
        content: '<div class="media"><a href="#" class="pull-left"><img src="/smartcity/dist/img/Residencia.png" class="media-object" alt="Sample Image"></a></div>' 
    });


    $("#cadastroPopover").popover({
        html: true,
        trigger: 'click',
        placement: 'right',
        content: '<div class="media"><a href="#" class="pull-left"><img src="/smartcity/dist/img/Cadastro.png" class="media-object" alt="Sample Image"></a></div>' 
    });


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
        
        if(validForm == true){
            var formData = $(this).serializeArray(); // Format all info and get it ready for sendoff
            console.log(formData);
    
            $.ajax({
                type:"POST",
                url: "../../dist/php/pages/inserir/inserir-habitante.php",
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

function listaIdResidencia(){
	$.ajax({
		type:"POST",
		dataType: "json",
		url: "../../dist/php/pages/relatorios/relatorios-residencias.php",

		success: function(array){
			console.log(array);
			
			var conteudo_residencias = '';

			for(var i = 0; i < array.length; i++){
				conteudo_residencias += '<option value=' + '"' + array[i]["id"] + '">' + array[i]["id"] + ' - ' + array[i]["endereco"] +', ' + array[i]["numero"]  +', ' + array[i]["cidade"] + "</option>";

			}


			$("#residencias").append(conteudo_residencias);
		}
	})
}
