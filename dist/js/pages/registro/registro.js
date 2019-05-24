$(document).ready(function() {

	// listaIdResidencia();

	$("#form").submit(function(e) {
        $('#loading').css("display", "initial");
        $('#alert-success').css("display", "none");
        $('#alert').css("display", "none");
        $('#alert2').css("display", "none");

        var validForm = true; // Set initial state of valid form to true
        var inputArray = $(this).find("input"); // Find all required inputs and store them in array

        var senha_hash = $.md5($("#password").val());
        var senha_hash2 = $.md5($("#repeatpassword").val());
        $("#password").val(senha_hash);
        $("#repeatpassword").val(senha_hash);
        
        if(senha_hash != senha_hash2){
            $("#password").val("");
            $("#repeatpassword").val("");
            $('#alert2').css("display", "block");
            return false

        }else{

            // Simple check for all inputs to make sure the value is not empty
            inputArray.each(function(item) {
                if ($(this).val() == "") {
                    validForm = false;
                }
            });
            
            if(validForm == true){
                var formData = $(this).serializeArray(); // Format all info and get it ready for sendoff
                console.log(formData);
                sendEmail(formData);

                $("#nome").val("");
                $("#email").val("");
                $("#password").val("");
                $("#repeatpassword").val("");
        
                $.ajax({
                    type:"POST",
                    url: "../../dist/php/pages/registro/registro.php",
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
        }

		return false; 
    }); 
});

function sendEmail(formData){
	$.ajax({
        type:"POST",
        url: "../../dist/php/enviar-email.php",
        data: formData,

		success: function(){
			console.log("Email enviado");
		}
	})
} 

