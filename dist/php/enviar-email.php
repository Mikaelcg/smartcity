
 <?php

	date_default_timezone_set('Etc/UTC');
	require 'PHPMailer/PHPMailerAutoload.php';
	echo('deuboa');
    
	$mail= new PHPMailer;
	$mail->IsSMTP(); 
	$mail->CharSet = 'UTF-8';   
	$mail->SMTPDebug = 0;       // 0 = não mostra o debug, 2 = mostra o debug
	$mail->SMTPAuth = true;     
	$mail->SMTPSecure = 'ssl';  
	$mail->Host = 'smtp.gmail.com'; 
	$mail->Port = 465; 
	$mail->Username = 'webgrupo01'; 
	$mail->Password = 'melhorgrupo123';
	$mail->SetFrom('webgrupo01@gmail.com', 'SmartCity');
	$mail->addAddress($email,'');
	$mail->Subject = 'Titulo';
	$mail->msgHTML("Para confimar seu email, clique no link: <a href='localhost/smartcity/dist/php/pages/registro/confirmar-usuario.php?id=".$id."&codigo=".$codigo_confirmacao."'>Clique aqui</a>");
       
	$mail->send();
	

?>










