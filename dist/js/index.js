$(document).ready(function() {

	// listaIdResidencia();

	$("#form").submit(function(e) {
        $('#alert-success').css("display", "none");
        $('#alert').css("display", "none");
        $('#alert2').css("display", "none");

        var validForm = true; // Set initial state of valid form to true
        var inputArray = $(this).find("input"); // Find all required inputs and store them in array

        var senha_hash = $.md5($("#senha").val());
        $("#senha").val(senha_hash);
        
            // Simple check for all inputs to make sure the value is not empty
        inputArray.each(function(item) {
            if ($(this).val() == "") {
                validForm = false;
            }
        });
        
        if(validForm == true){
            $('#loading').css("opacity", "1");
            var formData = $(this).serializeArray(); // Format all info and get it ready for sendoff
            console.log(formData);

            $.ajax({
                type:"POST",
                url: "dist/php/pages/index.php",
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
                    
                    if(data == 1){
                        setTimeout(() => {
                            $('#loading').css("opacity", "0");
                            $('#alert-success').css("display", "block");

                            setTimeout(() => {
                                location.replace('pages/dashboard.html');
                            }, 1500);
                        }, 1000);
                    }else{
                        $('#loading').css("opacity", "0");
                        $('#alert2').css("display", "block");
                    }
                }
            })
        }else{
            $('#loading').css("opacity", "0");
            $("#senha").val("");
            $('#alert').css("display", "block");
        }
        

		return false; 
    }); 
});
