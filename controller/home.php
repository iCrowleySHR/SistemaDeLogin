<?php
    require_once("bancoConexao.php");
    session_start();
    if(isset($_SESSION["nome"]) && isset($_SESSION["email"])){
        if($_SERVER['REQUEST_METHOD'] =='POST'){
            $acao = $_POST['acao'];
            switch ($acao) {
                case 'sair':
                    session_destroy();
                    header('Location: ../../index.php');
                    break;
                case 'editarEmail':
                    $novoEmail = $_POST['editarEmail'];
                    var_dump($novoEmail);
                    break;
            }
        }
    } else{
        header("Location: ../../index.php");
        exit();
    }

?>