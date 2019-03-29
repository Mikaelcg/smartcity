<?php
	$enderecoResidencia =       $_POST["endereco"];
	$numero =  $_POST["numero"];
	$complemento =     $_POST["complemento"];
	$metragem =     $_POST["metragem"];
	$cidade =     $_POST["cidade"];
	
	$endereco = "localhost";
	$usuario_banco = "root";
	$senha_banco = "";
	$nome_banco = "banco_bsi";

	$conexao = mysqli_connect($endereco, $usuario_banco, $senha_banco, $nome_banco);

    echo(" INSERT INTO residencia(endereco, numero, complemento, metragem, cidade) VALUES('$enderecoResidencia',$numero,'$complemento', $metragem, '$cidade') ");
     
	mysqli_query($conexao, " INSERT INTO residencia(endereco, numero, complemento, metragem, cidade) VALUES('$enderecoResidencia',$numero,'$complemento', $metragem, '$cidade') ");

?>