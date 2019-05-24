<?php
    include "../../conexao.php";

    $casa = $_POST["casa"];

    $conexao = mysqli_connect($endereco, $usuario_banco, $senha_banco, $nome_banco);
    
    $dados = mysqli_query($conexao, "SELECT c.id_residencia, SUBSTR(c.data_consumo,4, 2) as mes_consumo, sum(c.tempo_consumo * a.potencia) as total FROM consumo_eletrico c join aparatodomestico a 
        WHERE c.id_aparato = a.id 
        and c.id_residencia = $casa
        group by mes_consumo;");
    
    $cont = 0;


    $json_array = array();

    while($registro = mysqli_fetch_assoc($dados)){
        // echo($registro);
        $json_array[] = $registro;
    }

    echo json_encode($json_array);
?>