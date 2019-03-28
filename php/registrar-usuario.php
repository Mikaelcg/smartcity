<?php
    
    $username  =       $_POST["username"];
    $email =       $_POST["email"]; 
    $password =       $_POST["password"]; 

    $endereco = "localhost:8889";
	$usuario_banco = "root";
	$senha_banco = "root";
    $nome_banco = "banco_bsi";
    
    $conexao = mysqli_connect($endereco, $usuario_banco, $senha_banco, $nome_banco);
<<<<<<< HEAD
    
    mysqli_query($conexao, " INSERT INTO usuario(username, email, senha) VALUES('$username', '$email', '$password') ");
    
=======
        
    mysqli_query($conexao, " INSERT INTO usuario(username, email, senha) VALUES('$username','$email','$password')");

>>>>>>> 21907a25889f5a5aa2449e9318f2554f8edd2be3
?>