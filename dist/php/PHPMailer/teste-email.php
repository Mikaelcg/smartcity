
 <?php

	date_default_timezone_set('Etc/UTC');
	require 'PHPMailerAutoload.php';

	$tituloEmail = "Recuperar senha no Copel+";

	$message = 'oioioi';

	$mail= new PHPMailer;
	$mail->IsSMTP(); 
	$mail->CharSet = 'UTF-8';   
	$mail->SMTPDebug = 2;       // 0 = nao mostra o debug, 2 = mostra o debug
	$mail->SMTPAuth = true;     
	$mail->SMTPSecure = 'ssl';  
	$mail->Host = 'mail.copelmais.com'; 
	$mail->Port = 465; 
	$mail->Username = 'contato@copelmais.com'; 
	$mail->Password = 'Copel2019!@';
	$mail->SetFrom('contato@copelmais.com', 'Copel+');
	$mail->addAddress('eduardo.lino@pucpr.br','');
	$mail->Subject = $tituloEmail;
	$mail->msgHTML($message);
       
	$mail->send();


?>
