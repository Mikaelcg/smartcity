<?php

    $hash =       $_POST["password"]; 

    $endereco = "localhost:8889";
	$usuario_banco = "root";
	$senha_banco = "root";
    $nome_banco = "banco_bsi";
    
    $conexao = mysqli_connect($endereco, $usuario_banco, $senha_banco, $nome_banco);

    $verHash = mysqli_query($conexao, "SELECT * FROM usuario WHERE senha = '$hash");

    if(mysql_num_rows($verHash) == 1){    
        echo "Usuário autenticado";
       }
       else{
        echo "Usuário não cadastrado"
       }

?>