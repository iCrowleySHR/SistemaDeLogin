<?php
    require_once("bancoConexao.php");
    session_start();
    if(isset($_SESSION["nome"]) && isset($_SESSION["email"])){
        if($_SERVER['REQUEST_METHOD'] =='POST'){
            $acao = $_POST["acao"];
            $idUsuario = $_SESSION["id"];

            switch ($acao) {
                case 'sair':
                    session_destroy();
                    header('Location: ../../index.php');
                    break;

                case 'editarEmail':
                    $novoEmail = $_POST["editarEmail"];
                    $conexao -> alteraEmail($novoEmail,$idUsuario);
                    $_SESSION["email"] = $novoEmail;
                    $emailAlterado = true;
                    break;

                case 'editarNome':
                    $novoNome = $_POST["editarNome"];
                    $conexao -> alteraNome($novoNome,$idUsuario);
                    $_SESSION["nome"] = $novoNome;
                    $nomeAlterado = true;
                    break;

                case "editarSenha":
                    $senhaNova = $_POST["senhaNova"];
                    $senhaAtual = $_POST["senhaAtual"];

                    $sql = "select * from usuario where codUsuario = '$idUsuario'";
                    $consultaBanco = $conexao -> consultaBanco($sql);

                        foreach($consultaBanco as $dados){
                            $senhaUsuarioBanco = $dados['senha'];
                        }

                        if($senhaUsuarioBanco == $senhaAtual){
                            $conexao -> alteraSenha($senhaNova,$idUsuario);
                            $senhaAlterada= true;
                        }else{
                            $senhaAlterada= false;
                        }
                    
                    break;
            }
        }
    } else{
        header("Location: ../../index.php");
        exit();
    }

?>