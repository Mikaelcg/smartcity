<?php
	
	$residencia =       $_POST["residencia"];
	$tipo =  $_POST["tipo"];
	$tempo =      $_POST["tempo"];
	$data =      $_POST["data"];


	include "../../conexao.php";

	$conexao = mysqli_connect($endereco, $usuario_banco, $senha_banco, $nome_banco);
     
	mysqli_query($conexao, " INSERT INTO consumo_eletrico(id_aparato, id_residencia, tempo_consumo, data_consumo) VALUES($residencia,$tipo,$tempo, '$data') ");

?>