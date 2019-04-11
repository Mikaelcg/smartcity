<?php
    $endereco = "localhost:8889";
	$usuario_banco = "root";
	$senha_banco = "root";
	$nome_banco = "banco_bsi";

    $conexao = mysqli_connect($endereco, $usuario_banco, $senha_banco, $nome_banco);
    
    $dados = mysqli_query($conexao, "SELECT r.id, endereco, numero, SUM(consumo) as consumo FROM aparatodomestico a join residencia r where a.id_residencia = r.id group by r.id");
    $cont = 0;
    
    while($registro = mysqli_fetch_assoc($dados)){
        $retorno["gastos"][$cont]["id"] = $registro['id'];
        $retorno["gastos"][$cont]["endereco"] = $registro['endereco'];
        $retorno["gastos"][$cont]["numero"] = $registro['numero'];
        $retorno["gastos"][$cont]["consumo"] = $registro['consumo'];

        $cont++;
    }

    echo($registro['id_residencia']);
    
    echo json_encode($retorno);
?>