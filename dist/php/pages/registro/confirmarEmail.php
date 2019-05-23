 <?php

    include "../../conexao.php";

    session_start();

    $_SESSION["id"];

    UPDATE usuario SET confirmado = "1" WHERE id = $_SESSION["id"];


 ?>