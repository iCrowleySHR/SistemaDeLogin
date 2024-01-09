<?php
session_start();
require_once('../model/conexao.php');
$conexao = new conexao();
header("Content-Type: application/json");
if (isset($_SESSION["email"])) {
    $email = $_SESSION['email'];
    $sql = "SELECT codUsuario, nome, email FROM usuario where email = '$email'";
    $valores = $conexao->consultaBanco($sql);

    $jsonArray = array();

    foreach ($valores as $dados) {
        $jsonArray = [
            "nome" => $dados["nome"],
            "id" => $dados["codUsuario"],
            "email" => $dados["email"]
        ];
        echo json_encode($jsonArray, JSON_PRETTY_PRINT) . "\n";
    }
    ;

} else {
    echo json_encode("voce so tera acesso se estiver logado");
    exit();
}

