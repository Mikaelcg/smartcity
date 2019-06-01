<?php
	
	$residencia =       $_POST["residencia"];
	$quantidade =       $_POST["quantidade"];
	$data =             $_POST["data"];


	include "../../conexao.php";

	$conexao = mysqli_connect($endereco, $usuario_banco, $senha_banco, $nome_banco);
     
	mysqli_query($conexao, " INSERT INTO consumo_agua(id_residencia, quantidade_m3, data_consumo) VALUES($residencia, $quantidade, '$data') ");

	

?>