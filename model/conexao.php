<?php 
include('config.php');
class conexao{
    private $pdo;
    public function __construct() {
        try {
            $this -> pdo = New PDO ("mysql:dbname=" . dbname . ";host=" . host, user, password);
        } catch (PDOException $erro) {
            echo "ERRO DE CONEXÃO NO PDO:" . $erro -> getMessage();
            exit();
        } catch (Exception $erro) {
            echo "ERRO NÃO PASSOU DA CONEXÃO:" . $erro -> getMessage();
            exit();
        }
    }

    public function inserirUsuario($cadNome,$cadSenha,$cadEmail){
        $insereUsuario = $this -> pdo -> prepare("insert into usuario(nome,senha,email) VALUES(:nome,:senha,:email);");
        $insereUsuario->bindValue(":nome",$cadNome);
        $insereUsuario->bindValue(":senha",$cadSenha);
        $insereUsuario->bindValue(":email",$cadEmail);
        $insereUsuario->execute();
    }

    public function validarAcesso($sql){
        $consultaBanco = $this -> pdo -> query($sql);
        $resultado = array();
        while($resultado = $consultaBanco -> fetch(PDO::FETCH_ASSOC)){
            if ($resultado !== false) { // Usuario existe
                return true;
            } else{ //Usuario não existe
                return false;
            }
        }
    }

    public function consultaBanco($sql){
        $consultaBanco = $this -> pdo -> query($sql);
        $resultado = array();

        while($resultados = $consultaBanco -> fetch(PDO::FETCH_ASSOC)){
            $resultado[] = $resultados;
        }
        return $resultado;
    }

    public function alteraNome($novoNome,$idUsuario){
        $alteraNome = $this -> pdo -> prepare("UPDATE usuario SET nome = :novoNome WHERE codUsuario = :id;");
        $alteraNome->bindValue(":novoNome",$novoNome);
        $alteraNome->bindValue(":id",$idUsuario);
        $alteraNome->execute();
    }

    public function alteraEmail($novoEmail, $idUsuario){
        $alteraEmail = $this -> pdo -> prepare("UPDATE usuario SET email = :novoEmail WHERE codUsuario = :id;");
        $alteraEmail->bindValue(":novoEmail",$novoEmail);
        $alteraEmail->bindValue(":id",$idUsuario);
        $alteraEmail->execute();
    }

    public function alteraSenha($senhaNova,$idUsuario){
        $alteraSenha = $this -> pdo -> prepare("UPDATE usuario SET senha = :novaSenha WHERE codUsuario = :id;");
        $alteraSenha->bindValue(":novaSenha",$senhaNova);
        $alteraSenha->bindValue("id",$idUsuario);
        $alteraSenha->execute();
    }

    public function deletarConta($idUsuario){
        $deletarConta = $this -> pdo -> prepare("delete from usuario where codUsuario = :id");
        $deletarConta->bindValue(":id",$idUsuario);
        $deletarConta->execute();
    }
}
?>