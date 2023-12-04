<?php
    require_once("bancoConexao.php");
    session_start();
    if($_SESSION["nome"]){
        header("Location:home.php");
        exit();
    } else{
        
    }
?>