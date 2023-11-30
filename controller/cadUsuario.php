<?php
    require_once(realpath(__DIR__.'../../model/conexao.php'));
    $config = parse_ini_file(__DIR__.'../../model/config.ini');
    $conexao = new conexao($config['dbname'], $config['host'], $config['user'], $config['password']);

    if($_SERVER['REQUEST_METHOD']=='POST'){
        $cadNome = $_POST['name'];
        $cadSenha = $_POST['password'];
        $cadEmail = $_POST['email'];

        $conexao -> inserirUsuario();
    }    
?>