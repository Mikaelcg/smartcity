<?php
	
	session_start();

	$nome =       $_POST["nome"];
	$email =  $_POST["email"];
    $senha=      $_POST["password"];
    $confirmado = 0;

	include "../../conexao.php";

	$conexao = mysqli_connect($endereco, $usuario_banco, $senha_banco, $nome_banco);
    
	mysqli_query($conexao, " INSERT INTO usuario(nome, email, senha, confirmado) VALUES('$nome','$email','$senha', $confirmado) ");

	$id = $conexao->insert_id;
	echo($id);

	// $id = mysqli_query($conexao, " SELECT MAX(id) as id FROM usuario ");

	// while($registro = mysqli_fetch_assoc($id)){
    //     $id_array[] = $registro;
    // }
	// echo json_encode($id_array);

?>