<?php
    require_once("bancoConexao.php");
    session_start();
    echo"Olá!!!! " . $_SESSION["nome"] . "<br>";
    echo"O email cadastrado é: " . $_SESSION["email"];
?>