<?php
	
	session_start();

	$nome =       $_POST["nome"];
	$email =  $_POST["email"];
    $senha=      $_POST["password"];
    $confirmado = 0;

	include "../../conexao.php";

	$conexao = mysqli_connect($endereco, $usuario_banco, $senha_banco, $nome_banco);
    
	mysqli_query($conexao, " INSERT INTO usuario(nome, email, senha, confirmado) VALUES('$nome','$email','$senha', $confirmado) ");

	$id = SELECT MAX(id) FROM usuario;

	$_SESSION["id"] = $id;

	date_default_timezone_set('Etc/UTC');
	require 'PHPMailer/PHPMailerAutoload.php';
    
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
	$mail->msgHTML('Clique no link ao lado para confirmar seu e-mail: ' + '<a href="confirmarEmail.php">Confirmar Email</a>');
       
	$mail->send();
?>