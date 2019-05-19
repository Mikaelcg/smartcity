<?php
include "conexao.php";
    $conexao = mysqli_connect($endereco, $usuario_banco, $senha_banco, $nome_banco);
    
    $dados = mysqli_query($conexao, "select a.id, a.aparato, a.id_residencia, a.consumo, sum(c.tempo_consumo) tempo, sum((a.consumo * c.tempo_consumo)) total 
                            from aparatodomestico a join consumo_eletrico c 
                            where a.id = c.id_aparato group by a.id");
    $cont = 0;
    
    while($registro = mysqli_fetch_assoc($dados)){
        $retorno["aparatodomestico"][$cont]["id"] = $registro['id'];
        $retorno["aparatodomestico"][$cont]["aparato"] = $registro['aparato'];
        $retorno["aparatodomestico"][$cont]["consumo"] = $registro['consumo'];
        $retorno["aparatodomestico"][$cont]["id_residencia"] = $registro['id_residencia'];
        $retorno["aparatodomestico"][$cont]["tempo"] = $registro['tempo'];
        $retorno["aparatodomestico"][$cont]["total"] = $registro['total'];

        $cont++;
    }

    echo($registro['id_residencia']);
    
    echo json_encode($retorno);
?>