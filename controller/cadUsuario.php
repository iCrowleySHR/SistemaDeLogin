<?php
    require_once(realpath(__DIR__.'../../model/conexao.php'));
    $config = parse_ini_file(__DIR__.'../../model/config.ini');
    $conexao = new conexao($config['dbname'], $config['host'], $config['user'], $config['password']);

    if($_SERVER['REQUEST_METHOD']=='POST'){
        $cadNome = $_POST['name'];
        $cadSenha = $_POST['password'];
        $cadEmail = $_POST['email'];

        $sql = "select * from usuario where email = '$cadEmail'" ;
        $usuarioExiste = $conexao -> validarAcesso($sql);

        if($usuarioExiste == true){ //Usuario já existe
            echo '
            <script>
            Swal.fire({
                title: "Problemas para criar conta",
                text: "Email já está sendo usado no momento.",
                icon: "error",
                color:"white",
                position:"center",
                background:"#212121"
            });
            </script>
            ';
        } else{ //Usuario não existente no sistema
            $conexao -> inserirUsuario($cadNome,$cadSenha,$cadEmail);
            echo'
            <script>
            Swal.fire({
                title: "Conta Criada!!!",
                text: "Acesse ela na página Login",
                icon: "success",
                color:"white",
                position:"center",
                background:"#212121"
            });
            </script>
            ';
        }
    }    
?>