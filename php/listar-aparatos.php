<?php
    $endereco = "localhost:8889";
	$usuario_banco = "root";
	$senha_banco = "root";
	$nome_banco = "banco_bsi";

    $conexao = mysqli_connect($endereco, $usuario_banco, $senha_banco, $nome_banco);
    
    $dados = mysqli_query($conexao, "SELECT * FROM aparatodomestico");

    $cont = 0;

    while($registro = mysqli_fetch_assoc($dados)){
        $retorno["aparatodomestico"][$cont]["aparato"] = $registro['aparato'];
        $retorno["aparatodomestico"][$cont]["residenciaAparato"] = $registro['residenciaAparato'];

        $cont++;
    }

    echo json_encode($retorno)
?>