<?php

$residencia   =  $_POST["residencia"];
$consumo      =  $_POST["consumo"];

include "conexao.php";

$conexao = mysqli_connect($endereco, $usuario_banco, $senha_banco, $nome_banco);
// SELECT sum(consumo) as consumo_total FROM consumo_agua group by id_residencia;
mysqli_query($conexao, "INSERT INTO consumo_agua(id_residencia, consumo) VALUES ('$residencia', '$consumo') ");


?>