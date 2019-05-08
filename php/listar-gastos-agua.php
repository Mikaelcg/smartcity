<?php
    $endereco = "localhost";
	$usuario_banco = "root";
	 $senha_banco = "";
	$nome_banco = "banco_bsi";

    $conexao = mysqli_connect($endereco, $usuario_banco, $senha_banco, $nome_banco);
    
    
    $dados_energia = mysqli_query($conexao, "SELECT sum(consumo) as total_agua FROM consumo_agua group by id_residencia");

    $cont = 0;
    
    while($registro = mysqli_fetch_assoc($dados_energia)){
        $retorno["gastos"][$cont]["id_residencia"] = $registro['id_residencia'];
        $retorno["gastos"][$cont]["total"] = $registro['total'];
        $cont++;
    }


    echo($registro['id_residencia']);
    
    echo json_encode($retorno);
?>