<?php
    include "conexao.php";

    $conexao = mysqli_connect($endereco, $usuario_banco, $senha_banco, $nome_banco);
    
    $dados = mysqli_query($conexao, "SELECT * FROM habitante h join morador m where h.id = m.id_habitante;");
    $cont = 0;

    while($registro = mysqli_fetch_assoc($dados)){
        $retorno["habitante"][$cont]["nome"] = $registro['nome'];
        $retorno["habitante"][$cont]["sobrenome"] = $registro['sobrenome'];
        $retorno["habitante"][$cont]["nascimento"] = $registro['nascimento'];
        $retorno["habitante"][$cont]["sexo"] = $registro['sexo'];
        $retorno["habitante"][$cont]["id_residencia"] = $registro['id_residencia'];
        
        $cont++;
    }

    echo json_encode($retorno)
?>