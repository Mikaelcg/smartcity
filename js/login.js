$(document).ready(function () {
	var working = false;

	$('.login').on('submit', function (e) {
		e.preventDefault();

		if (working) return;

		working = true;
		var $this = $(this),
		$state = $this.find('button > .state');
		$this.addClass('loading');
		$state.html('Authenticating');

		var nome = $("#username").val();
        var senha =  $("#password").val($.MD5($("#password").val()));

        var formData = $(this).serialize();
        alert(formData);

		$.ajax({
            type:"POST",
            url: "php/auth-hash.php",
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
					setTimeout(function () {
						$this.addClass('ok');
						$state.html('Welcome back!');
						sendEmail();
						setTimeout(function(){
							location.replace('paginas/paginaInicial.html');
						},11000)

						// setTimeout(function () {
						// 	location.replace('paginas/paginaInicial.html')
						// 	$state.html('Log in');
						// 	$this.removeClass('ok loading');
						// 	working = false;
						// }, 4000);
						
					}, 2000);
				}else{
					setTimeout(function () {
						$this.addClass('error');
						$state.html('Usuario ou senha incorretos');
						
						setTimeout(function () {
							$state.html('Log in');
							$this.removeClass('error loading');
							working = false;
						}, 4000);
						
					}, 2000);
				}
            }
		});
		
		return false;

		
	});

});

function sendEmail(){
	$.ajax({
		url: "php/enviar-email.php",

		success: function(){
			console.log("Email ennviado");
		}
	})
}