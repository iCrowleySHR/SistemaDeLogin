<?php

require_once("bancoConexao.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $senhaUsuario = $_POST['password'];
  $email = $_POST['email'];
  $sql = "select * from usuario where email = '$email'";
  $resultado = $conexao->consultaBanco($sql);

  if ($resultado) {
    foreach ($resultado as $dados) {
      $senhaDB = $dados['senha'];

      if (password_verify($senhaUsuario, $senhaDB)) { //Se for igual
        $_SESSION["nome"] = $dados["nome"];
        $_SESSION["email"] = $dados["email"];
        $_SESSION["id"] = $dados["codUsuario"];

        echo "<script>window.location.href = '" . URL . "home';</script>";
        die();
      } else {
        $erroEncontrado = true;
      }
    }
  } else {
    $erroEncontrado = true;
  }
}

if (isset($_SESSION["nome"])) {
  echo "<script>window.location.href = '" . URL . "home';</script>";
  die();
}