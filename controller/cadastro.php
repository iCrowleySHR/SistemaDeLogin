<?php
    require_once("bancoConexao.php");
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $cadNome = $_POST['name'];
        $cadSenha = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $cadEmail = $_POST['email'];

        $sql = "select * from usuario where email = '$cadEmail'" ;
        $usuarioExiste = $conexao -> validarAcesso($sql);

        if($usuarioExiste == false){
            $conexao -> inserirUsuario($cadNome,$cadSenha,$cadEmail);
            $contaCriada = true;
            echo"<meta http-equiv='refresh' content='2;url=login.php'>";
        }
    }    
