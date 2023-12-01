<?php
    require_once(realpath(__DIR__.'../../model/conexao.php'));
    $config = parse_ini_file(__DIR__.'../../model/config.ini');
    $conexao = new conexao($config['dbname'], $config['host'], $config['user'], $config['password']);

    if($_SERVER['REQUEST_METHOD'] =='POST'){
        $senha = $_POST['password'];
        $email = $_POST['email'];

        $sql = "select * from usuario where senha = '$senha'  and email = '$email'" ;
       $resultado =  $conexao -> validarAcesso($sql);

       if($resultado == true){
            echo'
            <script>
            Swal.fire({
                title: "Usuário encontrado",
                text: "Ai sim hein campeão!!",
                icon: "success",
                color:"white",
                background:"#212121"
              });
            </script>
            ';
       } else {
            echo '
            <script>
            Swal.fire({
                title: "Usuario não encontrado",
                text: "Teste ir na página de cadastro",
                icon: "error",
                color:"white",
                background:"#212121"
              });
              </script>
            ';
       }
    }    
?>