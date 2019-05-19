<?php
	$enderecoResidencia =       $_POST["endereco"];
	$numero =                   $_POST["numero"];
	$complemento =              $_POST["complemento"];
	$metragem =                 $_POST["metragem"];
	$cidade =                   $_POST["cidade"];
	
	include "conexao.php";

	$conexao = mysqli_connect($endereco, $usuario_banco, $senha_banco, $nome_banco);

	
	mysqli_query($conexao, " INSERT INTO residencia(endereco, numero, complemento, metragem, cidade) VALUES('$enderecoResidencia',$numero,'$complemento', $metragem, '$cidade') ");
    echo(" INSERT INTO residencia(endereco, numero, complemento, metragem, cidade) VALUES('$enderecoResidencia',$numero,'$complemento', $metragem, '$cidade') ");

?>