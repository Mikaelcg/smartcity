<?php
	
	$nome =       $_POST["nome"];
	$sobrenome =  $_POST["sobrenome"];
	$dataNasc =      $_POST["dataNasc"];
	$sexo =      $_POST["sex"];
	$casa =      $_POST["casa"];

	include "conexao.php";

	$conexao = mysqli_connect($endereco, $usuario_banco, $senha_banco, $nome_banco);

    // echo(" INSERT INTO habitante(nome, sobrenome, nascimento, sexo) VALUES('$nome','$sobrenome','$dataNasc', '$sexo') ");
     
	mysqli_query($conexao, " INSERT INTO habitante(nome, sobrenome, nascimento, sexo) VALUES('$nome','$sobrenome','$dataNasc', '$sexo') ");

	$id = $conexao->insert_id;

	echo ($id);

	mysqli_query($conexao, " INSERT INTO morador(id_habitante, id_residencia) VALUES($id, $casa) ");

	echo (" INSERT INTO morador(id_habitante, id_residencia) VALUES('$id', '$casa') ");
?>