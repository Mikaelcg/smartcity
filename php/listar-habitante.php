<?php
    $endereco = "localhost";
	$usuario_banco = "root";
	$senha_banco = "";
	$nome_banco = "banco_bsi";

    $conexao = mysqli_connect($endereco, $usuario_banco, $senha_banco, $nome_banco);
    
    $dados = mysqli_query($conexao, "SELECT * FROM habitante");

    $cont = 0;

    while($registro = mysqli_fetch_assoc($dados)){
        $retorno["habitante"][$cont]["nome"] = $registro['nome'];
        $retorno["habitante"][$cont]["sobrenome"] = $registro['sobrenome'];
        $retorno["habitante"][$cont]["nascimento"] = $registro['nascimento'];
        $retorno["habitante"][$cont]["sexo"] = $registro['sexo'];
        
        $cont++;
    }

    echo json_encode($retorno)
?>