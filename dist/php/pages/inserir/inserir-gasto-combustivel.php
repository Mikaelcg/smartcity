<?php
	
	$residencia =       $_POST["residencia"];
	$carro =            $_POST["carro"];
	$quantiade =        $_POST["quantidade"];
	$data =      $_POST["data"];


	include "../../conexao.php";

	$conexao = mysqli_connect($endereco, $usuario_banco, $senha_banco, $nome_banco);
     
	mysqli_query($conexao, " INSERT INTO consumo_combustivel(id_residencia, id_carro, quantidade_litros, data_consumo) VALUES($residencia, $carro, $quantidade, '$data') ");

?>