<?php
	
	$residencia =       $_POST["residencia"];
	$tipo =  $_POST["tipo"];
	$potencia =      $_POST["potencia"];


	include "../../conexao.php";

	$conexao = mysqli_connect($endereco, $usuario_banco, $senha_banco, $nome_banco);
     
	mysqli_query($conexao, " INSERT INTO aparatodomestico(aparato, id_residencia, potencia) VALUES('$tipo',$residencia,$potencia) ");

?>