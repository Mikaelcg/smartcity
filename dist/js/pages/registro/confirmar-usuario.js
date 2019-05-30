$(document).ready(function() {

    $.ajax({
        type:"GET",
        url: "../../dist/php/pages/registro/confirmar-usuario.php",
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

});

