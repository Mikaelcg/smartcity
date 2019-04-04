<?php
    $username = $_POST["username"];
    $password = $_POST["password"]; 
    $endereco = "localhost:8889";
	$usuario_banco = "root";
	$senha_banco = "root";
    $nome_banco = "banco_bsi";
    
    $conexao = mysqli_connect($endereco, $usuario_banco, $senha_banco, $nome_banco);
    
    $dados = mysqli_query($conexao, "SELECT * FROM usuario");
    
    $retorno = 0;
    
    while($user = mysqli_fetch_assoc($dados)){
        
        if( $user['username'] == $username && $user['senha'] == $password){
            $retorno = 1;
        }
    }

    echo($retorno)

?>