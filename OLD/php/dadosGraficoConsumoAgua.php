<?php
    
    $id_residencia = $_POST["id_residencia"];
    
    include "conexao.php";
    $conexao = mysqli_connect($endereco, $usuario_banco, $senha_banco, $nome_banco);
    $dados = mysqli_query($conexao, "SELECT id_residencia, consumo FROM consumo_agua" );
    // $dados = mysqli_query($conexao, "SELECT sum(tempo_consumo) 'tempo_consumo', id_residencia from consumo_eletrico GROUP BY id_residencia);

    $cont = 0;

    

    while($registro = mysqli_fetch_assoc($dados)){
        $cont++;
        $retorno[$cont]["residencia"] = $registro["id_residencia"];
        $retorno[$cont]["consumo"] = $registro["tempo"]; 
        
    }

    if($cont > 0){
        $retorno["status"] = "s";

        echo json_encode($retorno);
    }else{
        $retorno["status"] = "n";

        echo("erro");
    }
?>