<?php
	
	$enderecoCasa =       $_POST["endereco"];
	$numero =  $_POST["numero"];
	$complemento =      $_POST["complemento"];
	$cidade =      $_POST["cidade"];
	$area =      $_POST["area"];

	include "../../conexao.php";
		echo $enderecoCasa.$numero.$complemento.$cidade.$area;
	$conexao = mysqli_connect($endereco, $usuario_banco, $senha_banco, $nome_banco);
     
	mysqli_query($conexao, " INSERT INTO residencia(endereco, numero,complemento,area, cidade) VALUES('$enderecoCasa',$numero,'$complemento', $area, '$cidade')");


?>