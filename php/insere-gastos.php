<?php

$endereco = "localhost";
$usuario_banco = "root";
 $senha_banco = "";
$nome_banco = "banco_bsi";

$residencia = $_POST["residencia"];
$aparato = $_POST["aparato"];
$consumo = $_POST["consumo"];

$conexao = mysqli_connect($endereco, $usuario_banco, $senha_banco, $nome_banco);

mysqli_query($conexao, " INSERT INTO consumo_eletrico(id_residencia, id_aparato, tempo_consumo) VALUES('$residencia','$aparato', $consumo) ");

?>