<?php
    include "conexao.php";

    $conexao = mysqli_connect($endereco, $usuario_banco, $senha_banco, $nome_banco);
    
    // $dados = mysqli_query($conexao, "SELECT r.id, endereco, numero, SUM(consumo) as consumo FROM aparatodomestico a join residencia r where a.id_residencia = r.id group by r.id");
    $dados_energia = mysqli_query($conexao, "SELECT c.id_residencia, sum((a.consumo * c.tempo_consumo))as total 
            FROM aparatodomestico a join consumo_eletrico c where a.id = c.id_aparato group by c.id_residencia");

    $cont = 0;
    
    while($registro = mysqli_fetch_assoc($dados_energia)){
        $retorno["gastos"][$cont]["id_residencia"] = $registro['id_residencia'];
        $retorno["gastos"][$cont]["total"] = $registro['total'];
        $cont++;
    }

    // echo($retorno);
    
    echo json_encode($retorno);
?>