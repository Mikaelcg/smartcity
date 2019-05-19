<?php

include "conexao.php";

$residencia = $_POST["residencia"];
$aparato = $_POST["aparato"];
$consumo = $_POST["consumo"];
$data = $_POST["data"];

$conexao = mysqli_connect($endereco, $usuario_banco, $senha_banco, $nome_banco);

echo($residencia.$aparato.$consumo.$data);
mysqli_query($conexao, " INSERT INTO consumo_eletrico(id_residencia, id_aparato, tempo_consumo, data_consumo) VALUES($residencia,$aparato, $consumo, '$data') ");

?>