<?php
    require("bancoConexao.php");
    session_start();
    var_dump($_SESSION);
    if(isset($_SESSION["nome"])){
        header("Location:home.php");
    }
?>