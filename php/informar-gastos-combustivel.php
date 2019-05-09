<?php

$residencia   =  $_POST["residencia"];
$consumo      =  $_POST["consumo"];



include "conexao.php";

$conexao = mysqli_connect($endereco, $usuario_banco, $senha_banco, $nome_banco);

mysqli_query($conexao, "INSERT INTO gastoDeCombustivel(residencia, consumo) VALUES ('$residencia', '$consumo') ");


?>