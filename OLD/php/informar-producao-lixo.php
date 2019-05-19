<?php

$residencia   =  $_POST["residencia"];
$producaoLixo      =  $_POST["consumo"];



include "conexao.php";

$conexao = mysqli_connect($endereco, $usuario_banco, $senha_banco, $nome_banco);

mysqli_query($conexao, "INSERT INTO producaoLixo(residencia, consumo) VALUES ('$residencia', '$producaoLixo') ");


?>