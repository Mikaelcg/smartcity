<?php
	
	$residencia =       $_POST["residencia"];
	$quantiade =        $_POST["quantidade"];
	$data =      $_POST["data"];


	include "../../conexao.php";

	$conexao = mysqli_connect($endereco, $usuario_banco, $senha_banco, $nome_banco);
     
	mysqli_query($conexao, " INSERT INTO consumo_agua(id_residencia, quantidade_litros, data_consumo) VALUES($residencia, $quantidade, '$data') ");

?>