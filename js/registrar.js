$(document).ready(function(){
    $("#register").submit(function(e){
        var nome = $("#username").val();
        var email = $("#email").val();
        var senha =  $("#password").val($.MD5($("#password").val()));
        var repetir_senha = $("#repeat-password").val($.MD5($("#repeat-password").val()));

        var formData = $(this).serialize();
        alert(formData);
        
        $.ajax({
            type:"POST",
            url: "../php/registrar-usuario.php",
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
        }) ;

        return false;
    });
});