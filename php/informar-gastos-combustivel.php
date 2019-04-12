<?php

$residencia   =  $_POST["residencia"];
$consumo      =  $_POST["consumo"];



$endereco = "localhost:8889";
$usuario_banco = "root";
$senha_banco = "root";
$nome_banco = "banco_bsi";

$conexao = mysqli_connect($endereco, $usuario_banco, $senha_banco, $nome_banco);

mysqli_query($conexao, "INSERT INTO gastoDeCombustivel(residencia, consumo) VALUES ('$residencia', '$consumo') ");


?>