<?php
    include "../conexao.php";

    $conexao = mysqli_connect($endereco, $usuario_banco, $senha_banco, $nome_banco);
    
    $dados = mysqli_query($conexao, "SELECT * FROM residencia");
    
    $cont = 0;

    $json_array = array();

    while($registro = mysqli_fetch_assoc($dados)){
        $json_array[] = $registro;
    }

    echo json_encode($json_array);
?>