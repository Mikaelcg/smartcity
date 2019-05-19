<?php
    include "conexao.php";

    $conexao = mysqli_connect($endereco, $usuario_banco, $senha_banco, $nome_banco);
    
    $dados = mysqli_query($conexao, "SELECT * FROM residencia");

    $cont = 0;

    while($registro = mysqli_fetch_assoc($dados)){
        $retorno["residencia"][$cont]["id"] = $registro['id'];
        $retorno["residencia"][$cont]["endereco"] = $registro['endereco'];
        $retorno["residencia"][$cont]["numero"] = $registro['numero'];
        $retorno["residencia"][$cont]["complemento"] = $registro['complemento'];
        $retorno["residencia"][$cont]["metragem"] = $registro['metragem'];
        $retorno["residencia"][$cont]["cidade"] = $registro['cidade'];

        $cont++;
    }

    echo json_encode($retorno)
?>