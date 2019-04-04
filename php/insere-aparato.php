<?php
	
	$aparatoDomestico  =       $_POST["aparato"];
    $residenciaAparato =       $_POST["residenciaAparato"]; 

<<<<<<< HEAD
	$endereco = "localhost:8889";
=======
	$endereco = "localhost";
>>>>>>> ec584bd671d370e3b48e25c30007ea9029f577c9
	$usuario_banco = "root";
	$senha_banco = "";
	$nome_banco = "banco_bsi";

	$conexao = mysqli_connect($endereco, $usuario_banco, $senha_banco, $nome_banco);

    echo(" INSERT INTO aparatodomestico(aparato, id_residencia) VALUES('$aparatoDomestico','$residenciaAparato') ");
     
	mysqli_query($conexao, " INSERT INTO aparatodomestico(aparato, id_residencia) VALUES('$aparatoDomestico','$residenciaAparato') ");


?>