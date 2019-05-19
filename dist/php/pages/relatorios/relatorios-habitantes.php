<?php
    include "../../conexao.php";

    $conexao = mysqli_connect($endereco, $usuario_banco, $senha_banco, $nome_banco);
    
    $dados = mysqli_query($conexao, "select h.id, h.nome, h.sobrenome, h.nascimento, h.sexo, r.id as id_residencia, r.endereco as endereco, r.numero as numero from residencia r join habitante h where h.id_residencia = r.id");
    
    $cont = 0;

    $json_array = array();

    while($registro = mysqli_fetch_assoc($dados)){
        $json_array[] = $registro;
    }

    echo json_encode($json_array);
?>