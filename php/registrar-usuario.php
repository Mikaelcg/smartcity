<?php
    $username  =       $_POST["username"];
    $email =       $_POST["email"]; 
    $password =       $_POST["password"]; 

    $endereco = "localhost:8889";
    $usuario_banco = "root";
    $senha_banco = "root";
    $nome_banco = "banco_bsi";

    $conexao = mysqli_connect($endereco, $usuario_banco, $senha_banco, $nome_banco);
        
    echo("testr: INSERT INTO usuario(username, email, senha) VALUES('$username','$email','$password')");
    mysqli_query($conexao, " INSERT INTO usuario(username, email, senha) VALUES('$username','$email','$password')");
    
?>