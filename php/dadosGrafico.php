<?php
    
    $id_residencia = $_POST["id_residencia"];
    
    $endereco = "localhost";
	$usuario_banco = "root";
	 $senha_banco = "";
	$nome_banco = "banco_bsi";

    $conexao = mysqli_connect($endereco, $usuario_banco, $senha_banco, $nome_banco);
    $dados = mysqli_query($conexao, "SELECT id_residencia, tempo_consumo FROM consumo_eletrico" );

    $cont = 0;

    

    while($registro = mysqli_fetch_assoc($dados)){
        $cont++;
        $retorno[$cont]["residencia"] = $registro["id_residencia"];
        $retorno[$cont]["consumo_eletrico"] = $registro["tempo_consumo"]; 
        
    }

    if($cont > 0){
        $retorno["status"] = "s";

        echo json_encode($retorno);
    }else{
        $retorno["status"] = "n";

        echo("erro");
    }
?>