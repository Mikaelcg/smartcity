 <?php

    include "../../conexao.php";

    $id =  $_POST["id"];

    UPDATE usuario SET confirmado = "1" WHERE id = $id;


 ?>