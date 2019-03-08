<?php
	
	$nome =       $_POST["nome"];
	$sobrenome =  $_POST["sobrenome"];
	$idade =      $_POST["idade"];

	$endereco = "localhost:8889";
	$usuario_banco = "root";
	$senha_banco = "root";
	$nome_banco = "banco_bsi";

	$conexao = mysqli_connect($endereco, $usuario_banco, $senha_banco, $nome_banco);

    echo(" INSERT INTO habitante(nome, sobrenome, idade) VALUES('$nome','$sobrenome',$idade) ");
     
	mysqli_query($conexao, " INSERT INTO habitante(nome, sobrenome, idade) VALUES('$nome','$sobrenome',$idade) ");


?>