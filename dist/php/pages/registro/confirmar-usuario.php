 <?php

    include "../../conexao.php";

    $id = $_GET["id"];
    $md5 = $_GET["codigo"];

    $conexao = mysqli_connect($endereco, $usuario_banco, $senha_banco, $nome_banco);
    
	 mysqli_query($conexao, "UPDATE usuario SET cofirmado = 1 WHERE codigo_confirmacao = $md5");


 ?>