<?php
	
	$nome =       $_POST["nome"];
	$sobrenome =  $_POST["sobrenome"];
	$dataNasc =      $_POST["dataNasc"];
	$sexo =      $_POST["sex"];

	$endereco = "localhost";
	$usuario_banco = "root";
	$senha_banco = "";
	$nome_banco = "banco_bsi";

	$conexao = mysqli_connect($endereco, $usuario_banco, $senha_banco, $nome_banco);

    echo(" INSERT INTO habitante(nome, sobrenome, nascimento, sexo) VALUES('$nome','$sobrenome','$dataNasc', '$sexo') ");
     
	mysqli_query($conexao, " INSERT INTO habitante(nome, sobrenome, nascimento, sexo) VALUES('$nome','$sobrenome','$dataNasc', '$sexo') ");


?>