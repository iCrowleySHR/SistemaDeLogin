<?php
require_once("bancoConexao.php");
header("Content-Type: application/json");

$sql = "SELECT codUsuario, nome, email FROM usuario where codUsuario = 13";
$valores = $conexao->consultaBanco($sql);

$jsonArray = array();

foreach ($valores as $dados){

    $jsonArray = [
        "nome"=> $dados["nome"], 
        "id"=> $dados["codUsuario"],
        "email"=> $dados["email"]
    ];

    echo  json_encode($jsonArray, JSON_PRETTY_PRINT) . "\n";
};


?>
