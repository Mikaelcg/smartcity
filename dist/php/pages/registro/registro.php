<?php
	
	$nome =       $_POST["nome"];
	$email =  $_POST["email"];
    $senha=      $_POST["password"];
    $confirmado = 0;

	include "../../conexao.php";

	$conexao = mysqli_connect($endereco, $usuario_banco, $senha_banco, $nome_banco);
     
	mysqli_query($conexao, " INSERT INTO usuario(nome, email, senha, confirmado) VALUES('$nome','$email','$senha', $confirmado) ");
?>