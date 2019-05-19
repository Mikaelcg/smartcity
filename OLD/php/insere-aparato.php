<?php
	
	$aparato  =       $_POST["aparato"];
	$residencia =       $_POST["residencia"];
	$consumo = $_POST["consumo"];

	include "conexao.php";

	$conexao = mysqli_connect($endereco, $usuario_banco, $senha_banco, $nome_banco);

    echo(" INSERT INTO aparatodomestico(aparato, id_residencia, consumo) VALUES('$aparato','$residencia', $consumo) ");
     
	mysqli_query($conexao, " INSERT INTO aparatodomestico(aparato, id_residencia, consumo) VALUES('$aparato','$residencia', $consumo) ");

?>