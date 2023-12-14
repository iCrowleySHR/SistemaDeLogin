<?php
  require_once("bancoConexao.php");
  require("verificaSessao.php");
  
  if($_SERVER['REQUEST_METHOD'] =='POST'){
    $senha = $_POST['password'];
    $email = $_POST['email'];

    $sql = "select * from usuario where senha = '$senha'  and email = '$email'" ;
    $resultado =  $conexao -> validarAcesso($sql);

      if($resultado == true){
        session_start();
        $sql = "select * from usuario where email = '$email' ";
        $resultado = $conexao -> consultaBanco($sql);

        foreach($resultado as $dados){
          $_SESSION["nome"] = $dados["nome"];
          $_SESSION["email"] = $dados["email"];
        }
    
        header("Location: home.php");
        exit();
        } else {
        echo '
        <script>
        Swal.fire({
            title: "Usuario não encontrado",
            text: "Email ou senha incorreto",
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