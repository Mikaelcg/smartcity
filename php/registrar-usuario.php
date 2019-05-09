<?php
    
    $username  =       $_POST["username"];
    $email =       $_POST["email"]; 
    $password =       $_POST["password"]; 

    include "conexao.php";
    
    $conexao = mysqli_connect($endereco, $usuario_banco, $senha_banco, $nome_banco);
    
    mysqli_query($conexao, " INSERT INTO usuario(username, email, senha) VALUES('$username', '$email', '$password') ");
    
?>