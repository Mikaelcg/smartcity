<?php
    include "../../conexao.php";

    $conexao = mysqli_connect($endereco, $usuario_banco, $senha_banco, $nome_banco);
    
    $dados = mysqli_query($conexao, "SELECT c.id , c.id_residencia, SUBSTR(c.data_consumo,4, 2) as mes_consumo, sum(c.tempo_consumo * a.potencia) as total FROM consumo_eletrico c join aparatodomestico a where c.id_aparato = a.id
    group by mes_consumo;");
    
    $cont = 0;

    $json_array = array();

    while($registro = mysqli_fetch_assoc($dados)){
        $json_array[] = $registro;
    }

    echo json_encode($json_array);
?>