<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acessou</title>
    <link rel="stylesheet" href="view/css/style.css">
    <link rel="stylesheet" href="view/css/home.css">
    <script defer src="view/js/home.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <?php require 'view/components/header.php';?>
    <?php require 'controller/home.php' ?>
    <main>
        <section class="inicio-infos">
            <h1>
                Olá!!
                <?=$_SESSION["nome"];?>
            </h1>
            <p>
                O seu email cadastrado aqui é:
                <strong>
                    <?=$_SESSION["email"];?>
                </strong>
        <br>
        <br>
                Seu id de usuário é:
                <strong>
                    <?= $_SESSION["id"];?>
                </strong>
            </p>
        </section>
        <section class="user-opcoes">
            <label>Opções:</label>
                <button id="editar-email">Editar Email</button>
                <button id="editar-senha" >Editar Senha</button>
                <button id="editar-nome">Editar Nome</button>
                <button id="apagar-conta">Apagar Conta</button>
                <form method="post">
                    <button type="submit" name="acao" value="sair">Sair da Conta</button>
                </form>
        </section>

        <?php
            if (isset($emailAlterado) && $emailAlterado == true) {
                echo '
            <script>
                Swal.fire({
                    title: "Email alterado!",
                    text: "Email alterado com sucesso",
                    icon: "success",
                    color:"white",
                    position:"center",
                    background:"#212121"
                });
            </script>
                ';
            }
            if (isset($nomeAlterado) && $nomeAlterado == true) {
                echo '
            <script>
                Swal.fire({
                    title: "Nome alterado!",
                    text: "Nome alterado com sucesso",
                    icon: "success",
                    color:"white",
                    position:"center",
                    background:"#212121"
                });
            </script>
                ';
            }
            if (isset($senhaAlterada) && $senhaAlterada == true) {
                echo '
            <script>
                Swal.fire({
                    title: "Senha alterada!",
                    text: "Senha alterada com sucesso",
                    icon: "success",
                    color:"white",
                    position:"center",
                    background:"#212121"
                });
            </script>
                ';
            }else if(isset($senhaAlterada) && $senhaAlterada == false){
                echo '
                <script>
                    Swal.fire({
                        title: "Aviso!",
                        text: "Senha não alterada! Sua senha atual não está correta!",
                        icon: "error",
                        color:"white",
                        position:"center",
                        background:"#212121"
                    });
            </script>
                ';
            }
        ?>
    </main>
    <?php require 'view/components/footer.php'; ?>
</body>
</html>