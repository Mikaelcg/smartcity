<?php
	
	$aparatoDomestico  =       $_POST["aparato"];
    $residenciaAparato =       $_POST["residenciaAparato"]; 

	$endereco = "localhost";
	$usuario_banco = "root";
	$senha_banco = "";
	$nome_banco = "banco_bsi";

	$conexao = mysqli_connect($endereco, $usuario_banco, $senha_banco, $nome_banco);

    echo(" INSERT INTO aparatodomestico(aparato, id_residencia) VALUES('$aparatoDomestico','$residenciaAparato') ");
     
	mysqli_query($conexao, " INSERT INTO aparatodomestico(aparato, id_residencia) VALUES('$aparatoDomestico','$residenciaAparato') ");


?>