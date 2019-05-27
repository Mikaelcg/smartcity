 <?php

   include "../../conexao.php";

   $id = $_GET["id"];
   $md5 = $_GET["codigo"];

   // echo($id.$md5);

   $conexao = mysqli_connect($endereco, $usuario_banco, $senha_banco, $nome_banco);
   
   mysqli_query($conexao, "UPDATE usuario SET confirmado = 1 WHERE id = $id AND codigo_confirmacao = '$md5'");


 ?>