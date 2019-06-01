<?php
    include "../../conexao.php";

    $casa = $_POST["casa"];

    $conexao = mysqli_connect($endereco, $usuario_banco, $senha_banco, $nome_banco);
    
    $dados = mysqli_query($conexao, "SELECT id_residencia, sum(quantidade_litros) as total, SUBSTR(data_consumo,4, 2) as mes_consumo FROM consumo_combustivel where id_residencia = 5 group by mes_consumo;");
    
    $cont = 0;


    $json_array = array();

    while($registro = mysqli_fetch_assoc($dados)){
        // echo($registro);
        $json_array[] = $registro;
    }

    echo json_encode($json_array);
?>