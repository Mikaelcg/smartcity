<?php

$residencia   =  $_POST["residencia"];
$producaoLixo      =  $_POST["consumo"];



$endereco = "localhost";
$usuario_banco = "root";
 $senha_banco = "";
$nome_banco = "banco_bsi";

$conexao = mysqli_connect($endereco, $usuario_banco, $senha_banco, $nome_banco);

mysqli_query($conexao, "INSERT INTO producaoLixo(residencia, consumo) VALUES ('$residencia', '$producaoLixo') ");


?>