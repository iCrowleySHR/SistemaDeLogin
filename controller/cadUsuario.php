<?php
    require_once("bancoConexao.php");
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $cadNome = $_POST['name'];
        $cadSenha = $_POST['password'];
        $cadEmail = $_POST['email'];

        $sql = "select * from usuario where email = '$cadEmail'" ;
        $usuarioExiste = $conexao -> validarAcesso($sql);

        if($usuarioExiste == false){
            $conexao -> inserirUsuario($cadNome,$cadSenha,$cadEmail);
            $contaCriada = true;
        }
    }    
?>