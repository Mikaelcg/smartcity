<?php
	
	$aparato  =       $_POST["aparato"];
	$residencia =       $_POST["residencia"];
	$consumo = $_POST["consumo"];

	$endereco = "localhost:8889";
	$usuario_banco = "root";
	$senha_banco = "root";
	$nome_banco = "banco_bsi";

	$conexao = mysqli_connect($endereco, $usuario_banco, $senha_banco, $nome_banco);

    echo(" INSERT INTO aparatodomestico(aparato, id_residencia, consumo) VALUES('$aparato','$residencia', $consumo) ");
     
	mysqli_query($conexao, " INSERT INTO aparatodomestico(aparato, id_residencia, consumo) VALUES('$aparato','$residencia', $consumo) ");

?>