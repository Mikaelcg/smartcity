<?php
	$nome =       $_POST["nome"];
	$email =  $_POST["email"];
    $senha=      $_POST["password"];
	$confirmado = 0;
	$codigo_confirmacao  = md5(uniqid(rand()));
	$email_validation = true;

	include "../../conexao.php";

	$conexao = mysqli_connect($endereco, $usuario_banco, $senha_banco, $nome_banco);

	$email_data = mysqli_query($conexao, "SELECT email FROM usuario");

	$cont = 0;
	while($dados = mysqli_fetch_assoc($email_data)){
		if($dados["email"] == $email){
			$email_validation = false;
		}

		$cont++;
	}

	if($email_validation == false){
		echo json_encode($email_validation);
	}else{
		mysqli_query($conexao, " INSERT INTO usuario(nome, email, senha, confirmado, codigo_confirmacao) VALUES('$nome','$email','$senha', $confirmado, '$codigo_confirmacao') ");
	
		$id = $conexao->insert_id;
		
		include "../../enviar-email.php";
	}
    
 ?>