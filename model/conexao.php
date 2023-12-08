<?php 
class conexao{
    private $pdo;
    public function __construct($dbname, $host, $user, $password) {
        try {
            $this -> pdo = New PDO ("mysql:dbname=" . $dbname . ";host=" . $host, $user, $password);
            return "CONEXÃO DO PDO";
        } catch (PDOException $erro) {
            return "ERRO DE CONEXÃO NO PDO:" . $erro -> getMessage();
            exit();
        } catch (Exception $erro) {
            return "ERRO NÃO PASSOU DA CONEXÃO:" . $erro -> getMessage();
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
        $resultados = array();

        while($resultado = $consultaBanco -> fetch(PDO::FETCH_ASSOC)){
            $resultados[] = $resultado;
        }
        
        return $resultados;
    }
}
?>