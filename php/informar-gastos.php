<?php
    $endereco = "localhost";
	$usuario_banco = "root";
	 $senha_banco = "";
    $nome_banco = "banco_bsi";
    
    $id = $_POST["id"];

    $conexao = mysqli_connect($endereco, $usuario_banco, $senha_banco, $nome_banco);
    
    $dados = mysqli_query($conexao, "select a.id as id_aparato , aparato from aparatodomestico a join residencia r where a.id_residencia = r.id and r.id =".$id);
    $cont = 0;

    while($registro = mysqli_fetch_assoc($dados)){

        $retorno["aparato"][$cont]["id_aparato"] = $registro['id_aparato'];
        $retorno["aparato"][$cont]["aparato"] = $registro['aparato'];

        $cont++;
    }

    echo json_encode($retorno)
?>