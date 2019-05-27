<?php
    $email = $_POST["email"];
    $password = $_POST["senha"]; 
    
    include "../conexao.php";
    
    $conexao = mysqli_connect($endereco, $usuario_banco, $senha_banco, $nome_banco);
    
    $dados = mysqli_query($conexao, "SELECT * FROM usuario");
    
    $retorno = 0;
    
    while($user = mysqli_fetch_assoc($dados)){
        
        if( $user['email'] == $email && $user['senha'] == $password && $user['confirmado'] == 1){
            $retorno = 1;
        }

        if( $user['email'] == $email && $user['senha'] == $password && $user['confirmado'] == 0){
            $retorno = 2;
        }
    }

    echo($retorno)

?>