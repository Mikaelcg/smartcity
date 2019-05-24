
 <?php

	

	date_default_timezone_set('Etc/UTC');
	require 'PHPMailer/PHPMailerAutoload.php';

	$email =  $_POST["email"];
	$id =  $_POST["id"];

	echo($id);
    
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
	$mail->msgHTML($id);
       
	$mail->send();
	

?>










