<?php
  require_once("bancoConexao.php");
  session_start();
  require "verificaSessao.php";
  if($_SERVER['REQUEST_METHOD'] =='POST'){
    $senha = $_POST['password'];
    $email = $_POST['email'];

    $sql = "select * from usuario where senha = '$senha'  and email = '$email'" ;
    $resultado =  $conexao -> validarAcesso($sql);

      if($resultado == true){

        session_start();
        $sql = "select * from usuario where email = '$email'";
        $resultado = $conexao -> consultaBanco($sql);
        $_SESSION["nome"] = $resultado["nome"];
        $_SESSION["email"] = $resultado["email"];

        header("Location: home.php");
        echo'
        <script>
        Swal.fire({
            title: "Usuário encontrado",
            text: "Ai sim hein campeão!!",
            icon: "success",
            color:"white",
            position:"center",
            background:"#212121"
        });
        </script>
        ';
        } else {
        echo '
        <script>
        Swal.fire({
            title: "Usuario não encontrado",
            text: "Email ou senha incorretos",
            icon: "error",
            color:"white",
            position:"center",
            background:"#212121"
        });
        </script>
        ';
    }
  }    
?>