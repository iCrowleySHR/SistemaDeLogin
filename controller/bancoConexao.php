<?php
    require_once(realpath(__DIR__.'../../model/conexao.php'));
    $config = parse_ini_file(__DIR__.'../../model/config.ini');
    $conexao = new conexao($config['dbname'], $config['host'], $config['user'], $config['password']);
?>