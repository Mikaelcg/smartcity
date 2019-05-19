<?php
	
	$nome =       $_POST["nome"];
	$sobrenome =  $_POST["sobrenome"];
	$dataNasc =      $_POST["datanasc"];
	$sexo =      $_POST["sexo"];
	$casa =      $_POST["residencia"];

	include "../../conexao.php";

	$conexao = mysqli_connect($endereco, $usuario_banco, $senha_banco, $nome_banco);
     
	mysqli_query($conexao, " INSERT INTO habitante(nome, sobrenome, nascimento, sexo, id_residencia) VALUES('$nome','$sobrenome','$dataNasc', '$sexo', $casa) ");


?>